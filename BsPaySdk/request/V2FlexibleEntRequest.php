<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 灵工企业商户进件接口
 *
 * @author sdk-generator
 * @Description
 */
class V2FlexibleEntRequest extends BaseRequest
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
     * 渠道商号
     */
    private $upperHuifuId;
    /**
     * 商户角色
     */
    private $merRole;
    /**
     * 落地公司类型当选择落地公司时，必填;SELF-自有，COOPERATE-合作
     */
    private $localCompanyType;
    /**
     * 商户名称
     */
    private $regName;
    /**
     * 商户简称
     */
    private $shortName;
    /**
     * 证照图片
     */
    private $licensePic;
    /**
     * 证照编号
     */
    private $licenseCode;
    /**
     * 证照有效期类型
     */
    private $licenseValidityType;
    /**
     * 证照有效期开始日期
     */
    private $licenseBeginDate;
    /**
     * 证照有效期截止日期格式：yyyyMMdd。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20220125&lt;/font&gt;&lt;br/&gt;  当license_validity_type&#x3D;0时必填；当license_validity_type&#x3D;1时为空；
     */
    private $licenseEndDate;
    /**
     * 成立时间
     */
    private $foundDate;
    /**
     * 注册区
     */
    private $regDistrictId;
    /**
     * 注册详细地址
     */
    private $regDetail;
    /**
     * 法人姓名
     */
    private $legalName;
    /**
     * 法人证件类型
     */
    private $legalCertType;
    /**
     * 法人证件号码
     */
    private $legalCertNo;
    /**
     * 法人证件有效期类型
     */
    private $legalCertValidityType;
    /**
     * 法人证件有效期开始日期
     */
    private $legalCertBeginDate;
    /**
     * 法人证件有效期截止日期日期格式：yyyyMMdd， &lt;font color&#x3D;&quot;green&quot;&gt;示例值：20220125&lt;/font&gt;&lt;br/&gt;当legal_cert_validity_type&#x3D;0时必填；&lt;br/&gt;当legal_cert_validity_type&#x3D;1时为空；&lt;br/&gt;
     */
    private $legalCertEndDate;
    /**
     * 法人证件地址
     */
    private $legalAddr;
    /**
     * 法人身份证国徽面
     */
    private $legalCertBackPic;
    /**
     * 法人身份证人像面
     */
    private $legalCertFrontPic;
    /**
     * 店铺门头照
     */
    private $storeHeaderPic;
    /**
     * 联系人手机号
     */
    private $contactMobileNo;
    /**
     * 联系人电子邮箱
     */
    private $contactEmail;
    /**
     * 管理员账号
     */
    private $loginName;
    /**
     * 银行卡信息配置
     */
    private $cardInfo;
    /**
     * 签约人jsonObject格式；协议类型&#x3D;电子合同时，必填；
     */
    private $signUserInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_FLEXIBLE_ENT;
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

    public function getUpperHuifuId() {
        return $this->upperHuifuId;
    }

    public function setUpperHuifuId($upperHuifuId) {
        $this->upperHuifuId = $upperHuifuId;
    }

    public function getMerRole() {
        return $this->merRole;
    }

    public function setMerRole($merRole) {
        $this->merRole = $merRole;
    }

    public function getLocalCompanyType() {
        return $this->localCompanyType;
    }

    public function setLocalCompanyType($localCompanyType) {
        $this->localCompanyType = $localCompanyType;
    }

    public function getRegName() {
        return $this->regName;
    }

    public function setRegName($regName) {
        $this->regName = $regName;
    }

    public function getShortName() {
        return $this->shortName;
    }

    public function setShortName($shortName) {
        $this->shortName = $shortName;
    }

    public function getLicensePic() {
        return $this->licensePic;
    }

    public function setLicensePic($licensePic) {
        $this->licensePic = $licensePic;
    }

    public function getLicenseCode() {
        return $this->licenseCode;
    }

    public function setLicenseCode($licenseCode) {
        $this->licenseCode = $licenseCode;
    }

    public function getLicenseValidityType() {
        return $this->licenseValidityType;
    }

    public function setLicenseValidityType($licenseValidityType) {
        $this->licenseValidityType = $licenseValidityType;
    }

    public function getLicenseBeginDate() {
        return $this->licenseBeginDate;
    }

    public function setLicenseBeginDate($licenseBeginDate) {
        $this->licenseBeginDate = $licenseBeginDate;
    }

    public function getLicenseEndDate() {
        return $this->licenseEndDate;
    }

    public function setLicenseEndDate($licenseEndDate) {
        $this->licenseEndDate = $licenseEndDate;
    }

    public function getFoundDate() {
        return $this->foundDate;
    }

    public function setFoundDate($foundDate) {
        $this->foundDate = $foundDate;
    }

    public function getRegDistrictId() {
        return $this->regDistrictId;
    }

    public function setRegDistrictId($regDistrictId) {
        $this->regDistrictId = $regDistrictId;
    }

    public function getRegDetail() {
        return $this->regDetail;
    }

    public function setRegDetail($regDetail) {
        $this->regDetail = $regDetail;
    }

    public function getLegalName() {
        return $this->legalName;
    }

    public function setLegalName($legalName) {
        $this->legalName = $legalName;
    }

    public function getLegalCertType() {
        return $this->legalCertType;
    }

    public function setLegalCertType($legalCertType) {
        $this->legalCertType = $legalCertType;
    }

    public function getLegalCertNo() {
        return $this->legalCertNo;
    }

    public function setLegalCertNo($legalCertNo) {
        $this->legalCertNo = $legalCertNo;
    }

    public function getLegalCertValidityType() {
        return $this->legalCertValidityType;
    }

    public function setLegalCertValidityType($legalCertValidityType) {
        $this->legalCertValidityType = $legalCertValidityType;
    }

    public function getLegalCertBeginDate() {
        return $this->legalCertBeginDate;
    }

    public function setLegalCertBeginDate($legalCertBeginDate) {
        $this->legalCertBeginDate = $legalCertBeginDate;
    }

    public function getLegalCertEndDate() {
        return $this->legalCertEndDate;
    }

    public function setLegalCertEndDate($legalCertEndDate) {
        $this->legalCertEndDate = $legalCertEndDate;
    }

    public function getLegalAddr() {
        return $this->legalAddr;
    }

    public function setLegalAddr($legalAddr) {
        $this->legalAddr = $legalAddr;
    }

    public function getLegalCertBackPic() {
        return $this->legalCertBackPic;
    }

    public function setLegalCertBackPic($legalCertBackPic) {
        $this->legalCertBackPic = $legalCertBackPic;
    }

    public function getLegalCertFrontPic() {
        return $this->legalCertFrontPic;
    }

    public function setLegalCertFrontPic($legalCertFrontPic) {
        $this->legalCertFrontPic = $legalCertFrontPic;
    }

    public function getStoreHeaderPic() {
        return $this->storeHeaderPic;
    }

    public function setStoreHeaderPic($storeHeaderPic) {
        $this->storeHeaderPic = $storeHeaderPic;
    }

    public function getContactMobileNo() {
        return $this->contactMobileNo;
    }

    public function setContactMobileNo($contactMobileNo) {
        $this->contactMobileNo = $contactMobileNo;
    }

    public function getContactEmail() {
        return $this->contactEmail;
    }

    public function setContactEmail($contactEmail) {
        $this->contactEmail = $contactEmail;
    }

    public function getLoginName() {
        return $this->loginName;
    }

    public function setLoginName($loginName) {
        $this->loginName = $loginName;
    }

    public function getCardInfo() {
        return $this->cardInfo;
    }

    public function setCardInfo($cardInfo) {
        $this->cardInfo = $cardInfo;
    }

    public function getSignUserInfo() {
        return $this->signUserInfo;
    }

    public function setSignUserInfo($signUserInfo) {
        $this->signUserInfo = $signUserInfo;
    }

}
