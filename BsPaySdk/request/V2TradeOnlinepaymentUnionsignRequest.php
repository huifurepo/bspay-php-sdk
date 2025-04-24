<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银联统一在线收银台签约接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentUnionsignRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 支付场景
     */
    private $payScene;
    /**
     * 异步通知地址
     */
    private $notifyUrl;
    /**
     * 设备信息
     */
    private $terminalDeviceData;
    /**
     * 三方支付数据jsonObject；&lt;br/&gt;
     */
    private $thirdPayData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_UNIONSIGN;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
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

    public function getPayScene() {
        return $this->payScene;
    }

    public function setPayScene($payScene) {
        $this->payScene = $payScene;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

    public function getTerminalDeviceData() {
        return $this->terminalDeviceData;
    }

    public function setTerminalDeviceData($terminalDeviceData) {
        $this->terminalDeviceData = $terminalDeviceData;
    }

    public function getThirdPayData() {
        return $this->thirdPayData;
    }

    public function setThirdPayData($thirdPayData) {
        $this->thirdPayData = $thirdPayData;
    }

}
