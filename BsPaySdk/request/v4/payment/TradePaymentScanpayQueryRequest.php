<?php

namespace BsPaySdk\request\v4\payment;

use BsPaySdk\request\BaseRequest;
use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 扫码交易查询
 *
 * @author sdk-generator
 * @Description
 */
class TradePaymentScanpayQueryRequest extends BaseRequest {
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 全局流水号
     */
    private $hfSeqId;
    /**
     * 原请求流水号
     */
    private $outOrdId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V4_TRADE_PAYMENT_SCANPAY_QUERY;
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

    public function getHfSeqId() {
        return $this->hfSeqId;
    }

    public function setHfSeqId($hfSeqId) {
        $this->hfSeqId = $hfSeqId;
    }

    public function getOutOrdId() {
        return $this->outOrdId;
    }

    public function setOutOrdId($outOrdId) {
        $this->outOrdId = $outOrdId;
    }
}