<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 确认收货提醒
 *
 * @author sdk-generator
 * @Description
 */
class V3TradeHostingPaymentReceiptConfirmRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 快递签收时间
     */
    private $receivedTime;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_TRADE_HOSTING_PAYMENT_RECEIPT_CONFIRM;
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

    public function getReceivedTime() {
        return $this->receivedTime;
    }

    public function setReceivedTime($receivedTime) {
        $this->receivedTime = $receivedTime;
    }

}
