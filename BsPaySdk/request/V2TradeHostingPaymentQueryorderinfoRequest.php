<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 托管交易查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeHostingPaymentQueryorderinfoRequest extends BaseRequest
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
     * 原交易请求日期
     */
    private $orgReqDate;
    /**
     * 原交易请求流水号与**party_order_id**二选一，必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：rQ2021121311173944&lt;/font&gt;
     */
    private $orgReqSeqId;
    /**
     * 用户账单上的商户订单号与**org_req_seq_id**二选一，必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：03232109190255105603561&lt;/font&gt;
     */
    private $partyOrderId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_HOSTING_PAYMENT_QUERYORDERINFO;
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

    public function getPartyOrderId() {
        return $this->partyOrderId;
    }

    public function setPartyOrderId($partyOrderId) {
        $this->partyOrderId = $partyOrderId;
    }

}
