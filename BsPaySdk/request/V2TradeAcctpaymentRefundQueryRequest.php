<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 余额支付退款查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeAcctpaymentRefundQueryRequest extends BaseRequest
{

    /**
     * 退款请求流水号
     */
    private $orgReqSeqId;
    /**
     * 余额支付退款请求日期
     */
    private $orgReqDate;
    /**
     * 商户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ACCTPAYMENT_REFUND_QUERY;
    }


    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

}
