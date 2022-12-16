<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 支付宝申诉提交凭证
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantComplaintSubmitCertificatesRequest extends BaseRequest
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
     * 申诉解限的唯一ID
     */
    private $relievingId;
    /**
     * 解限风险类型
     */
    private $relieveRiskType;
    /**
     * 提交的凭证数据
     */
    private $relieveCertDataList;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_COMPLAINT_SUBMIT_CERTIFICATES;
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

    public function getRelievingId() {
        return $this->relievingId;
    }

    public function setRelievingId($relievingId) {
        $this->relievingId = $relievingId;
    }

    public function getRelieveRiskType() {
        return $this->relieveRiskType;
    }

    public function setRelieveRiskType($relieveRiskType) {
        $this->relieveRiskType = $relieveRiskType;
    }

    public function getRelieveCertDataList() {
        return $this->relieveCertDataList;
    }

    public function setRelieveCertDataList($relieveCertDataList) {
        $this->relieveCertDataList = $relieveCertDataList;
    }

}
