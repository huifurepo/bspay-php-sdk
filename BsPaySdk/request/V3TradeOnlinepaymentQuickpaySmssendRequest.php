<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 快捷短信发送
 *
 * @author sdk-generator
 * @Description
 */
class V3TradeOnlinepaymentQuickpaySmssendRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 用户客户号
     */
    private $userHuifuId;
    /**
     * 绑卡id
     */
    private $cardBindId;
    /**
     * 订单金额
     */
    private $transAmt;
    /**
     * 异步通知地址
     */
    private $notifyUrl;
    /**
     * 网联数据
     */
    private $nuccData;
    /**
     * 设备数据
     */
    private $terminalDeviceData;
    /**
     * 安全信息
     */
    private $riskCheckData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_TRADE_ONLINEPAYMENT_QUICKPAY_SMSSEND;
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

    public function getUserHuifuId() {
        return $this->userHuifuId;
    }

    public function setUserHuifuId($userHuifuId) {
        $this->userHuifuId = $userHuifuId;
    }

    public function getCardBindId() {
        return $this->cardBindId;
    }

    public function setCardBindId($cardBindId) {
        $this->cardBindId = $cardBindId;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

    public function getNuccData() {
        return $this->nuccData;
    }

    public function setNuccData($nuccData) {
        $this->nuccData = $nuccData;
    }

    public function getTerminalDeviceData() {
        return $this->terminalDeviceData;
    }

    public function setTerminalDeviceData($terminalDeviceData) {
        $this->terminalDeviceData = $terminalDeviceData;
    }

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

}
