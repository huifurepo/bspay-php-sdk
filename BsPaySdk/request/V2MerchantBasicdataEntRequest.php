<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 企业商户基本信息入驻(2022)
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBasicdataEntRequest extends BaseRequest
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
     * 上级主体ID
     */
    private $upperHuifuId;
    /**
     * 商户名称
     */
    private $regName;
    /**
     * 商户简称
     */
    private $shortName;
    /**
     * 公司类型
     */
    private $entType;
    /**
     * 营业执照编号
     */
    private $licenseCode;
    /**
     * 营业执照有效期类型
     */
    private $licenseValidityType;
    /**
     * 营业执照有效期开始日期
     */
    private $licenseBeginDate;
    /**
     * 营业执照有效期截止日期日期格式：yyyyMMdd，以北京时间为准。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20220125&lt;/font&gt;&lt;br/&gt;  当license_validity_type&#x3D;0时必填  ;当license_validity_type&#x3D;1时为空；当使用总部资质时不填
     */
    private $licenseEndDate;
    /**
     * 注册省
     */
    private $regProvId;
    /**
     * 注册市
     */
    private $regAreaId;
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
     * 法人证件有效期截止日期日期格式：yyyyMMdd，以北京时间为准。  &lt;font color&#x3D;&quot;green&quot;&gt;示例值：20220125&lt;/font&gt;&lt;br/&gt;当legal_cert_validity_type&#x3D;0时必填 ；当legal_cert_validity_type&#x3D;1时为空 ；当使用总部资质时不填
     */
    private $legalCertEndDate;
    /**
     * 经营省
     */
    private $provId;
    /**
     * 经营市
     */
    private $areaId;
    /**
     * 经营区
     */
    private $districtId;
    /**
     * 经营详细地址
     */
    private $detailAddr;
    /**
     * 联系人姓名
     */
    private $contactName;
    /**
     * 联系人手机号
     */
    private $contactMobileNo;
    /**
     * 联系人电子邮箱
     */
    private $contactEmail;
    /**
     * 客服电话
     */
    private $servicePhone;
    /**
     * 经营类型
     */
    private $busiType;
    /**
     * 小票名称
     */
    private $receiptName;
    /**
     * 所属行业
     */
    private $mcc;
    /**
     * 结算卡信息配置
     */
    private $cardInfo;
    /**
     * 基本存款账户编号或核准号基本存款账户信息请填写基本存款账户编号；开户许可证请填写核准号 ；&lt;br/&gt;当注册地址或经营地址为如下地区时必填：浙江,海南,重庆,河南,江苏,宁波市,黑龙江,吉林,湖南,贵州,陕西,湖北 &lt;br/&gt;当使用总部资质时不填 ；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：J2900123456789&lt;/font&gt;
     */
    private $openLicenceNo;
    /**
     * 总部汇付Id如果headOfficeFlag&#x3D;0，useHeadInfoFlag&#x3D;Y,且head_huifu_id不为空则基本信息部分复用总部的基本信息。&lt;br/&gt;如果head_office_flag&#x3D;0，则字段必填,如果head_office_flag&#x3D;1，总部汇付Id不可传&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123123&lt;/font&gt;
     */
    private $headHuifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BASICDATA_ENT;
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

    public function getEntType() {
        return $this->entType;
    }

    public function setEntType($entType) {
        $this->entType = $entType;
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

    public function getRegProvId() {
        return $this->regProvId;
    }

    public function setRegProvId($regProvId) {
        $this->regProvId = $regProvId;
    }

    public function getRegAreaId() {
        return $this->regAreaId;
    }

    public function setRegAreaId($regAreaId) {
        $this->regAreaId = $regAreaId;
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

    public function getProvId() {
        return $this->provId;
    }

    public function setProvId($provId) {
        $this->provId = $provId;
    }

    public function getAreaId() {
        return $this->areaId;
    }

    public function setAreaId($areaId) {
        $this->areaId = $areaId;
    }

    public function getDistrictId() {
        return $this->districtId;
    }

    public function setDistrictId($districtId) {
        $this->districtId = $districtId;
    }

    public function getDetailAddr() {
        return $this->detailAddr;
    }

    public function setDetailAddr($detailAddr) {
        $this->detailAddr = $detailAddr;
    }

    public function getContactName() {
        return $this->contactName;
    }

    public function setContactName($contactName) {
        $this->contactName = $contactName;
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

    public function getServicePhone() {
        return $this->servicePhone;
    }

    public function setServicePhone($servicePhone) {
        $this->servicePhone = $servicePhone;
    }

    public function getBusiType() {
        return $this->busiType;
    }

    public function setBusiType($busiType) {
        $this->busiType = $busiType;
    }

    public function getReceiptName() {
        return $this->receiptName;
    }

    public function setReceiptName($receiptName) {
        $this->receiptName = $receiptName;
    }

    public function getMcc() {
        return $this->mcc;
    }

    public function setMcc($mcc) {
        $this->mcc = $mcc;
    }

    public function getCardInfo() {
        return $this->cardInfo;
    }

    public function setCardInfo($cardInfo) {
        $this->cardInfo = $cardInfo;
    }

    public function getOpenLicenceNo() {
        return $this->openLicenceNo;
    }

    public function setOpenLicenceNo($openLicenceNo) {
        $this->openLicenceNo = $openLicenceNo;
    }

    public function getHeadHuifuId() {
        return $this->headHuifuId;
    }

    public function setHeadHuifuId($headHuifuId) {
        $this->headHuifuId = $headHuifuId;
    }

}
