<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 代运营佣金代扣
 *
 * @author sdk-generator
 * @Description
 */
class V2LlaWithholdRequest extends BaseRequest
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
     * 代运营汇付id
     */
    private $agencyHuifuId;
    /**
     * 商家汇付id
     */
    private $merchantHuifuId;
    /**
     * 平台
     */
    private $platformType;
    /**
     * 提现id
     */
    private $encashSeqId;
    /**
     * 绑卡id
     */
    private $tokenNo;
    /**
     * 抽佣金额
     */
    private $transAmt;
    /**
     * 银行扩展数据
     */
    private $extendPayData;
    /**
     * 设备信息
     */
    private $terminalDeviceData;
    /**
     * 安全信息
     */
    private $riskCheckData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_LLA_WITHHOLD;
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

    public function getAgencyHuifuId() {
        return $this->agencyHuifuId;
    }

    public function setAgencyHuifuId($agencyHuifuId) {
        $this->agencyHuifuId = $agencyHuifuId;
    }

    public function getMerchantHuifuId() {
        return $this->merchantHuifuId;
    }

    public function setMerchantHuifuId($merchantHuifuId) {
        $this->merchantHuifuId = $merchantHuifuId;
    }

    public function getPlatformType() {
        return $this->platformType;
    }

    public function setPlatformType($platformType) {
        $this->platformType = $platformType;
    }

    public function getEncashSeqId() {
        return $this->encashSeqId;
    }

    public function setEncashSeqId($encashSeqId) {
        $this->encashSeqId = $encashSeqId;
    }

    public function getTokenNo() {
        return $this->tokenNo;
    }

    public function setTokenNo($tokenNo) {
        $this->tokenNo = $tokenNo;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getExtendPayData() {
        return $this->extendPayData;
    }

    public function setExtendPayData($extendPayData) {
        $this->extendPayData = $extendPayData;
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
