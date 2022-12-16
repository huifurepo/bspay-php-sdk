<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信实名认证
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiRealnameRequest extends BaseRequest
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
     * 联系人姓名
     */
    private $name;
    /**
     * 联系人手机号
     */
    private $mobile;
    /**
     * 联系人身份证号码
     */
    private $idCardNumber;
    /**
     * 联系人类型
     */
    private $contactType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_REALNAME;
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

    public function getMobile() {
        return $this->mobile;
    }

    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    public function getIdCardNumber() {
        return $this->idCardNumber;
    }

    public function setIdCardNumber($idCardNumber) {
        $this->idCardNumber = $idCardNumber;
    }

    public function getContactType() {
        return $this->contactType;
    }

    public function setContactType($contactType) {
        $this->contactType = $contactType;
    }

}
