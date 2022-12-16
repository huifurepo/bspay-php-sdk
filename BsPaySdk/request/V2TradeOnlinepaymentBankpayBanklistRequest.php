<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 网银支持银行列表查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentBankpayBanklistRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 网关支付类型
     */
    private $gateType;
    /**
     * 订单类型
     */
    private $orderType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_BANKPAY_BANKLIST;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getGateType() {
        return $this->gateType;
    }

    public function setGateType($gateType) {
        $this->gateType = $gateType;
    }

    public function getOrderType() {
        return $this->orderType;
    }

    public function setOrderType($orderType) {
        $this->orderType = $orderType;
    }

}
