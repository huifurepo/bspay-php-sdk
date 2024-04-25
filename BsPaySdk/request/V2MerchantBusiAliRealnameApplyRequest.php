<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 支付宝实名申请提交
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiAliRealnameApplyRequest extends BaseRequest
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
     * 主体信息
     */
    private $authIdentityInfo;
    /**
     * 联系人信息
     */
    private $contactPersonInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_ALI_REALNAME_APPLY;
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

    public function getAuthIdentityInfo() {
        return $this->authIdentityInfo;
    }

    public function setAuthIdentityInfo($authIdentityInfo) {
        $this->authIdentityInfo = $authIdentityInfo;
    }

    public function getContactPersonInfo() {
        return $this->contactPersonInfo;
    }

    public function setContactPersonInfo($contactPersonInfo) {
        $this->contactPersonInfo = $contactPersonInfo;
    }

}
