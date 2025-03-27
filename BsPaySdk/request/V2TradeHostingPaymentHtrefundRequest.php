<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 托管交易退款
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeHostingPaymentHtrefundRequest extends BaseRequest
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
     * 申请退款金额
     */
    private $ordAmt;
    /**
     * 原交易请求日期
     */
    private $orgReqDate;
    /**
     * 安全信息线上交易退款必填，参见线上退款接口；jsonObject字符串
     */
    private $riskCheckData;
    /**
     * 设备信息线上交易退款必填，参见线上退款接口；jsonObject字符串
     */
    private $terminalDeviceData;
    /**
     * 大额转账支付账户信息数据jsonObject格式；银行大额转账支付交易退款申请时必填
     */
    private $bankInfoData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_HOSTING_PAYMENT_HTREFUND;
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

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

    public function getTerminalDeviceData() {
        return $this->terminalDeviceData;
    }

    public function setTerminalDeviceData($terminalDeviceData) {
        $this->terminalDeviceData = $terminalDeviceData;
    }

    public function getBankInfoData() {
        return $this->bankInfoData;
    }

    public function setBankInfoData($bankInfoData) {
        $this->bankInfoData = $bankInfoData;
    }

}
