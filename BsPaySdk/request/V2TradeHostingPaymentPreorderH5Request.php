<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * H5、PC预下单接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeHostingPaymentPreorderH5Request extends BaseRequest
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
     * 预下单类型
     */
    private $preOrderType;
    /**
     * 半支付托管扩展参数集合
     */
    private $hostingData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_HOSTING_PAYMENT_PREORDER;
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

    public function getPreOrderType() {
        return $this->preOrderType;
    }

    public function setPreOrderType($preOrderType) {
        $this->preOrderType = $preOrderType;
    }

    public function getHostingData() {
        return $this->hostingData;
    }

    public function setHostingData($hostingData) {
        $this->hostingData = $hostingData;
    }

}
