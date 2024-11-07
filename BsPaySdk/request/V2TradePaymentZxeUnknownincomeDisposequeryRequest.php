<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 不明来账处理结果查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentZxeUnknownincomeDisposequeryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_ZXE_UNKNOWNINCOME_DISPOSEQUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

}
