<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 账单计划变更
 *
 * @author sdk-generator
 * @Description
 */
class V3BillpayPlanModifyRequest extends BaseRequest
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
     * 账单计划编号
     */
    private $planNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_BILLPAY_PLAN_MODIFY;
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

}
