<?php

namespace BsPaySdk\request\v4;

/**
 * 微信商品信息
 *
 * @author sdk-generator
 * @Description
 */
class WxGoodsDetail {
    /**
     * 商品编码
     */
    private $goodsId;
    /**
     * 商品名称
     */
    private $goodsName;
    /**
     * 商品单价(元)
     */
    private $price;
    /**
     * 商品优惠金额
     */
    private $discountAmount;
    /**
     * 商品数量
     */
    private $quantity;
    /**
     * 微信侧商品编码
     */
    private $wxpayGoodsId;
    /**
     * 商品备注
     */
    private $goodsRemark;

    public function getGoodsId() {
        return $this->goodsId;
    }

    public function setGoodsId($goodsId) {
        $this->goodsId = $goodsId;
    }

    public function getGoodsName() {
        return $this->goodsName;
    }

    public function setGoodsName($goodsName) {
        $this->goodsName = $goodsName;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getDiscountAmount() {
        return $this->discountAmount;
    }

    public function setDiscountAmount($discountAmount) {
        $this->discountAmount = $discountAmount;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getWxpayGoodsId() {
        return $this->wxpayGoodsId;
    }

    public function setWxpayGoodsId($wxpayGoodsId) {
        $this->wxpayGoodsId = $wxpayGoodsId;
    }

    public function getGoodsRemark() {
        return $this->goodsRemark;
    }

    public function setGoodsRemark($goodsRemark) {
        $this->goodsRemark = $goodsRemark;
    }
}