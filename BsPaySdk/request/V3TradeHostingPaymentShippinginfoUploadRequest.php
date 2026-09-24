<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 发货信息录入
 *
 * @author sdk-generator
 * @Description
 */
class V3TradeHostingPaymentShippinginfoUploadRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 订单信息
     */
    private $orderKey;
    /**
     * 物流模式
     */
    private $logisticsType;
    /**
     * 发货模式
     */
    private $deliveryMode;
    /**
     * 否已全部发货完成分拆发货模式时必填，用于标识分拆发货模式下是否已全部发货完成，只有全部发货完成的情况下才会向用户推送发货完成通知。&lt;br/&gt;枚举值: true，false&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：true&lt;/font&gt;
     */
    private $isAllDelivered;
    /**
     * 上传时间
     */
    private $uploadTime;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_TRADE_HOSTING_PAYMENT_SHIPPINGINFO_UPLOAD;
    }


    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOrderKey() {
        return $this->orderKey;
    }

    public function setOrderKey($orderKey) {
        $this->orderKey = $orderKey;
    }

    public function getLogisticsType() {
        return $this->logisticsType;
    }

    public function setLogisticsType($logisticsType) {
        $this->logisticsType = $logisticsType;
    }

    public function getDeliveryMode() {
        return $this->deliveryMode;
    }

    public function setDeliveryMode($deliveryMode) {
        $this->deliveryMode = $deliveryMode;
    }

    public function getIsAllDelivered() {
        return $this->isAllDelivered;
    }

    public function setIsAllDelivered($isAllDelivered) {
        $this->isAllDelivered = $isAllDelivered;
    }

    public function getUploadTime() {
        return $this->uploadTime;
    }

    public function setUploadTime($uploadTime) {
        $this->uploadTime = $uploadTime;
    }

}
