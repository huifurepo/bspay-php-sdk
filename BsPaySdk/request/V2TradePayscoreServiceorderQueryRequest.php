<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 查询支付分订单
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayscoreServiceorderQueryRequest extends BaseRequest
{

    /**
     * 汇付商户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYSCORE_SERVICEORDER_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

}
