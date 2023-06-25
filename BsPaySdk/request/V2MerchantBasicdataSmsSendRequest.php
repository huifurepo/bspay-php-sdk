<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户短信发送
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBasicdataSmsSendRequest extends BaseRequest
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
     * 手机号
     */
    private $phone;
    /**
     * 验证类型
     */
    private $verifyType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BASICDATA_SMS_SEND;
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

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getVerifyType() {
        return $this->verifyType;
    }

    public function setVerifyType($verifyType) {
        $this->verifyType = $verifyType;
    }

}
