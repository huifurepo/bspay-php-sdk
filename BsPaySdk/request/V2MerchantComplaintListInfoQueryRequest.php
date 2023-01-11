<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 查询投诉单列表及详情
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantComplaintListInfoQueryRequest extends BaseRequest
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
     * 开始日期
     */
    private $beginDate;
    /**
     * 结束日期
     */
    private $endDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_COMPLAINT_LIST_INFO_QUERY;
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

    public function getBeginDate() {
        return $this->beginDate;
    }

    public function setBeginDate($beginDate) {
        $this->beginDate = $beginDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function setEndDate($endDate) {
        $this->endDate = $endDate;
    }

}
