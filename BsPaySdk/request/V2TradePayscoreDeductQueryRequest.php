<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 查询扣款信息
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayscoreDeductQueryRequest extends BaseRequest
{

    /**
     * 汇付商户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYSCORE_DEDUCT_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

}
