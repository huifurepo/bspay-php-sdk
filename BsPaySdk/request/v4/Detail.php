<?php

namespace BsPaySdk\request\v4;

/**
 * 商品详情
 *
 * @author sdk-generator
 * @Description
 */
class Detail {
    /**
     * 订单原价(元)
     */
    private $costPrice;
    /**
     * 商品小票ID
     */
    private $receiptId;
    /**
     * 单品列表
     */
    private $goodsDetail;

    public function getCostPrice() {
        return $this->costPrice;
    }

    public function setCostPrice($costPrice) {
        $this->costPrice = $costPrice;
    }

    public function getReceiptId() {
        return $this->receiptId;
    }

    public function setReceiptId($receiptId) {
        $this->receiptId = $receiptId;
    }

    public function getGoodsDetail() {
        return $this->goodsDetail;
    }

    public function setGoodsDetail($goodsDetail) {
        $this->goodsDetail = $goodsDetail;
    }
}