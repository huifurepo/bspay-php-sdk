<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 线上交易退款
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentRefundRequest extends BaseRequest
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
     * 退款金额
     */
    private $ordAmt;
    /**
     * 设备信息条件必填，当为银行大额支付时可不填，jsonObject格式
     */
    private $terminalDeviceData;
    /**
     * 安全信息条件必填，当为银行大额支付时可不填，jsonObject格式
     */
    private $riskCheckData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_REFUND;
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

    public function getOrdAmt() {
        return $this->ordAmt;
    }

    public function setOrdAmt($ordAmt) {
        $this->ordAmt = $ordAmt;
    }

    public function getTerminalDeviceData() {
        return $this->terminalDeviceData;
    }

    public function setTerminalDeviceData($terminalDeviceData) {
        $this->terminalDeviceData = $terminalDeviceData;
    }

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

}
