<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 不明来账列表查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentZxeUnknownincomeQueryRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 交易开始日期
     */
    private $transStartDate;
    /**
     * 交易结束日期
     */
    private $transEndDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_ZXE_UNKNOWNINCOME_QUERY;
    }


    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getTransStartDate() {
        return $this->transStartDate;
    }

    public function setTransStartDate($transStartDate) {
        $this->transStartDate = $transStartDate;
    }

    public function getTransEndDate() {
        return $this->transEndDate;
    }

    public function setTransEndDate($transEndDate) {
        $this->transEndDate = $transEndDate;
    }

}
