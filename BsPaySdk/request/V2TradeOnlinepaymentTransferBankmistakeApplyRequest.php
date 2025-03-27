<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银行大额支付差错申请
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentTransferBankmistakeApplyRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 交易金额
     */
    private $transAmt;
    /**
     * 订单类型
     */
    private $orderType;
    /**
     * 原请求流水号order_flag&#x3D;Y时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2022012514120615009&lt;/font&gt;
     */
    private $orgReqSeqId;
    /**
     * 原请求日期格式:yyyyMMdd；order_flag&#x3D;Y时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20220125&lt;/font&gt;
     */
    private $orgReqDate;
    /**
     * 异步通知地址
     */
    private $notifyUrl;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_TRANSFER_BANKMISTAKE_APPLY;
    }


    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getOrderType() {
        return $this->orderType;
    }

    public function setOrderType($orderType) {
        $this->orderType = $orderType;
    }

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

}
