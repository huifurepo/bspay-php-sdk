<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 服务单创建
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayafteruseCreditbizorderCreateRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 订单总金额
     */
    private $transAmt;
    /**
     * 支付宝用户ID
     */
    private $buyerId;
    /**
     * 订单标题
     */
    private $title;
    /**
     * 订单类型
     */
    private $merchantBizType;
    /**
     * 订单详情地址
     */
    private $path;
    /**
     * 芝麻信用服务ID
     */
    private $zmServiceId;
    /**
     * 商品详细信息
     */
    private $itemInfos;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYAFTERUSE_CREDITBIZORDER_CREATE;
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

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getBuyerId() {
        return $this->buyerId;
    }

    public function setBuyerId($buyerId) {
        $this->buyerId = $buyerId;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getMerchantBizType() {
        return $this->merchantBizType;
    }

    public function setMerchantBizType($merchantBizType) {
        $this->merchantBizType = $merchantBizType;
    }

    public function getPath() {
        return $this->path;
    }

    public function setPath($path) {
        $this->path = $path;
    }

    public function getZmServiceId() {
        return $this->zmServiceId;
    }

    public function setZmServiceId($zmServiceId) {
        $this->zmServiceId = $zmServiceId;
    }

    public function getItemInfos() {
        return $this->itemInfos;
    }

    public function setItemInfos($itemInfos) {
        $this->itemInfos = $itemInfos;
    }

}
