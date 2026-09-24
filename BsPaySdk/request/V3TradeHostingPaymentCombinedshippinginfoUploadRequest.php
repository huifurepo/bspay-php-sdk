<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 发货信息合单录入
 *
 * @author sdk-generator
 * @Description
 */
class V3TradeHostingPaymentCombinedshippinginfoUploadRequest extends BaseRequest
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
     * 上传时间
     */
    private $uploadTime;
    /**
     * 支付者
     */
    private $payer;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_TRADE_HOSTING_PAYMENT_COMBINEDSHIPPINGINFO_UPLOAD;
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

    public function getUploadTime() {
        return $this->uploadTime;
    }

    public function setUploadTime($uploadTime) {
        $this->uploadTime = $uploadTime;
    }

    public function getPayer() {
        return $this->payer;
    }

    public function setPayer($payer) {
        $this->payer = $payer;
    }

}
