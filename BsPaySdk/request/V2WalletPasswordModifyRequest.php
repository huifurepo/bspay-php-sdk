<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 钱包密码修改
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletPasswordModifyRequest extends BaseRequest
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
     * 钱包用户ID
     */
    private $userHuifuId;
    /**
     * 手机短信验证码
     */
    private $verifyNo;
    /**
     * 短信验证流水号
     */
    private $verifySeqId;
    /**
     * 跳转地址
     */
    private $frontUrl;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_WALLET_PASSWORD_MODIFY;
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

    public function getUserHuifuId() {
        return $this->userHuifuId;
    }

    public function setUserHuifuId($userHuifuId) {
        $this->userHuifuId = $userHuifuId;
    }

    public function getVerifyNo() {
        return $this->verifyNo;
    }

    public function setVerifyNo($verifyNo) {
        $this->verifyNo = $verifyNo;
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
