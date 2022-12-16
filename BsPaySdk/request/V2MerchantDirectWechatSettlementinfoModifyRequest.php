<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信直连-修改微信结算帐号
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantDirectWechatSettlementinfoModifyRequest extends BaseRequest
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
     * 汇付ID
     */
    private $huifuId;
    /**
     * 开发者的应用ID
     */
    private $appId;
    /**
     * 微信商户号
     */
    private $mchId;
    /**
     * 特约商户号
     */
    private $subMchid;
    /**
     * 账户类型
     */
    private $accountType;
    /**
     * 开户银行
     */
    private $accountBank;
    /**
     * 开户银行省市编码
     */
    private $bankAddressCode;
    /**
     * 银行账号
     */
    private $accountNumber;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_DIRECT_WECHAT_SETTLEMENTINFO_MODIFY;
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

    public function getAppId() {
        return $this->appId;
    }

    public function setAppId($appId) {
        $this->appId = $appId;
    }

    public function getMchId() {
        return $this->mchId;
    }

    public function setMchId($mchId) {
        $this->mchId = $mchId;
    }

    public function getSubMchid() {
        return $this->subMchid;
    }

    public function setSubMchid($subMchid) {
        $this->subMchid = $subMchid;
    }

    public function getAccountType() {
        return $this->accountType;
    }

    public function setAccountType($accountType) {
        $this->accountType = $accountType;
    }

    public function getAccountBank() {
        return $this->accountBank;
    }

    public function setAccountBank($accountBank) {
        $this->accountBank = $accountBank;
    }

    public function getBankAddressCode() {
        return $this->bankAddressCode;
    }

    public function setBankAddressCode($bankAddressCode) {
        $this->bankAddressCode = $bankAddressCode;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

}
