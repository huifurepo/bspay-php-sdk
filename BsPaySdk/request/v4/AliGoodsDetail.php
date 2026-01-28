<?php

namespace BsPaySdk\request\v4;

/**
 * 支付宝商品信息
 *
 * @author sdk-generator
 * @Description
 */
class AliGoodsDetail {
    /**
     * 商品的编号
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
     * 商品数量
     */
    private $quantity;
    /**
     * 商品描述信息
     */
    private $body;
    /**
     * 商品类目树
     */
    private $categoriesTree;
    /**
     * 商品的展示地址
     */
    private $showUrl;
    /**
     * 商品类目
     */
    private $goodsCategory;

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

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function getCategoriesTree() {
        return $this->categoriesTree;
    }

    public function setCategoriesTree($categoriesTree) {
        $this->categoriesTree = $categoriesTree;
    }

    public function getShowUrl() {
        return $this->showUrl;
    }

    public function setShowUrl($showUrl) {
        $this->showUrl = $showUrl;
    }

    public function getGoodsCategory() {
        return $this->goodsCategory;
    }

    public function setGoodsCategory($goodsCategory) {
        $this->goodsCategory = $goodsCategory;
    }
}