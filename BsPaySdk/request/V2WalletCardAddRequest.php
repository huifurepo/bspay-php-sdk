<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 新增绑定银行卡
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletCardAddRequest extends BaseRequest
{

    /**
     * 系统号
     */
    private $sysId;
    /**
     * 产品号
     */
    private $productId;
    /**
     * 加签结果
     */
    private $sign;
    /**
     * 数据
     */
    private $data;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_WALLET_CARD_ADD;
    }


    public function getSysId() {
        return $this->sysId;
    }

    public function setSysId($sysId) {
        $this->sysId = $sysId;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function getSign() {
        return $this->sign;
    }

    public function setSign($sign) {
        $this->sign = $sign;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

}
