<?php

namespace BsPaySdk\request\v4;

/**
 * 支付宝支付参数
 *
 * @author sdk-generator
 * @Description
 */
class AlipayData {
    /**
     * 支付宝的店铺编号
     */
    private $alipayStoreId;
    /**
     * 买家的支付宝唯一用户号
     */
    private $buyerId;
    /**
     * 买家支付宝账号
     */
    private $buyerLogonId;
    /**
     * 支付授权码
     */
    private $authCode;
    /**
     * 订单包含的商品列表信息
     */
    private $goodsDetail;
    /**
     * 业务扩展参数
     */
    private $extendParams;
    /**
     * 优惠明细参数
     */
    private $aliPromoParams;
    /**
     * 卖家支付宝用户号
     */
    private $sellerId;
    /**
     * 商户原始订单号
     */
    private $merchantOrderNo;
    /**
     * 商户操作员编号
     */
    private $operatorId;
    /**
     * 销售产品码
     */
    private $productCode;
    /**
     * 外部指定买家
     */
    private $extUserInfo;
    /**
     * 订单标题
     */
    private $subject;
    /**
     * 商家门店名称
     */
    private $storeName;
    /**
     * 小程序应用的appid
     */
    private $opAppId;
    /**
     * 商户业务信息
     */
    private $aliBusinessParams;
    /**
     * 订单描述
     */
    private $body;

    public function getAlipayStoreId() {
        return $this->alipayStoreId;
    }

    public function setAlipayStoreId($alipayStoreId) {
        $this->alipayStoreId = $alipayStoreId;
    }

    public function getBuyerId() {
        return $this->buyerId;
    }

    public function setBuyerId($buyerId) {
        $this->buyerId = $buyerId;
    }

    public function getBuyerLogonId() {
        return $this->buyerLogonId;
    }

    public function setBuyerLogonId($buyerLogonId) {
        $this->buyerLogonId = $buyerLogonId;
    }

    public function getAuthCode() {
        return $this->authCode;
    }

    public function setAuthCode($authCode) {
        $this->authCode = $authCode;
    }

    public function getGoodsDetail() {
        return $this->goodsDetail;
    }

    public function setGoodsDetail($goodsDetail) {
        $this->goodsDetail = $goodsDetail;
    }

    public function getExtendParams() {
        return $this->extendParams;
    }

    public function setExtendParams($extendParams) {
        $this->extendParams = $extendParams;
    }

    public function getAliPromoParams() {
        return $this->aliPromoParams;
    }

    public function setAliPromoParams($aliPromoParams) {
        $this->aliPromoParams = $aliPromoParams;
    }

    public function getSellerId() {
        return $this->sellerId;
    }

    public function setSellerId($sellerId) {
        $this->sellerId = $sellerId;
    }

    public function getMerchantOrderNo() {
        return $this->merchantOrderNo;
    }

    public function setMerchantOrderNo($merchantOrderNo) {
        $this->merchantOrderNo = $merchantOrderNo;
    }

    public function getOperatorId() {
        return $this->operatorId;
    }

    public function setOperatorId($operatorId) {
        $this->operatorId = $operatorId;
    }

    public function getProductCode() {
        return $this->productCode;
    }

    public function setProductCode($productCode) {
        $this->productCode = $productCode;
    }

    public function getExtUserInfo() {
        return $this->extUserInfo;
    }

    public function setExtUserInfo($extUserInfo) {
        $this->extUserInfo = $extUserInfo;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function getStoreName() {
        return $this->storeName;
    }

    public function setStoreName($storeName) {
        $this->storeName = $storeName;
    }

    public function getOpAppId() {
        return $this->opAppId;
    }

    public function setOpAppId($opAppId) {
        $this->opAppId = $opAppId;
    }

    public function getAliBusinessParams() {
        return $this->aliBusinessParams;
    }

    public function setAliBusinessParams($aliBusinessParams) {
        $this->aliBusinessParams = $aliBusinessParams;
    }

    public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
    }
}
