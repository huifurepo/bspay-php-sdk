<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 余额支付查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeAcctpaymentPayQueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 原交易请求日期
     */
    private $orgReqDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ACCTPAYMENT_PAY_QUERY;
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
