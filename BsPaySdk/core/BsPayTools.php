<?php
namespace BsPaySdk\core;

use BsPaySdk\guomi\Sm2Signer;

class BsPayTools
{
    /**
     * RSA算法 私钥加签（对数据源排序），可用于 V2 版本接口数据加签
     *
     * @param @param array $data 原数据( 排序后的json字符串; 数组参数排序后转json字符串(数据的中文和斜杠均不转码):
                            ksort($post_data); json_encode($post_data, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE); )
     * @param string $rsaPrivateKey 私钥
     * @param int $alg 默认 OPENSSL_ALGO_SHA256
     *
     * @return string 签名串
     */
    public static function sha_with_rsa_sign($data, $rsaPrivateKey, $alg=OPENSSL_ALGO_SHA256){
        $key = "-----BEGIN PRIVATE KEY-----\n".wordwrap($rsaPrivateKey, 64, "\n", true)."\n-----END PRIVATE KEY-----";
        $signature= '';
        try {
            openssl_sign($data, $signature, $key, $alg);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return base64_encode($signature);
    }
    
    /**
     *  国密SM2 算法 私钥加签
     */
    public static function sha_with_sm2_sign($data, $sm2PrivateKey) {
        return Sm2Signer::signHex($data, $sm2PrivateKey);
    }
    /**
     *  国密SM2 算法 公钥验签
     */
    public static function verifySignSm2($respSign, $respData, $sm2PublicKey){
        $signB64 = base64_encode(hex2bin($respSign));
        ksort($respData);
        $resString = json_encode($respData, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        $resString = str_replace("\n","\\n",$resString);
        $resString = str_replace('"enter_fee":0,','"enter_fee":0.00,',$resString); // 单独替换指定类型格式不正确的字段 如 enter_fee
        return Sm2Signer::verify($resString, $signB64, $sm2PublicKey);
    }

    public static function encrypt_with_rsa_pubkey($data, $rsaPublicKey, $padding=OPENSSL_PKCS1_PADDING){
        $key = "-----BEGIN PUBLIC KEY-----\n".wordwrap($rsaPublicKey, 64, "\n", true)."\n-----END PUBLIC KEY-----";
        $encryptResult= '';
        try {
            openssl_public_encrypt($data, $encryptResult, $key, $padding);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return base64_encode($encryptResult);
    }

    /**
     * 使用公钥验签，可用于异步应答验签
     *
     * @param string $signature 签文
     * @param string $data 原数据(string)
     * @param string $rsaPublicKey 公钥
     * @param int $alg 默认 OPENSSL_ALGO_SHA256
     *
     * @return false|int 验证结果：成功/失败
     */
    public static function verifySign($signature, $data, $rsaPublicKey, $alg=OPENSSL_ALGO_SHA256){
        $key = "-----BEGIN PUBLIC KEY-----\n".wordwrap($rsaPublicKey, 64, "\n", true)."\n-----END PUBLIC KEY-----";
        return openssl_verify($data, base64_decode($signature), $key, $alg);
    }

    /**
     * 使用公钥验签（对数据源排序），可用于 V2 版本接口返回数据验签
     *
     * @param string $signature 签文
     * @param array $data 原数据(array)
     * @param string $rsaPublicKey 公钥
     * @param int $alg 默认 OPENSSL_ALGO_SHA256
     *
     * @return false|int 验证结果：成功/失败
     */
    public static function verifySign_sort($signature, $data, $rsaPublicKey, $alg=OPENSSL_ALGO_SHA256){
        $key = "-----BEGIN PUBLIC KEY-----\n".wordwrap($rsaPublicKey, 64, "\n", true)."\n-----END PUBLIC KEY-----";
        ksort($data);
        $data = json_encode($data, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        $data = str_replace("\n","\\n",$data);
        $data = str_replace('"enter_fee":0,','"enter_fee":0.00,',$data); // 单独替换指定类型格式不正确的字段 如 enter_fee
        return openssl_verify($data, base64_decode($signature), $key, $alg);
     }

    public static function checkEmpty($value) {
        return !isset($value) || trim($value) === "";
    }

    public static function endWith($str, $suffix) {
        $length = strlen($suffix);
        if($length == 0){
            return false;
        }
        return (substr($str, -$length) === $suffix);
    }

    /**
     * 校验 webhook 返回报文签名
     *
     * @param string $signature 签文
     * @param array $data 原数据(array)
     * @param string $key 加签 key
     * @param int $alg 默认 OPENSSL_ALGO_SHA256
     *
     * @return true|false 验证结果：成功/失败
     */
    public static function verify_webhook_sign($signature, $data, $key){
        $sign = md5(json_encode($data, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).$key);
        return $sign == strtolower($signature);
    }
}