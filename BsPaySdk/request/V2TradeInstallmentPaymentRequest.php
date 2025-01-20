<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 分期支付
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeInstallmentPaymentRequest extends BaseRequest
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
     * 分期数
     */
    private $installmentNum;
    /**
     * 商品描述
     */
    private $goodsDesc;
    /**
     * 安全信息
     */
    private $riskCheckData;
    /**
     * 京东白条分期信息trans_type&#x3D;JDBT时，必填jsonObject字符串，京东白条分期相关信息通过该参数集上送
     */
    private $jdbtData;
    /**
     * 银联聚分期信息trans_type&#x3D;YLJFQ-银联聚分期时，必填jsonObject字符串，银联聚分期相关信息通过该参数集上送
     */
    private $yljfqData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_INSTALLMENT_PAYMENT;
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

    public function getInstallmentNum() {
        return $this->installmentNum;
    }

    public function setInstallmentNum($installmentNum) {
        $this->installmentNum = $installmentNum;
    }

    public function getGoodsDesc() {
        return $this->goodsDesc;
    }

    public function setGoodsDesc($goodsDesc) {
        $this->goodsDesc = $goodsDesc;
    }

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

    public function getJdbtData() {
        return $this->jdbtData;
    }

    public function setJdbtData($jdbtData) {
        $this->jdbtData = $jdbtData;
    }

    public function getYljfqData() {
        return $this->yljfqData;
    }

    public function setYljfqData($yljfqData) {
        $this->yljfqData = $yljfqData;
    }

}
