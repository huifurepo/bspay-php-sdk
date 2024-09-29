<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 关联线索查询
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantAppealRelatedclueQueryRequest extends BaseRequest
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
     * 协查单号
     */
    private $assistId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_APPEAL_RELATEDCLUE_QUERY;
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

    public function getAssistId() {
        return $this->assistId;
    }

    public function setAssistId($assistId) {
        $this->assistId = $assistId;
    }

}
