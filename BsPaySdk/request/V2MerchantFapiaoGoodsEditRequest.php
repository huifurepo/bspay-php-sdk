<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 开票商品修改
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantFapiaoGoodsEditRequest extends BaseRequest
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
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 商品id
     */
    private $goodsId;
    /**
     * 是否默认
     */
    private $isDefault;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_FAPIAO_GOODS_EDIT;
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

    public function getGoodsId() {
        return $this->goodsId;
    }

    public function setGoodsId($goodsId) {
        $this->goodsId = $goodsId;
    }

    public function getIsDefault() {
        return $this->isDefault;
    }

    public function setIsDefault($isDefault) {
        $this->isDefault = $isDefault;
    }

}
