<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 分期扣款查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayafteruseInstallmentQueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYAFTERUSE_INSTALLMENT_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

}
