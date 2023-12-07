<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 手机WAP支付
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentWappayRequest extends BaseRequest
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
     * 交易金额
     */
    private $transAmt;
    /**
     * 分期期数分期支付时必填；支持：03、06、12、24；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：03&lt;/font&gt;；&lt;br/&gt;空值时是wap支付；
     */
    private $instalmentsNum;
    /**
     * 银行卡号instalments_num不为空时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6228480031509440000&lt;/font&gt;
     */
    private $bankCardNo;
    /**
     * 网联扩展数据
     */
    private $extendPayData;
    /**
     * 安全信息
     */
    private $riskCheckData;
    /**
     * 设备信息
     */
    private $terminalDeviceData;
    /**
     * 页面跳转地址
     */
    private $frontUrl;
    /**
     * 异步通知地址
     */
    private $notifyUrl;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_WAPPAY;
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

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getInstalmentsNum() {
        return $this->instalmentsNum;
    }

    public function setInstalmentsNum($instalmentsNum) {
        $this->instalmentsNum = $instalmentsNum;
    }

    public function getBankCardNo() {
        return $this->bankCardNo;
    }

    public function setBankCardNo($bankCardNo) {
        $this->bankCardNo = $bankCardNo;
    }

    public function getExtendPayData() {
        return $this->extendPayData;
    }

    public function setExtendPayData($extendPayData) {
        $this->extendPayData = $extendPayData;
    }

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

    public function getTerminalDeviceData() {
        return $this->terminalDeviceData;
    }

    public function setTerminalDeviceData($terminalDeviceData) {
        $this->terminalDeviceData = $terminalDeviceData;
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

}
