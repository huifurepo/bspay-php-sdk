<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 线上交易退款查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentRefundQueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 原退款请求日期
     */
    private $orgReqDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_REFUND_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

}
