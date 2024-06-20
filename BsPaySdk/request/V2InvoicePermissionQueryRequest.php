<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 电子发票业务开通查询
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoicePermissionQueryRequest extends BaseRequest
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
     * 商户汇付Id
     */
    private $huifuId;
    /**
     * 是否包含下级
     */
    private $includeSubFlag;
    /**
     * 当前页
     */
    private $pageNum;
    /**
     * 分页大小
     */
    private $pageSize;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_PERMISSION_QUERY;
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

    public function getIncludeSubFlag() {
        return $this->includeSubFlag;
    }

    public function setIncludeSubFlag($includeSubFlag) {
        $this->includeSubFlag = $includeSubFlag;
    }

    public function getPageNum() {
        return $this->pageNum;
    }

    public function setPageNum($pageNum) {
        $this->pageNum = $pageNum;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
    }

}
