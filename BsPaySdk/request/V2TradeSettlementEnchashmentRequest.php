<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 取现接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeSettlementEnchashmentRequest extends BaseRequest
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
     * 取现金额
     */
    private $cashAmt;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 到账日期类型
     */
    private $intoAcctDateType;
    /**
     * 取现卡序列号
     */
    private $tokenNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_SETTLEMENT_ENCHASHMENT;
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

    public function getCashAmt() {
        return $this->cashAmt;
    }

    public function setCashAmt($cashAmt) {
        $this->cashAmt = $cashAmt;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getIntoAcctDateType() {
        return $this->intoAcctDateType;
    }

    public function setIntoAcctDateType($intoAcctDateType) {
        $this->intoAcctDateType = $intoAcctDateType;
    }

    public function getTokenNo() {
        return $this->tokenNo;
    }

    public function setTokenNo($tokenNo) {
        $this->tokenNo = $tokenNo;
    }

}
