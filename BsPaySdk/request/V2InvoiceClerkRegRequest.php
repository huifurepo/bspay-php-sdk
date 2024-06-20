<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 开票员登记
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceClerkRegRequest extends BaseRequest
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
     * 商户汇付Id
     */
    private $huifuId;
    /**
     * 开票员登录身份
     */
    private $clerkIdentity;
    /**
     * 登录账号
     */
    private $loginAccount;
    /**
     * 登录密码
     */
    private $loginPassword;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_CLERK_REG;
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

    public function getClerkIdentity() {
        return $this->clerkIdentity;
    }

    public function setClerkIdentity($clerkIdentity) {
        $this->clerkIdentity = $clerkIdentity;
    }

    public function getLoginAccount() {
        return $this->loginAccount;
    }

    public function setLoginAccount($loginAccount) {
        $this->loginAccount = $loginAccount;
    }

    public function getLoginPassword() {
        return $this->loginPassword;
    }

    public function setLoginPassword($loginPassword) {
        $this->loginPassword = $loginPassword;
    }

}
