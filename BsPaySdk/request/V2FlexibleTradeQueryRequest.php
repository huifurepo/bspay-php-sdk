<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 灵工支付查询
 *
 * @author sdk-generator
 * @Description
 */
class V2FlexibleTradeQueryRequest extends BaseRequest
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
     * 原请求流水号原请求流水号与原请求全局流水号二选一必填，示例值：2021091708126665001
     */
    private $orgReqSeqId;
    /**
     * 原请求日期原请求流水号必填则原请求日期必填，格式：yyyyMMdd；示例值：20210917
     */
    private $orgReqDate;
    /**
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 原交易全局流水号原请求流水号与原请求全局流水号二选一必填，  &lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值： 003100TOP1A230816150903P990ac139c0600000&lt;/font&gt;
     */
    private $orgHfSeqId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_FLEXIBLE_TRADE_QUERY;
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

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOrgHfSeqId() {
        return $this->orgHfSeqId;
    }

    public function setOrgHfSeqId($orgHfSeqId) {
        $this->orgHfSeqId = $orgHfSeqId;
    }

}
