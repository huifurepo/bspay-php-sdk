<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 查询账单计划详情
 *
 * @author sdk-generator
 * @Description
 */
class V3BillpayPlanDetailRequest extends BaseRequest
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
     * 账单计划编号与原请求流水号编号二选一必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：BP202412270001&lt;/font&gt;
     */
    private $planNo;
    /**
     * 原请求流水号原请求流水号，同一商户号当天唯一；与账单计划编号二选一必填
     */
    private $orgReqSeqId;
    /**
     * 原请求日期原请求日期格式：yyyyMMdd，以北京时间为准；与账单编号二选一必填
     */
    private $orgReqDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_BILLPAY_PLAN_DETAIL;
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

    public function getPlanNo() {
        return $this->planNo;
    }

    public function setPlanNo($planNo) {
        $this->planNo = $planNo;
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

}
