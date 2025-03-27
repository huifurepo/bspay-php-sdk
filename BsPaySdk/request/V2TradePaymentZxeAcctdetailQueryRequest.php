<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * E账户账务明细查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentZxeAcctdetailQueryRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 商户号/用户号
     */
    private $huifuId;
    /**
     * 交易日期
     */
    private $transDate;
    /**
     * 交易类型
     */
    private $transType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_ZXE_ACCTDETAIL_QUERY;
    }


    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
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

    public function getTransDate() {
        return $this->transDate;
    }

    public function setTransDate($transDate) {
        $this->transDate = $transDate;
    }

    public function getTransType() {
        return $this->transType;
    }

    public function setTransType($transType) {
        $this->transType = $transType;
    }

}
