<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银行大额资金流水查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentTransferAccountQueryRequest extends BaseRequest
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
     * 原请求流水号
     */
    private $orgReqSeqId;
    /**
     * 原请求日期
     */
    private $orgReqDate;
    /**
     * 打款结束日期
     */
    private $transEndDate;
    /**
     * 交易开始日期
     */
    private $transStartDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_TRANSFER_ACCOUNT_QUERY;
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

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getTransEndDate() {
        return $this->transEndDate;
    }

    public function setTransEndDate($transEndDate) {
        $this->transEndDate = $transEndDate;
    }

    public function getTransStartDate() {
        return $this->transStartDate;
    }

    public function setTransStartDate($transStartDate) {
        $this->transStartDate = $transStartDate;
    }

}
