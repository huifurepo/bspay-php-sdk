<?php

namespace BsPaySdk\request\v4\payment;

use BsPaySdk\request\BaseRequest;
use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 扫码交易退款
 *
 * @author sdk-generator
 * @Description
 */
class TradePaymentScanpayRefundRequest extends BaseRequest {
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
     * 申请退款金额 
     */
    private $ordAmt;
    /** 
     * 原交易请求日期 
     */
    private $orgReqDate;
    /** 
     * 原交易全局流水号 
     */
    private $orgHfSeqId;
    /** 
     * 原交易微信支付宝的商户单号 
     */
    private $orgPartyOrderId;
    /** 
     * 原交易请求流水号 
     */
    private $orgReqSeqId;
    /** 
     * 交易类型扩展参数 
     */
    private $methodExpand;
    /**
     * 备注
     */
    private $remark;
    /**
     * 异步通知地址
     */
    private $notifyUrl;
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

    public function getFunctionCode() {
        return FunctionCodeEnum::$V4_TRADE_PAYMENT_SCANPAY_REFUND;
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

    public function getOrdAmt() {
        return $this->ordAmt;
    }

    public function setOrdAmt($ordAmt) {
        $this->ordAmt = $ordAmt;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getOrgHfSeqId() {
        return $this->orgHfSeqId;
    }

    public function setOrgHfSeqId($orgHfSeqId) {
        $this->orgHfSeqId = $orgHfSeqId;
    }

    public function getOrgPartyOrderId() {
        return $this->orgPartyOrderId;
    }

    public function setOrgPartyOrderId($orgPartyOrderId) {
        $this->orgPartyOrderId = $orgPartyOrderId;
    }

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getMethodExpand() {
        return $this->methodExpand;
    }

    public function setMethodExpand($methodExpand) {
        $this->methodExpand = $methodExpand;
    }

    public function getRemark() {
        return $this->remark;
    }

    public function setRemark($remark) {
        $this->remark = $remark;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
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
}