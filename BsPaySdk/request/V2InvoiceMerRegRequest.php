<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户注册
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceMerRegRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求时间
     */
    private $reqDate;
    /**
     * 开票方汇付ID
     */
    private $huifuId;
    /**
     * 纳税人识别号
     */
    private $taxPayerId;
    /**
     * 销方名称
     */
    private $taxPayerName;
    /**
     * 公司电话
     */
    private $telNo;
    /**
     * 公司地址
     */
    private $regAddress;
    /**
     * 开户银行
     */
    private $bankName;
    /**
     * 开户账户
     */
    private $accountNo;
    /**
     * 联系人手机号
     */
    private $contactPhoneNo;
    /**
     * 开票方式
     */
    private $openMode;
    /**
     * 所属省
     */
    private $provId;
    /**
     * 所属市
     */
    private $cityId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_MER_REG;
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

    public function getTaxPayerId() {
        return $this->taxPayerId;
    }

    public function setTaxPayerId($taxPayerId) {
        $this->taxPayerId = $taxPayerId;
    }

    public function getTaxPayerName() {
        return $this->taxPayerName;
    }

    public function setTaxPayerName($taxPayerName) {
        $this->taxPayerName = $taxPayerName;
    }

    public function getTelNo() {
        return $this->telNo;
    }

    public function setTelNo($telNo) {
        $this->telNo = $telNo;
    }

    public function getRegAddress() {
        return $this->regAddress;
    }

    public function setRegAddress($regAddress) {
        $this->regAddress = $regAddress;
    }

    public function getBankName() {
        return $this->bankName;
    }

    public function setBankName($bankName) {
        $this->bankName = $bankName;
    }

    public function getAccountNo() {
        return $this->accountNo;
    }

    public function setAccountNo($accountNo) {
        $this->accountNo = $accountNo;
    }

    public function getContactPhoneNo() {
        return $this->contactPhoneNo;
    }

    public function setContactPhoneNo($contactPhoneNo) {
        $this->contactPhoneNo = $contactPhoneNo;
    }

    public function getOpenMode() {
        return $this->openMode;
    }

    public function setOpenMode($openMode) {
        $this->openMode = $openMode;
    }

    public function getProvId() {
        return $this->provId;
    }

    public function setProvId($provId) {
        $this->provId = $provId;
    }

    public function getCityId() {
        return $this->cityId;
    }

    public function setCityId($cityId) {
        $this->cityId = $cityId;
    }

}
