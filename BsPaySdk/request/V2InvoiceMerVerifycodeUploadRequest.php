<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 上传短信验证码
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceMerVerifycodeUploadRequest extends BaseRequest
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
     * 校验类型
     */
    private $verifyType;
    /**
     * 流水号
     */
    private $serialNum;
    /**
     * 验证码
     */
    private $verifyCode;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_MER_VERIFYCODE_UPLOAD;
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

    public function getVerifyType() {
        return $this->verifyType;
    }

    public function setVerifyType($verifyType) {
        $this->verifyType = $verifyType;
    }

    public function getSerialNum() {
        return $this->serialNum;
    }

    public function setSerialNum($serialNum) {
        $this->serialNum = $serialNum;
    }

    public function getVerifyCode() {
        return $this->verifyCode;
    }

    public function setVerifyCode($verifyCode) {
        $this->verifyCode = $verifyCode;
    }

}
