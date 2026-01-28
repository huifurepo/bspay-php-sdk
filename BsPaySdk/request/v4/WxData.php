<?php

namespace BsPaySdk\request\v4;

/**
 * 微信支付参数
 *
 * @author sdk-generator
 * @Description
 */
class WxData {
    /**
     * 支付授权码
     */
    private $authCode;
    /**
     * 子商户应用ID
     */
    private $subAppid;
    /**
     * 子商户用户标识
     */
    private $subOpenid;
    /**
     * 附加数据
     */
    private $attach;
    /**
     * 商品描述
     */
    private $body;
    /**
     * 商品详情
     */
    private $detail;
    /**
     * 场景信息
     */
    private $sceneInfo;
    /**
     * 收款设备IP
     */
    private $spbillCreateIp;
    /**
     * 开发票入口开放标识
     */
    private $receipt;
    /**
     * 设备信息
     */
    private $deviceInfo;
    /**
     * 单品优惠标识
     */
    private $promotionFlag;
    /**
     * 订单优惠标记
     */
    private $goodsTag;

    public function getAuthCode() {
        return $this->authCode;
    }

    public function setAuthCode($authCode) {
        $this->authCode = $authCode;
    }

    public function getSubAppid() {
        return $this->subAppid;
    }

    public function setSubAppid($subAppid) {
        $this->subAppid = $subAppid;
    }

    public function getSubOpenid() {
        return $this->subOpenid;
    }

    public function setSubOpenid($subOpenid) {
        $this->subOpenid = $subOpenid;
    }

    public function getAttach() {
        return $this->attach;
    }

    public function setAttach($attach) {
        $this->attach = $attach;
    }

    public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function getDetail() {
        return $this->detail;
    }

    public function setDetail($detail) {
        $this->detail = $detail;
    }

    public function getSceneInfo() {
        return $this->sceneInfo;
    }

    public function setSceneInfo($sceneInfo) {
        $this->sceneInfo = $sceneInfo;
    }

    public function getSpbillCreateIp() {
        return $this->spbillCreateIp;
    }

    public function setSpbillCreateIp($spbillCreateIp) {
        $this->spbillCreateIp = $spbillCreateIp;
    }

    public function getReceipt() {
        return $this->receipt;
    }

    public function setReceipt($receipt) {
        $this->receipt = $receipt;
    }

    public function getDeviceInfo() {
        return $this->deviceInfo;
    }

    public function setDeviceInfo($deviceInfo) {
        $this->deviceInfo = $deviceInfo;
    }

    public function getPromotionFlag() {
        return $this->promotionFlag;
    }

    public function setPromotionFlag($promotionFlag) {
        $this->promotionFlag = $promotionFlag;
    }

    public function getGoodsTag() {
        return $this->goodsTag;
    }

    public function setGoodsTag($goodsTag) {
        $this->goodsTag = $goodsTag;
    }
}
