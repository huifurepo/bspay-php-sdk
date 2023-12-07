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
     * 扣款登记创建请求流水号deduct_req_seq_id与deduct_hf_seq_id二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2022012614120615001&lt;/font&gt;
     */
    private $deductReqSeqId;
    /**
     * 扣款登记返回的汇付全局流水号deduct_req_seq_id与deduct_hf_seq_id二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00470topo1A211015160805P090ac132fef00000&lt;/font&gt;
     */
    private $deductHfSeqId;
    /**
     * 微信扣款单号
     */
    private $outTradeNo;
    /**
     * 商品描述
     */
    private $goodsDesc;
    /**
     * 安全信息
     */
    private $riskCheckData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYSCORE_PAY_PAYSCOREPAY;
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

    public function getDeductReqSeqId() {
        return $this->deductReqSeqId;
    }

    public function setDeductReqSeqId($deductReqSeqId) {
        $this->deductReqSeqId = $deductReqSeqId;
    }

    public function getDeductHfSeqId() {
        return $this->deductHfSeqId;
    }

    public function setDeductHfSeqId($deductHfSeqId) {
        $this->deductHfSeqId = $deductHfSeqId;
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

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

}
