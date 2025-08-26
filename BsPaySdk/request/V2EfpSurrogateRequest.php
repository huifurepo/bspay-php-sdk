<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 全渠道资金付款申请
 *
 * @author sdk-generator
 * @Description
 */
class V2EfpSurrogateRequest extends BaseRequest
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
     * 商户汇付id
     */
    private $huifuId;
    /**
     * 交易金额.单位:元，2位小数
     */
    private $cashAmt;
    /**
     * 银行账号使用斗拱系统的公钥对银行账号进行RSA加密得到秘文；  示例值：b9LE5RccVVLChrHgo9lvp……PhWhjKrWg2NPfbe0mkQ&#x3D;&#x3D; 到账类型标识为E或P时必填
     */
    private $cardNo;
    /**
     * 银行编号银行编号 到账类型标识为E或P时必填
     */
    private $bankCode;
    /**
     * 银行卡用户名银行卡用户名 到账类型标识为E或P时必填
     */
    private $cardName;
    /**
     * 到账类型标识
     */
    private $cardAcctType;
    /**
     * 省份到账类型标识为E或P时必填
     */
    private $provId;
    /**
     * 地区到账类型标识为E或P时必填
     */
    private $areaId;
    /**
     * 手机号对私必填，使用斗拱系统的公钥对手机号进行RSA加密得到秘文；  示例值：b9LE5RccVVLChrHgo9lvp……PhWhjKrWg2NPfbe0mkUDd
     */
    private $mobileNo;
    /**
     * 证件类型证件类型01：身份证  03：护照  06：港澳通行证  07：台湾通行证  09：外国人居留证  11：营业执照  12：组织机构代码证  14：统一社会信用代码  99：其他  示例值：14 到账类型标识为E或P时必填
     */
    private $certType;
    /**
     * 证件号使用斗拱系统的公钥对证件号进行RSA加密得到秘文；  示例值：b9LE5RccVVLChrHgo9lvp……PhWhjKrWg2NPfbe0mkQ 到账类型标识为P时必填
     */
    private $certNo;
    /**
     * 统一社会信用代码到账类型标识为E时必填
     */
    private $licenceCode;
    /**
     * 入账接收方对象json格式,到账类型标识为H时必填
     */
    private $acctSplitBunch;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_EFP_SURROGATE;
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

    public function getCardNo() {
        return $this->cardNo;
    }

    public function setCardNo($cardNo) {
        $this->cardNo = $cardNo;
    }

    public function getBankCode() {
        return $this->bankCode;
    }

    public function setBankCode($bankCode) {
        $this->bankCode = $bankCode;
    }

    public function getCardName() {
        return $this->cardName;
    }

    public function setCardName($cardName) {
        $this->cardName = $cardName;
    }

    public function getCardAcctType() {
        return $this->cardAcctType;
    }

    public function setCardAcctType($cardAcctType) {
        $this->cardAcctType = $cardAcctType;
    }

    public function getProvId() {
        return $this->provId;
    }

    public function setProvId($provId) {
        $this->provId = $provId;
    }

    public function getAreaId() {
        return $this->areaId;
    }

    public function setAreaId($areaId) {
        $this->areaId = $areaId;
    }

    public function getMobileNo() {
        return $this->mobileNo;
    }

    public function setMobileNo($mobileNo) {
        $this->mobileNo = $mobileNo;
    }

    public function getCertType() {
        return $this->certType;
    }

    public function setCertType($certType) {
        $this->certType = $certType;
    }

    public function getCertNo() {
        return $this->certNo;
    }

    public function setCertNo($certNo) {
        $this->certNo = $certNo;
    }

    public function getLicenceCode() {
        return $this->licenceCode;
    }

    public function setLicenceCode($licenceCode) {
        $this->licenceCode = $licenceCode;
    }

    public function getAcctSplitBunch() {
        return $this->acctSplitBunch;
    }

    public function setAcctSplitBunch($acctSplitBunch) {
        $this->acctSplitBunch = $acctSplitBunch;
    }

}
