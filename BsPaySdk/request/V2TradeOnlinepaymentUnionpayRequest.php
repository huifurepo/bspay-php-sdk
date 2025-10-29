<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银联统一在线收银台
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentUnionpayRequest extends BaseRequest
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
     * 订单金额
     */
    private $transAmt;
    /**
     * 商品描述
     */
    private $orderDesc;
    /**
     * 安全信息
     */
    private $riskCheckData;
    /**
     * 三方支付数据jsonObject&lt;br/&gt;pay_scene&#x3D;U_JSAPI或pay_scene&#x3D;U_MINIAPP时，必填
     */
    private $thirdPayData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_UNIONPAY;
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

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getOrderDesc() {
        return $this->orderDesc;
    }

    public function setOrderDesc($orderDesc) {
        $this->orderDesc = $orderDesc;
    }

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

    public function getThirdPayData() {
        return $this->thirdPayData;
    }

    public function setThirdPayData($thirdPayData) {
        $this->thirdPayData = $thirdPayData;
    }

}
