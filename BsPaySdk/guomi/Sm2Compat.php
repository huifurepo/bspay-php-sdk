<?php
namespace BsPaySdk\guomi;

/**
 * SM3 兼容层
 * - PHP >= 8.1 + OpenSSL 3.x：用 openssl_digest('sm3') → 极速
 * - 其他环境：自动 fallback 到纯 PHP Sm3::hash() → 功能正确但较慢
 */

class Sm2Compat
{
    private static $opensslSm3 = null;

    public static function sm3($data)
    {
        if (self::hasOpenSslSm3()) {
            return openssl_digest($data, 'sm3');
        }
        return Sm3::hash($data);
    }

    public static function hasOpenSslSm3()
    {
        if (self::$opensslSm3 !== null) return self::$opensslSm3;

        if (!function_exists('openssl_digest')) {
            self::$opensslSm3 = false;
            return false;
        }

        $methods = openssl_get_md_methods();
        self::$opensslSm3 = in_array('sm3', $methods);
        return self::$opensslSm3;
    }

    public static function getBackend()
    {
        return self::hasOpenSslSm3() ? 'openssl' : 'pure_php';
    }
}