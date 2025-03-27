<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 钱包绑卡充值下单
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletTradeRechargeCardRequest extends BaseRequest
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
     * 订单金额
     */
    private $transAmt;
    /**
     * 微信充值信息微信充值必填
     */
    private $wxRechareInfo;
    /**
     * 支付宝充值信息支付宝充值必填
     */
    private $alipayRechargeInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_WALLET_TRADE_RECHARGE_CARD;
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

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getWxRechareInfo() {
        return $this->wxRechareInfo;
    }

    public function setWxRechareInfo($wxRechareInfo) {
        $this->wxRechareInfo = $wxRechareInfo;
    }

    public function getAlipayRechargeInfo() {
        return $this->alipayRechargeInfo;
    }

    public function setAlipayRechargeInfo($alipayRechargeInfo) {
        $this->alipayRechargeInfo = $alipayRechargeInfo;
    }

}
