<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 钱包提现下单
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletTradeWithdrawalRequest extends BaseRequest
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
     * 钱包用户ID
     */
    private $userHuifuId;
    /**
     * 银行卡序列号
     */
    private $tokenNo;
    /**
     * 提现金额
     */
    private $transAmt;
    /**
     * 跳转地址
     */
    private $frontUrl;
    /**
     * 异步通知地址
     */
    private $notifyUrl;
    /**
     * 到账日期类型
     */
    private $intoAcctDateType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_WALLET_TRADE_WITHDRAWAL;
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

    public function getUserHuifuId() {
        return $this->userHuifuId;
    }

    public function setUserHuifuId($userHuifuId) {
        $this->userHuifuId = $userHuifuId;
    }

    public function getTokenNo() {
        return $this->tokenNo;
    }

    public function setTokenNo($tokenNo) {
        $this->tokenNo = $tokenNo;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getFrontUrl() {
        return $this->frontUrl;
    }

    public function setFrontUrl($frontUrl) {
        $this->frontUrl = $frontUrl;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

    public function getIntoAcctDateType() {
        return $this->intoAcctDateType;
    }

    public function setIntoAcctDateType($intoAcctDateType) {
        $this->intoAcctDateType = $intoAcctDateType;
    }

}
