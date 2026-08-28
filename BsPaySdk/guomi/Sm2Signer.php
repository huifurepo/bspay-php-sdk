<?php
namespace BsPaySdk\guomi;

/**
 * SM2 签名/验签工具类
 * - SM3 哈希：优先 OpenSSL，自动 fallback 纯 PHP
 * - 标量运算：GMP
 */
class Sm2Signer
{
    const P  = 'FFFFFFFEFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF00000000FFFFFFFFFFFFFFFF';
    const A  = 'FFFFFFFEFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF00000000FFFFFFFFFFFFFFFC';
    const B  = '28E9FA9E9D9F5E344D5A9E4BCF6509A7F39789F515AB8F92DDBCBD414D940E93';
    const N  = 'FFFFFFFEFFFFFFFFFFFFFFFFFFFFFFFF7203DF6B21C6052B53BBF40939D54123';
    const GX = '32C4AE2C1F1981195F9904466A39C9948FE30BBFF2660BE1715A4589334C74C7';
    const GY = 'BC3736A2F4F6779C59BDCEE36B692153D0A9877CC62A474002DF32E52139F0A0';

    public static function sign($msg, $priKeyB64, $userId = '1234567812345678')
    {
        if (is_array($msg)) {
            throw new Exception('sign 收到数组，请先 json_encode 并排序');
        }
        $dHex = self::parsePrivateKey($priKeyB64);
        $d = gmp_init($dHex, 16);
        $N = gmp_init(self::N, 16);
        $Gx = gmp_init(self::GX, 16);
        $Gy = gmp_init(self::GY, 16);

        $pubPt = self::scalarMult($d, $Gx, $Gy);
        $pubHex = self::pointToHex($pubPt);

        $e = self::computeE($pubHex, $msg, $userId);

        do {
            do {
                $k = gmp_random_range(gmp_init(1), gmp_sub($N, 1));
                $Pt = self::scalarMult($k, $Gx, $Gy);
                $r = gmp_mod(gmp_add($e, $Pt[0]), $N);
            } while (gmp_cmp($r, 0) == 0 || gmp_cmp(gmp_add($r, $k), $N) == 0);

            $rd = gmp_mod(gmp_mul($r, $d), $N);
            $k_rd = gmp_mod(gmp_sub($k, $rd), $N);
            if (gmp_cmp($k_rd, 0) < 0) $k_rd = gmp_add($k_rd, $N);
            $s = gmp_mod(gmp_mul($k_rd, gmp_invert(gmp_add($d, 1), $N)), $N);
        } while (gmp_cmp($s, 0) == 0);

        return self::rsToDerB64($r, $s);
    }

    public static function signHex($msg, $priKeyB64, $userId = '1234567812345678')
    {
        return bin2hex(base64_decode(self::sign($msg, $priKeyB64, $userId)));
    }

    public static function verify($msg, $sigB64, $pubKeyB64, $userId = '1234567812345678')
    {
        if (is_array($msg)) {
            throw new Exception('verify 收到数组，请先 json_encode 并排序');
        }
        $pubHex = self::parsePublicKey($pubKeyB64);
        return self::verifyHex($msg, $sigB64, $pubHex, $userId);
    }

    public static function verifyHex($msg, $sigB64, $pubHex, $userId = '1234567812345678')
    {
        $N = gmp_init(self::N, 16);
        $der = base64_decode($sigB64);
        list($r, $s) = self::derToRs($der);
        if ($r === null) return false;
        if (gmp_cmp($r, 1) < 0 || gmp_cmp($r, gmp_sub($N, 1)) > 0) return false;
        if (gmp_cmp($s, 1) < 0 || gmp_cmp($s, gmp_sub($N, 1)) > 0) return false;

        $e = self::computeE($pubHex, $msg, $userId);

        $t = gmp_mod(gmp_add($r, $s), $N);
        if (gmp_cmp($t, 0) == 0) return false;

        $Gx = gmp_init(self::GX, 16);
        $Gy = gmp_init(self::GY, 16);
        $Px = gmp_init(substr($pubHex, 0, 64), 16);
        $Py = gmp_init(substr($pubHex, 64, 64), 16);

        $Pt1 = self::scalarMult($s, $Gx, $Gy);
        $Pt2 = self::scalarMult($t, $Px, $Py);
        $Rpt = self::pointAdd($Pt1[0], $Pt1[1], $Pt2[0], $Pt2[1]);
        if ($Rpt[0] === null) return false;

        $R = gmp_mod(gmp_add($e, $Rpt[0]), $N);
        return gmp_cmp($R, $r) == 0;
    }

    public static function derivePublicKeyHex($priKeyB64)
    {
        $dHex = self::parsePrivateKey($priKeyB64);
        $d = gmp_init($dHex, 16);
        $Gx = gmp_init(self::GX, 16);
        $Gy = gmp_init(self::GY, 16);
        $pt = self::scalarMult($d, $Gx, $Gy);
        return self::pointToHex($pt);
    }

    public static function computeZA($pubHex, $userId = '1234567812345678')
    {
        $entl = sprintf('%04X', strlen($userId) * 8);
        $idHex = bin2hex($userId);
        $data = hex2bin($entl . $idHex . self::A . self::B . self::GX . self::GY . $pubHex);
        return Sm2Compat::sm3($data);
    }

    public static function computeE($pubHex, $msg, $userId = '1234567812345678')
    {
        $za = self::computeZA($pubHex, $userId);
        return gmp_init(Sm2Compat::sm3(hex2bin($za) . $msg), 16);
    }

    /* ==================== 密钥解析 ==================== */

    public static function parsePrivateKey($b64)
    {
        $raw = base64_decode($b64);
        if (strlen($raw) === 32) return bin2hex($raw);

        $pos = 0;
        $seq = self::readSeq($raw, $pos);
        if (!$seq) throw new Exception('私钥DER解析失败');

        $p = 0;
        self::readInt($seq, $p);
        self::readSeq($seq, $p);
        $privOctet = self::readOctet($seq, $p);
        if (!$privOctet) throw new Exception('私钥OCTET STRING缺失');

        $ip = 0;
        $inner = self::readSeq($privOctet, $ip);
        if ($inner) {
            $ip2 = 0;
            self::readInt($inner, $ip2);
            $key = self::readOctet($inner, $ip2);
            if ($key && strlen($key) === 32) return bin2hex($key);
        }
        if (strlen($privOctet) === 32) return bin2hex($privOctet);
        throw new Exception('无法提取私钥');
    }

    public static function parsePublicKey($b64)
    {
        $raw = base64_decode($b64);
        if (strlen($raw) === 64) return bin2hex($raw);
        if (strlen($raw) === 65 && ord($raw[0]) === 0x04) return bin2hex(substr($raw, 1));

        $pos = 0;
        $seq = self::readSeq($raw, $pos);
        if (!$seq) throw new Exception('公钥DER解析失败');

        $p = 0;
        self::readSeq($seq, $p);
        $bitStr = self::readBitStr($seq, $p);
        if (!$bitStr) throw new Exception('BIT STRING缺失');

        $first = ord($bitStr[0]);
        if ($first === 0x00 && ord($bitStr[1]) === 0x04) {
            $point = substr($bitStr, 2);
        } elseif (ord($bitStr[0]) === 0x04) {
            $point = substr($bitStr, 1);
        } else {
            throw new Exception('无法识别的点格式');
        }

        if (strlen($point) !== 64) {
            throw new Exception('公钥点长度异常: 期望64字节, 实际' . strlen($point) . '字节');
        }
        return bin2hex($point);
    }

    /* ==================== 椭圆曲线 ==================== */

    public static function scalarMult($k, $x, $y)
    {
        $N = gmp_init(self::N, 16);
        $k = gmp_mod($k, $N);
        $R = array(null, null);
        $Q = array($x, $y);
        while (gmp_cmp($k, 0) > 0) {
            if (gmp_mod($k, 2) == 1) $R = self::pointAdd($R[0], $R[1], $Q[0], $Q[1]);
            $Q = self::pointDouble($Q[0], $Q[1]);
            $k = gmp_div_q($k, 2);
        }
        return $R;
    }

    public static function pointAdd($Px, $Py, $Qx, $Qy)
    {
        $p = gmp_init(self::P, 16);
        if ($Px === null) return array($Qx, $Qy);
        if ($Qx === null) return array($Px, $Py);
        if (gmp_cmp($Px, $Qx) == 0 && gmp_cmp($Py, $Qy) == 0) return self::pointDouble($Px, $Py);

        $lam = gmp_mod(gmp_mul(gmp_sub($Qy, $Py), gmp_invert(gmp_sub($Qx, $Px), $p)), $p);
        $Rx = gmp_mod(gmp_sub(gmp_sub(gmp_mul($lam, $lam), $Px), $Qx), $p);
        $Ry = gmp_mod(gmp_sub(gmp_mul($lam, gmp_sub($Px, $Rx)), $Py), $p);
        return array($Rx, $Ry);
    }

    public static function pointDouble($Px, $Py)
    {
        $p = gmp_init(self::P, 16);
        $a = gmp_init(self::A, 16);
        $lam = gmp_mod(gmp_mul(gmp_add(gmp_mul(3, gmp_mul($Px, $Px)), $a), gmp_invert(gmp_mul(2, $Py), $p)), $p);
        $Rx = gmp_mod(gmp_sub(gmp_mul($lam, $lam), gmp_mul(2, $Px)), $p);
        $Ry = gmp_mod(gmp_sub(gmp_mul($lam, gmp_sub($Px, $Rx)), $Py), $p);
        return array($Rx, $Ry);
    }

    /* ==================== DER ==================== */

    private static function rsToDerB64($r, $s)
    {
        $rBin = self::gmpToBin($r);
        $sBin = self::gmpToBin($s);
        if (ord($rBin[0]) & 0x80) $rBin = "\x00" . $rBin;
        if (ord($sBin[0]) & 0x80) $sBin = "\x00" . $sBin;
        $body = "\x02" . chr(strlen($rBin)) . $rBin . "\x02" . chr(strlen($sBin)) . $sBin;
        return base64_encode("\x30" . chr(strlen($body)) . $body);
    }

    private static function derToRs($der)
    {
        if (ord($der[0]) !== 0x30) return array(null, null);
        $pos = 2;
        if (ord($der[$pos++]) !== 0x02) return array(null, null);
        $rLen = ord($der[$pos++]);
        $r = gmp_import(substr($der, $pos, $rLen), 1, GMP_MSW_FIRST | GMP_BIG_ENDIAN);
        $pos += $rLen;
        if (ord($der[$pos++]) !== 0x02) return array(null, null);
        $sLen = ord($der[$pos++]);
        $s = gmp_import(substr($der, $pos, $sLen), 1, GMP_MSW_FIRST | GMP_BIG_ENDIAN);
        return array($r, $s);
    }

    private static function gmpToBin($g)
    {
        $h = gmp_strval($g, 16);
        if (strlen($h) % 2) $h = '0' . $h;
        return hex2bin($h);
    }

    private static function pointToHex($pt)
    {
        return str_pad(gmp_strval($pt[0], 16), 64, '0', STR_PAD_LEFT)
             . str_pad(gmp_strval($pt[1], 16), 64, '0', STR_PAD_LEFT);
    }

    /* ==================== DER 读取 ==================== */

    private static function readSeq($der, &$pos)
    {
        if ($pos >= strlen($der) || ord($der[$pos]) !== 0x30) return null;
        $len = self::readLen($der, $pos + 1);
        $off = self::lenBytes($der, $pos + 1);
        $ret = substr($der, $pos + 1 + $off, $len);
        $pos += 1 + $off + $len;
        return $ret;
    }

    private static function readInt($der, &$pos)
    {
        if ($pos >= strlen($der) || ord($der[$pos]) !== 0x02) return null;
        $len = self::readLen($der, $pos + 1);
        $off = self::lenBytes($der, $pos + 1);
        $ret = substr($der, $pos + 1 + $off, $len);
        $pos += 1 + $off + $len;
        return $ret;
    }

    private static function readOctet($der, &$pos)
    {
        if ($pos >= strlen($der) || ord($der[$pos]) !== 0x04) return null;
        $len = self::readLen($der, $pos + 1);
        $off = self::lenBytes($der, $pos + 1);
        $ret = substr($der, $pos + 1 + $off, $len);
        $pos += 1 + $off + $len;
        return $ret;
    }

    private static function readBitStr($der, &$pos)
    {
        if ($pos >= strlen($der) || ord($der[$pos]) !== 0x03) return null;
        $len = self::readLen($der, $pos + 1);
        $off = self::lenBytes($der, $pos + 1);
        $ret = substr($der, $pos + 1 + $off, $len);
        $pos += 1 + $off + $len;
        return $ret;
    }

    private static function readLen($der, $pos)
    {
        $b = ord($der[$pos]);
        if (($b & 0x80) === 0) return $b & 0x7f;
        $n = $b & 0x7f; $len = 0;
        for ($i = 1; $i <= $n; $i++) $len = ($len << 8) | ord($der[$pos+$i]);
        return $len;
    }

    private static function lenBytes($der, $pos)
    {
        return (ord($der[$pos]) & 0x80) === 0 ? 1 : 1 + (ord($der[$pos]) & 0x7f);
    }
}