<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 支付分扣款
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayscorePayPayscorepayRequest extends BaseRequest
{

    /**
     * 微信扣款单号
     */
    private $outTradeNo;
    /**
     * 商品描述
     */
    private $goodsDesc;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 安全信息
     */
    private $riskCheckData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYSCORE_PAY_PAYSCOREPAY;
    }


    public function getOutTradeNo() {
        return $this->outTradeNo;
    }

    public function setOutTradeNo($outTradeNo) {
        $this->outTradeNo = $outTradeNo;
    }

    public function getGoodsDesc() {
        return $this->goodsDesc;
    }

    public function setGoodsDesc($goodsDesc) {
        $this->goodsDesc = $goodsDesc;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

}
