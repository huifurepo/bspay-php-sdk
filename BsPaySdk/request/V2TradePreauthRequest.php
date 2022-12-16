<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信支付宝预授权
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePreauthRequest extends BaseRequest
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
     * 商品描述
     */
    private $goodsDesc;
    /**
     * 支付授权码
     */
    private $authCode;
    /**
     * 安全信息
     */
    private $riskCheckData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PREAUTH;
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

    public function getGoodsDesc() {
        return $this->goodsDesc;
    }

    public function setGoodsDesc($goodsDesc) {
        $this->goodsDesc = $goodsDesc;
    }

    public function getAuthCode() {
        return $this->authCode;
    }

    public function setAuthCode($authCode) {
        $this->authCode = $authCode;
    }

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

}
