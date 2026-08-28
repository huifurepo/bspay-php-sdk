<?php
namespace BsPaySdk\enums;

class SignTypeEnum {

    /**
     * RSA加密
     */
    static $TYPE_RSA = "RSA";

    /**
     * SM2加密
     */
    static $TYPE_SM2 = "SM2";

    static function checkSignType($type) {
        return $type === self::$TYPE_RSA || $type === self::$TYPE_SM2;
    }
}
