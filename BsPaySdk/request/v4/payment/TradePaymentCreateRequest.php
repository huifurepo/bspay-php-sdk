<?php

namespace BsPaySdk\request\v4\payment;

use BsPaySdk\request\BaseRequest;
use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 聚合下单
 *
 * @author sdk-generator
 * @Description
 */
class TradePaymentCreateRequest extends BaseRequest {
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 商品描述
     */
    private $goodsDesc;
    /**
     * 交易类型
     */
    private $tradeType;
    /**
     * 交易类型扩展参数
     */
    private $methodExpand;
    /**
     * 交易金额
     */
    private $transAmt;
    /**
     * 备注
     */
    private $remark;
    /**
     * 交易有效期
     */
    private $timeExpire;
    /**
     * 延迟标识
     */
    private $delayAcctFlag;
    /**
     * 手续费扣款标识
     */
    private $feeFlag;
    /**
     * 异步通知地址
     */
    private $notifyUrl;
    /**
     * 禁用支付方式
     */
    private $limitPayType;
    /**
     * 渠道号
     */
    private $channelNo;
    /**
     * 账户号
     */
    private $acctId;
    /**
     * 场景类型
     */
    private $payScene;
    /**
     * 传入分帐遇到优惠的处理规则
     */
    private $termDivCouponType;
    /**
     * 商户贴息标记
     */
    private $fqMerDiscountFlag;
    /**
     * 分账对象
     */
    private $acctSplitBunch;
    /**
     * 设备信息
     */
    private $terminalDeviceData;
    /**
     * 补贴支付信息
     */
    private $combinedpayData;
    /**
     * 补贴支付手续费承担方信息
     */
    private $combinedpayDataFeeInfo;
    /**
     * 手续费补贴信息
     */
    private $transFeeAllowanceInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V4_TRADE_PAYMENT_CREATE;
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

    public function getGoodsDesc() {
        return $this->goodsDesc;
    }

    public function setGoodsDesc($goodsDesc) {
        $this->goodsDesc = $goodsDesc;
    }

    public function getTradeType() {
        return $this->tradeType;
    }

    public function setTradeType($tradeType) {
        $this->tradeType = $tradeType;
    }

    public function getMethodExpand() {
        return $this->methodExpand;
    }

    public function setMethodExpand($methodExpand) {
        $this->methodExpand = $methodExpand;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getRemark() {
        return $this->remark;
    }

    public function setRemark($remark) {
        $this->remark = $remark;
    }

    public function getTimeExpire() {
        return $this->timeExpire;
    }

    public function setTimeExpire($timeExpire) {
        $this->timeExpire = $timeExpire;
    }

    public function getDelayAcctFlag() {
        return $this->delayAcctFlag;
    }

    public function setDelayAcctFlag($delayAcctFlag) {
        $this->delayAcctFlag = $delayAcctFlag;
    }

    public function getFeeFlag() {
        return $this->feeFlag;
    }

    public function setFeeFlag($feeFlag) {
        $this->feeFlag = $feeFlag;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

    public function getLimitPayType() {
        return $this->limitPayType;
    }

    public function setLimitPayType($limitPayType) {
        $this->limitPayType = $limitPayType;
    }

    public function getChannelNo() {
        return $this->channelNo;
    }

    public function setChannelNo($channelNo) {
        $this->channelNo = $channelNo;
    }

    public function getAcctId() {
        return $this->acctId;
    }

    public function setAcctId($acctId) {
        $this->acctId = $acctId;
    }

    public function getPayScene() {
        return $this->payScene;
    }

    public function setPayScene($payScene) {
        $this->payScene = $payScene;
    }

    public function getTermDivCouponType() {
        return $this->termDivCouponType;
    }

    public function setTermDivCouponType($termDivCouponType) {
        $this->termDivCouponType = $termDivCouponType;
    }

    public function getFqMerDiscountFlag() {
        return $this->fqMerDiscountFlag;
    }

    public function setFqMerDiscountFlag($fqMerDiscountFlag) {
        $this->fqMerDiscountFlag = $fqMerDiscountFlag;
    }

    public function getAcctSplitBunch() {
        return $this->acctSplitBunch;
    }

    public function setAcctSplitBunch($acctSplitBunch) {
        $this->acctSplitBunch = $acctSplitBunch;
    }

    public function getTerminalDeviceData() {
        return $this->terminalDeviceData;
    }

    public function setTerminalDeviceData($terminalDeviceData) {
        $this->terminalDeviceData = $terminalDeviceData;
    }

    public function getCombinedpayData() {
        return $this->combinedpayData;
    }

    public function setCombinedpayData($combinedpayData) {
        $this->combinedpayData = $combinedpayData;
    }

    public function getCombinedpayDataFeeInfo() {
        return $this->combinedpayDataFeeInfo;
    }

    public function setCombinedpayDataFeeInfo($combinedpayDataFeeInfo) {
        $this->combinedpayDataFeeInfo = $combinedpayDataFeeInfo;
    }

    public function getTransFeeAllowanceInfo() {
        return $this->transFeeAllowanceInfo;
    }

    public function setTransFeeAllowanceInfo($transFeeAllowanceInfo) {
        $this->transFeeAllowanceInfo = $transFeeAllowanceInfo;
    }
}