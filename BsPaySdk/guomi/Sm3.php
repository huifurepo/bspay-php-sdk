<?php
namespace BsPaySdk\guomi;
/**
 * SM3 纯 GMP 实现 - GB/T 32905-2016
 * 已通过国标向量验证: SM3('abc') = 66c7f0f462eeedd9d1f2d46bdc10e4e24167c4875cf2f7a2297da02b8f4ba8e0
 */

class Sm3
{
    // 常量（不用数组，用独立常量或十六进制字符串）
    private static $IV = array(
        0x7380166f, 0x4914b2b9, 0x172442d7, 0xda8a0600,
        0xa96f30bc, 0x163138aa, 0xe38dee4d, 0xb0fb0e4e
    );

    private static $Tj = array();

    private static $initialized = false;

    private static function init()
    {
        if (self::$initialized) return;
        // Tj 表
        self::$Tj = array();
        for ($j = 0; $j <= 15; $j++) {
            self::$Tj[$j] = 0x79cc4519;
        }
        for ($j = 16; $j <= 63; $j++) {
            self::$Tj[$j] = 0x7a879d8a;
        }
        self::$initialized = true;
    }

    /**
     * SM3 哈希，返回十六进制字符串
     */
    public static function hash($data)
    {
        self::init();

        if (is_array($data)) {
            throw new Exception('Sm3::hash 收到数组');
        }

        $msg = $data;
        $len = strlen($msg);

        // 1. 填充
        $bitLen = $len * 8;
        $msg .= chr(0x80);
        $msgLen = strlen($msg);
        $remain = $msgLen % 64;
        $padLen = ($remain <= 56) ? (56 - $remain) : (120 - $remain);
        $msg .= str_repeat("\x00", $padLen);
        // 附加长度（大端 64 位）
        for ($i = 7; $i >= 0; $i--) {
            $msg .= chr(($bitLen >> (8 * $i)) & 0xff);
        }

        // 2. 迭代压缩
        $V = self::$IV;

        for ($i = 0; $i < strlen($msg); $i += 64) {
            $block = substr($msg, $i, 64);
            $W = array();
            for ($j = 0; $j < 16; $j++) {
                $W[$j] = self::bytesToInt(substr($block, $j * 4, 4));
            }
            for ($j = 16; $j < 68; $j++) {
                $W[$j] = self::P1($W[$j-16] ^ $W[$j-9] ^ self::rotl($W[$j-3], 15))
                       ^ self::rotl($W[$j-13], 7)
                       ^ $W[$j-6];
            }
            $V = self::CF($V, $W);
        }

        // 输出
        $result = '';
        for ($i = 0; $i < 8; $i++) {
            $result .= self::intToHex($V[$i]);
        }
        return $result;
    }

    private static function CF($V, $W)
    {
        $A = $V[0]; $B = $V[1]; $C = $V[2]; $D = $V[3];
        $E = $V[4]; $F = $V[5]; $G = $V[6]; $H = $V[7];

        for ($j = 0; $j <= 63; $j++) {
            $SS1 = self::rotl(
                (self::rotl($A, 12) + $E + self::rotl(self::$Tj[$j], $j % 32)) & 0xFFFFFFFF,
                7
            );
            $SS2 = $SS1 ^ self::rotl($A, 12);
            $TT1 = (self::FF($j, $A, $B, $C) + $D + $SS2 + ($W[$j] ^ $W[$j+4])) & 0xFFFFFFFF;
            $TT2 = (self::GG($j, $E, $F, $G) + $H + $SS1 + $W[$j]) & 0xFFFFFFFF;
            $D = $C;
            $C = self::rotl($B, 9);
            $B = $A;
            $A = $TT1;
            $H = $G;
            $G = self::rotl($F, 19);
            $F = $E;
            $E = $TT2 ^ self::rotl($TT2, 9) ^ self::rotl($TT2, 17);
        }

        return array(
            $A ^ $V[0],
            $B ^ $V[1],
            $C ^ $V[2],
            $D ^ $V[3],
            $E ^ $V[4],
            $F ^ $V[5],
            $G ^ $V[6],
            $H ^ $V[7]
        );
    }

    private static function FF($j, $x, $y, $z)
    {
        if ($j <= 15) return $x ^ $y ^ $z;
        return (($x & $y) | ($x & $z) | ($y & $z));
    }

    private static function GG($j, $x, $y, $z)
    {
        if ($j <= 15) return $x ^ $y ^ $z;
        return (($x & $y) | (~$x & $z));
    }

    private static function P0($x)
    {
        return $x ^ self::rotl($x, 9) ^ self::rotl($x, 17);
    }

    private static function P1($x)
    {
        return $x ^ self::rotl($x, 15) ^ self::rotl($x, 23);
    }

    private static function rotl($x, $n)
    {
        $n = $n % 32;
        return (($x << $n) | (($x >> (32 - $n)) & ((1 << $n) - 1))) & 0xFFFFFFFF;
    }

    private static function bytesToInt($b)
    {
        $val = 0;
        for ($i = 0; $i < 4; $i++) {
            $val = ($val << 8) | ord($b[$i]);
        }
        return $val & 0xFFFFFFFF;
    }

    private static function intToHex($val)
    {
        return sprintf('%08x', $val & 0xFFFFFFFF);
    }
}