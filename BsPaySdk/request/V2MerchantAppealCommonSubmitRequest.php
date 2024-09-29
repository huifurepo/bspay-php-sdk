<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 提交申诉
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantAppealCommonSubmitRequest extends BaseRequest
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
     * 商户经营模式
     */
    private $businessPattern;
    /**
     * 协查单号
     */
    private $assistId;
    /**
     * 申诉单号
     */
    private $appealId;
    /**
     * 商户类型
     */
    private $merType;
    /**
     * 申诉人姓名
     */
    private $appealPersonName;
    /**
     * 申诉人身份证号
     */
    private $appealPersonCertNo;
    /**
     * 申诉人联系电话
     */
    private $appealPersonPhoneNo;
    /**
     * 法人姓名
     */
    private $legalName;
    /**
     * 法人身份证号
     */
    private $legalCertNo;
    /**
     * 法人联系电话
     */
    private $legalPhoneNo;
    /**
     * 商户主营业务
     */
    private $mainBusiness;
    /**
     * 申诉理由
     */
    private $appealDesc;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_APPEAL_COMMON_SUBMIT;
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

    public function getBusinessPattern() {
        return $this->businessPattern;
    }

    public function setBusinessPattern($businessPattern) {
        $this->businessPattern = $businessPattern;
    }

    public function getAssistId() {
        return $this->assistId;
    }

    public function setAssistId($assistId) {
        $this->assistId = $assistId;
    }

    public function getAppealId() {
        return $this->appealId;
    }

    public function setAppealId($appealId) {
        $this->appealId = $appealId;
    }

    public function getMerType() {
        return $this->merType;
    }

    public function setMerType($merType) {
        $this->merType = $merType;
    }

    public function getAppealPersonName() {
        return $this->appealPersonName;
    }

    public function setAppealPersonName($appealPersonName) {
        $this->appealPersonName = $appealPersonName;
    }

    public function getAppealPersonCertNo() {
        return $this->appealPersonCertNo;
    }

    public function setAppealPersonCertNo($appealPersonCertNo) {
        $this->appealPersonCertNo = $appealPersonCertNo;
    }

    public function getAppealPersonPhoneNo() {
        return $this->appealPersonPhoneNo;
    }

    public function setAppealPersonPhoneNo($appealPersonPhoneNo) {
        $this->appealPersonPhoneNo = $appealPersonPhoneNo;
    }

    public function getLegalName() {
        return $this->legalName;
    }

    public function setLegalName($legalName) {
        $this->legalName = $legalName;
    }

    public function getLegalCertNo() {
        return $this->legalCertNo;
    }

    public function setLegalCertNo($legalCertNo) {
        $this->legalCertNo = $legalCertNo;
    }

    public function getLegalPhoneNo() {
        return $this->legalPhoneNo;
    }

    public function setLegalPhoneNo($legalPhoneNo) {
        $this->legalPhoneNo = $legalPhoneNo;
    }

    public function getMainBusiness() {
        return $this->mainBusiness;
    }

    public function setMainBusiness($mainBusiness) {
        $this->mainBusiness = $mainBusiness;
    }

    public function getAppealDesc() {
        return $this->appealDesc;
    }

    public function setAppealDesc($appealDesc) {
        $this->appealDesc = $appealDesc;
    }

}
