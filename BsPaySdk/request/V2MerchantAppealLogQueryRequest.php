<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 操作日志查询
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantAppealLogQueryRequest extends BaseRequest
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
     * 分页条数
     */
    private $pageSize;
    /**
     * 申诉单号
     */
    private $appealId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_APPEAL_LOG_QUERY;
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

    public function getPageSize() {
        return $this->pageSize;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
    }

    public function getAppealId() {
        return $this->appealId;
    }

    public function setAppealId($appealId) {
        $this->appealId = $appealId;
    }

}
