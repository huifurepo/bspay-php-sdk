<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 账务流水查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeAcctpaymentAcctlogQueryRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 渠道/代理/商户/用户编号
     */
    private $huifuId;
    /**
     * 账务日期
     */
    private $acctDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ACCTPAYMENT_ACCTLOG_QUERY;
    }


    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getAcctDate() {
        return $this->acctDate;
    }

    public function setAcctDate($acctDate) {
        $this->acctDate = $acctDate;
    }

}
