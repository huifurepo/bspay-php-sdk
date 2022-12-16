<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 支付宝申诉查询
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantComplaintQueryStatusRequest extends BaseRequest
{

    /**
     * 请求汇付流水号
     */
    private $reqSeqId;
    /**
     * 请求汇付时间
     */
    private $reqDate;
    /**
     * 支付宝推送流水号
     */
    private $riskBizId;
    /**
     * 申诉的商户
     */
    private $bankMerCode;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_COMPLAINT_QUERY_STATUS;
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

    public function getRiskBizId() {
        return $this->riskBizId;
    }

    public function setRiskBizId($riskBizId) {
        $this->riskBizId = $riskBizId;
    }

    public function getBankMerCode() {
        return $this->bankMerCode;
    }

    public function setBankMerCode($bankMerCode) {
        $this->bankMerCode = $bankMerCode;
    }

}
