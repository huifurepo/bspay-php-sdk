<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银行卡代发
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeSettlementSurrogateRequest extends BaseRequest
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
     * 代发金额
     */
    private $cashAmt;
    /**
     * 代发用途描述
     */
    private $purposeDesc;
    /**
     * 省份
     */
    private $province;
    /**
     * 地区
     */
    private $area;
    /**
     * 银行编号
     */
    private $bankCode;
    /**
     * 银行卡用户名
     */
    private $bankAccountName;
    /**
     * 对公对私标识
     */
    private $cardAcctType;
    /**
     * 银行账号密文
     */
    private $bankCardNoCrypt;
    /**
     * 证件号密文
     */
    private $certificateNoCrypt;
    /**
     * 证件类型
     */
    private $certificateType;
    /**
     * 手机号密文
     */
    private $mobileNoCrypt;
    /**
     * 到账日期类型
     */
    private $intoAcctDateType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_SETTLEMENT_SURROGATE;
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

    public function getCashAmt() {
        return $this->cashAmt;
    }

    public function setCashAmt($cashAmt) {
        $this->cashAmt = $cashAmt;
    }

    public function getPurposeDesc() {
        return $this->purposeDesc;
    }

    public function setPurposeDesc($purposeDesc) {
        $this->purposeDesc = $purposeDesc;
    }

    public function getProvince() {
        return $this->province;
    }

    public function setProvince($province) {
        $this->province = $province;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function getBankCode() {
        return $this->bankCode;
    }

    public function setBankCode($bankCode) {
        $this->bankCode = $bankCode;
    }

    public function getBankAccountName() {
        return $this->bankAccountName;
    }

    public function setBankAccountName($bankAccountName) {
        $this->bankAccountName = $bankAccountName;
    }

    public function getCardAcctType() {
        return $this->cardAcctType;
    }

    public function setCardAcctType($cardAcctType) {
        $this->cardAcctType = $cardAcctType;
    }

    public function getBankCardNoCrypt() {
        return $this->bankCardNoCrypt;
    }

    public function setBankCardNoCrypt($bankCardNoCrypt) {
        $this->bankCardNoCrypt = $bankCardNoCrypt;
    }

    public function getCertificateNoCrypt() {
        return $this->certificateNoCrypt;
    }

    public function setCertificateNoCrypt($certificateNoCrypt) {
        $this->certificateNoCrypt = $certificateNoCrypt;
    }

    public function getCertificateType() {
        return $this->certificateType;
    }

    public function setCertificateType($certificateType) {
        $this->certificateType = $certificateType;
    }

    public function getMobileNoCrypt() {
        return $this->mobileNoCrypt;
    }

    public function setMobileNoCrypt($mobileNoCrypt) {
        $this->mobileNoCrypt = $mobileNoCrypt;
    }

    public function getIntoAcctDateType() {
        return $this->intoAcctDateType;
    }

    public function setIntoAcctDateType($intoAcctDateType) {
        $this->intoAcctDateType = $intoAcctDateType;
    }

}
