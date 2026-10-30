<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 协议申请列表查询
 *
 * @author sdk-generator
 * @Description
 */
class V2AgreementApplyListRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 协议类型
     */
    private $agreementType;
    /**
     * 当前页
     */
    private $pageNum;
    /**
     * 分页大小
     */
    private $pageSize;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_AGREEMENT_APPLY_LIST;
    }


    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getAgreementType() {
        return $this->agreementType;
    }

    public function setAgreementType($agreementType) {
        $this->agreementType = $agreementType;
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
