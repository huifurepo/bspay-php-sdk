<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 灵工支付退款
 *
 * @author sdk-generator
 * @Description
 */
class V2FlexibleRefundRequest extends BaseRequest
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
     * 原请求日期
     */
    private $orgReqDate;
    /**
     * 原灵工支付交易流水号&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665231&lt;/font&gt;
     */
    private $orgReqSeqId;
    /**
     * 原灵工支付汇付全局流水号与原灵工支付交易流水号必选其一&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665001&lt;/font&gt;
     */
    private $orgHfSeqId;
    /**
     * 发起方商户号
     */
    private $huifuId;
    /**
     * 支付金额
     */
    private $ordAmt;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_FLEXIBLE_REFUND;
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

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getOrgHfSeqId() {
        return $this->orgHfSeqId;
    }

    public function setOrgHfSeqId($orgHfSeqId) {
        $this->orgHfSeqId = $orgHfSeqId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOrdAmt() {
        return $this->ordAmt;
    }

    public function setOrdAmt($ordAmt) {
        $this->ordAmt = $ordAmt;
    }

}
