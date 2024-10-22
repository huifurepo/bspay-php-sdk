<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 服务单查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayafteruseCreditbizorderQueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYAFTERUSE_CREDITBIZORDER_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

}
