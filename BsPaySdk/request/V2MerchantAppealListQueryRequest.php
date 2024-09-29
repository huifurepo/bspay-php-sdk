<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 申诉单列表查询
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantAppealListQueryRequest extends BaseRequest
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
     * 申诉创建开始日期
     */
    private $beginDate;
    /**
     * 申诉创建结束日期
     */
    private $endDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_APPEAL_LIST_QUERY;
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
