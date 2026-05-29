<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 开票商品新增
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceManageGoodsAddRequest extends BaseRequest
{

    /**
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 商品名称
     */
    private $goodsName;
    /**
     * 税收分类编码
     */
    private $taxCode;
    /**
     * 税率
     */
    private $taxRate;
    /**
     * 是否默认
     */
    private $isDefault;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_MANAGE_GOODS_ADD;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getGoodsName() {
        return $this->goodsName;
    }

    public function setGoodsName($goodsName) {
        $this->goodsName = $goodsName;
    }

    public function getTaxCode() {
        return $this->taxCode;
    }

    public function setTaxCode($taxCode) {
        $this->taxCode = $taxCode;
    }

    public function getTaxRate() {
        return $this->taxRate;
    }

    public function setTaxRate($taxRate) {
        $this->taxRate = $taxRate;
    }

    public function getIsDefault() {
        return $this->isDefault;
    }

    public function setIsDefault($isDefault) {
        $this->isDefault = $isDefault;
    }

}
