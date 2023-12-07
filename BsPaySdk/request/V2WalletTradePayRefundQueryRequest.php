<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 钱包支付退款查询
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletTradePayRefundQueryRequest extends BaseRequest
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
        return FunctionCodeEnum::$V2_WALLET_TRADE_PAY_REFUND_QUERY;
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
