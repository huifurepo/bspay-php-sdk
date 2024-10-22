<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 分期扣款
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayafteruseInstallmentPayRequest extends BaseRequest
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
     * 客户号
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
     * 风控信息
     */
    private $riskCheckData;
    /**
     * 交易有效期
     */
    private $timeExpire;
    /**
     * 支付宝扩展参数集合
     */
    private $alipayData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYAFTERUSE_INSTALLMENT_PAY;
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

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

    public function getTimeExpire() {
        return $this->timeExpire;
    }

    public function setTimeExpire($timeExpire) {
        $this->timeExpire = $timeExpire;
    }

    public function getAlipayData() {
        return $this->alipayData;
    }

    public function setAlipayData($alipayData) {
        $this->alipayData = $alipayData;
    }

}
