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
     * 手机号verify_type&#x3D;&#39;elecAcctSign&#39;时，手机号为空，系统自动取联系人手机号; &lt;font color&#x3D;&quot;green&quot;&gt;示例值：13911111111&lt;/font&gt;
     */
    private $phone;
    /**
     * 验证类型
     */
    private $verifyType;
    /**
     * 操作类型verify_type&#x3D;&#39;elecAcctSign&#39;时必填；枚举值：sendSmsCode-发送验证码；identitySmsCode-验证码核实；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：sendSmsCode&lt;/font&gt;
     */
    private $operationType;
    /**
     * 验证码verify_type&#x3D;&#39;elecAcctSign&#39;且operation_type&#x3D;&#39;identitySmsCode&#39;时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：123456&lt;/font&gt;
     */
    private $verifyCode;
    /**
     * 中信签约流水号verify_type&#x3D;&#39;elecAcctSign&#39;且operation_type&#x3D;&#39;identitySmsCode&#39;时必填；值为中信E管家签约发送短信时返回值；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：EMSSBPG2504284593690058431260676&lt;/font&gt;
     */
    private $elecAcctSignSeqId;

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

    public function getOperationType() {
        return $this->operationType;
    }

    public function setOperationType($operationType) {
        $this->operationType = $operationType;
    }

    public function getVerifyCode() {
        return $this->verifyCode;
    }

    public function setVerifyCode($verifyCode) {
        $this->verifyCode = $verifyCode;
    }

    public function getElecAcctSignSeqId() {
        return $this->elecAcctSignSeqId;
    }

    public function setElecAcctSignSeqId($elecAcctSignSeqId) {
        $this->elecAcctSignSeqId = $elecAcctSignSeqId;
    }

}
