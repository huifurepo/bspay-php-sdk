<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 一键绑卡
 *
 * @author sdk-generator
 * @Description
 */
class V2QuickbuckleOnekeyCardbindRequest extends BaseRequest
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
     * 汇付Id
     */
    private $huifuId;
    /**
     * 顾客用户号 
     */
    private $outCustId;
    /**
     * 银行号
     */
    private $bankId;
    /**
     * 银行卡开户姓名 
     */
    private $cardName;
    /**
     * 银行卡绑定身份证
     */
    private $certId;
    /**
     * 银行卡绑定证件类型
     */
    private $certType;
    /**
     * 证件有效期到期日长期有效不填.格式：yyyyMMdd。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20311111&lt;/font&gt;
     */
    private $certEndDate;
    /**
     * 银行卡绑定手机号 
     */
    private $cardMp;
    /**
     * 卡的借贷类型
     */
    private $dcType;
    /**
     * 异步请求地址
     */
    private $asyncReturnUrl;
    /**
     * 设备信息域
     */
    private $trxDeviceInf;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_QUICKBUCKLE_ONEKEY_CARDBIND;
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

    public function getOutCustId() {
        return $this->outCustId;
    }

    public function setOutCustId($outCustId) {
        $this->outCustId = $outCustId;
    }

    public function getBankId() {
        return $this->bankId;
    }

    public function setBankId($bankId) {
        $this->bankId = $bankId;
    }

    public function getCardName() {
        return $this->cardName;
    }

    public function setCardName($cardName) {
        $this->cardName = $cardName;
    }

    public function getCertId() {
        return $this->certId;
    }

    public function setCertId($certId) {
        $this->certId = $certId;
    }

    public function getCertType() {
        return $this->certType;
    }

    public function setCertType($certType) {
        $this->certType = $certType;
    }

    public function getCertEndDate() {
        return $this->certEndDate;
    }

    public function setCertEndDate($certEndDate) {
        $this->certEndDate = $certEndDate;
    }

    public function getCardMp() {
        return $this->cardMp;
    }

    public function setCardMp($cardMp) {
        $this->cardMp = $cardMp;
    }

    public function getDcType() {
        return $this->dcType;
    }

    public function setDcType($dcType) {
        $this->dcType = $dcType;
    }

    public function getAsyncReturnUrl() {
        return $this->asyncReturnUrl;
    }

    public function setAsyncReturnUrl($asyncReturnUrl) {
        $this->asyncReturnUrl = $asyncReturnUrl;
    }

    public function getTrxDeviceInf() {
        return $this->trxDeviceInf;
    }

    public function setTrxDeviceInf($trxDeviceInf) {
        $this->trxDeviceInf = $trxDeviceInf;
    }

}
