<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 自助扫码开票
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceSelfscanopenRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求时间
     */
    private $reqDate;
    /**
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 发票类型
     */
    private $ivcType;
    /**
     * 开票类型
     */
    private $openType;
    /**
     * 含税合计金额（元）
     */
    private $orderAmt;
    /**
     * 开票商品信息
     */
    private $goodsInfos;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_SELFSCANOPEN;
    }


    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getIvcType() {
        return $this->ivcType;
    }

    public function setIvcType($ivcType) {
        $this->ivcType = $ivcType;
    }

    public function getOpenType() {
        return $this->openType;
    }

    public function setOpenType($openType) {
        $this->openType = $openType;
    }

    public function getOrderAmt() {
        return $this->orderAmt;
    }

    public function setOrderAmt($orderAmt) {
        $this->orderAmt = $orderAmt;
    }

    public function getGoodsInfos() {
        return $this->goodsInfos;
    }

    public function setGoodsInfos($goodsInfos) {
        $this->goodsInfos = $goodsInfos;
    }

}
