<?php
namespace BsPaySdk\core;

use ReflectionClass;

/**
 * 支付请求对象
 *
 */
class Payment extends BsPayClient
{
    /**
     * 聚合支付下单
     *
     */
    public function create($aggregateTransRequest) {
        return $this->postRequest($aggregateTransRequest);
    }

    /**
     * 扫码交易查询
     *
     */
    public function query($scanpayQueryRequest) {
        return $this->postRequest($scanpayQueryRequest);
    }

    /**
     * 扫码交易关单
     *
     */
    public function close($scanpayCloseRequest) {
        return $this->postRequest($scanpayCloseRequest);
    }

    /**
     * 扫码交易关单查询
     *
     */
    public function closeQuery($scanpayCloseQueryRequest) {
        return $this->postRequest($scanpayCloseQueryRequest);
    }

    /**
     * 扫码交易退款
     *
     */
    public function refund($scanpayRefundRequest) {
        return $this->postRequest($scanpayRefundRequest);
    }

    /**
     * 扫码交易退款查询
     *
     */
    public function refundQuery($scanpayRefundQueryRequest) {
        return $this->postRequest($scanpayRefundQueryRequest);
    }

    /**
     * 数组转换为json串
     *
     */
    public static function arrayToJsonString($data) {
        $arrayData = self::toArray($data);
        return json_encode($arrayData,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }

    /**
     * 数据转换为数组
     */
    public static function toArray($data) {
        // 数组处理
        if (is_array($data)) {
            return array_map([self::class, 'toArray'], $data);
        }

        // 对象处理
        if (is_object($data)) {
            $class = new ReflectionClass($data);
            $properties = $class->getProperties();
            $arrayData = array();

            // 转换接口参数
            foreach ($properties as $prop) {
                $prop->setAccessible(true);
                // 转换为下划线
                $attrName = strtolower(preg_replace("/([a-z])([A-Z])/", "$1_$2", $prop->getName()));
                $attrValue = $prop->getValue($data);
                // 递归转换
                $converted = self::toArray($attrValue);
                // 过滤 null
                if ($converted !== null) {
                    $arrayData[$attrName] = $converted;
                }
            }

            return $arrayData;
        }

        return $data;
    }
}