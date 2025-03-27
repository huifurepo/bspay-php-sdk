<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 钱包开户
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletCreateRequest extends BaseRequest
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
     * 个人姓名钱包账户开户人的本人真实姓名；wallet_type&#x3D;1时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：张三&lt;/font&gt;
     */
    private $name;
    /**
     * 钱包绑定手机号
     */
    private $mobileNo;
    /**
     * 手机短信验证码
     */
    private $verifyCode;
    /**
     * 短信验证流水号
     */
    private $verifySeqId;
    /**
     * 跳转地址
     */
    private $frontUrl;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_WALLET_CREATE;
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

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getMobileNo() {
        return $this->mobileNo;
    }

    public function setMobileNo($mobileNo) {
        $this->mobileNo = $mobileNo;
    }

    public function getVerifyCode() {
        return $this->verifyCode;
    }

    public function setVerifyCode($verifyCode) {
        $this->verifyCode = $verifyCode;
    }

    public function getVerifySeqId() {
        return $this->verifySeqId;
    }

    public function setVerifySeqId($verifySeqId) {
        $this->verifySeqId = $verifySeqId;
    }

    public function getFrontUrl() {
        return $this->frontUrl;
    }

    public function setFrontUrl($frontUrl) {
        $this->frontUrl = $frontUrl;
    }

}
