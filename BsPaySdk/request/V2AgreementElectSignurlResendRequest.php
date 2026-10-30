<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 电子协议签署链接重发
 *
 * @author sdk-generator
 * @Description
 */
class V2AgreementElectSignurlResendRequest extends BaseRequest
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
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 协议编号
     */
    private $agreementId;
    /**
     * 个人邮箱
     */
    private $signUserEmail;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_AGREEMENT_ELECT_SIGNURL_RESEND;
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

    public function getAgreementId() {
        return $this->agreementId;
    }

    public function setAgreementId($agreementId) {
        $this->agreementId = $agreementId;
    }

    public function getSignUserEmail() {
        return $this->signUserEmail;
    }

    public function setSignUserEmail($signUserEmail) {
        $this->signUserEmail = $signUserEmail;
    }

}
