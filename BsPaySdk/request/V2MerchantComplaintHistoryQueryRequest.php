<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 查询投诉协商历史
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantComplaintHistoryQueryRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求时间
     */
    private $reqDate;
    /**
     * 投诉单号
     */
    private $complaintId;
    /**
     * 微信商户号
     */
    private $mchId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_COMPLAINT_HISTORY_QUERY;
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

    public function getComplaintId() {
        return $this->complaintId;
    }

    public function setComplaintId($complaintId) {
        $this->complaintId = $complaintId;
    }

    public function getMchId() {
        return $this->mchId;
    }

    public function setMchId($mchId) {
        $this->mchId = $mchId;
    }

}
