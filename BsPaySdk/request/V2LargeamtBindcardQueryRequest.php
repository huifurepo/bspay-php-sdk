<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银行大额支付绑卡查询
 *
 * @author sdk-generator
 * @Description
 */
class V2LargeamtBindcardQueryRequest extends BaseRequest
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
     * 银行卡号密文
     */
    private $cardNo;
    /**
     * 每页条数
     */
    private $pageSize;
    /**
     * 分页页码
     */
    private $pageNum;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_LARGEAMT_BINDCARD_QUERY;
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

    public function getCardNo() {
        return $this->cardNo;
    }

    public function setCardNo($cardNo) {
        $this->cardNo = $cardNo;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
    }

    public function getPageNum() {
        return $this->pageNum;
    }

    public function setPageNum($pageNum) {
        $this->pageNum = $pageNum;
    }

}
