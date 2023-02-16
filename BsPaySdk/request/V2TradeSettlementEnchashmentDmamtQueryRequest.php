<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * DM取现额度查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeSettlementEnchashmentDmamtQueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_SETTLEMENT_ENCHASHMENT_DMAMT_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

}
