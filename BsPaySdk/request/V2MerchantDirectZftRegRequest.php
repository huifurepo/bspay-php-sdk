<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 直付通商户入驻
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantDirectZftRegRequest extends BaseRequest
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
     * 汇付ID
     */
    private $huifuId;
    /**
     * 开发者的应用ID
     */
    private $appId;
    /**
     * 进件的二级商户名称
     */
    private $name;
    /**
     * 商家类型
     */
    private $merchantType;
    /**
     * 商户经营类目
     */
    private $mcc;
    /**
     * 商户证件类型
     */
    private $certType;
    /**
     * 商户证件编号
     */
    private $certNo;
    /**
     * 证件名称目前只有个体工商户商户类型要求填入本字段，填写值为个体工商户营业执照上的名称。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：xxxx小卖铺&lt;/font&gt;
     */
    private $certName;
    /**
     * 法人名称仅个人商户非必填，其他必填。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：张三&lt;/font&gt;
     */
    private $legalName;
    /**
     * 法人证件号码仅个人商户非必填，其他必填。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：3209261975120284333&lt;/font&gt;
     */
    private $legalCertNo;
    /**
     * 客服电话
     */
    private $servicePhone;
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
     * 商户联系人业务标识
     */
    private $contactTag;
    /**
     * 联系人类型
     */
    private $contactType;
    /**
     * 联系人手机号
     */
    private $contactMobileNo;
    /**
     * 商户结算卡信息jsonArray格式。本业务当前只允许传入一张结算卡。与支付宝账号字段二选一必填
     */
    private $zftCardInfoList;
    /**
     * 商户支付宝账号商户支付宝账号，用作结算账号。与银行卡对象字段二选一必填。&lt;br/&gt;本字段要求支付宝账号的名称与商户名称mch_name同名，且是实名认证过的支付宝账户。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：test@huifu.com&lt;/font&gt;
     */
    private $alipayLogonId;
    /**
     * 商户行业资质类型当商户是特殊行业时必填，具体取值[参见表格](https://mif-pub.alipayobjects.com/QualificationType.xlsx)。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：310&lt;/font&gt;
     */
    private $industryQualificationType;
    /**
     * 商户使用服务
     */
    private $service;
    /**
     * 商户与服务商的签约时间
     */
    private $signTimeWithIsv;
    /**
     * 商户支付宝账户用于协议确认。目前商业场景（除医疗、中小学教育等）下必填。本字段要求上送的支付宝账号的名称与商户名称name同名，且是实名认证支付宝账户。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：test@huifu.com&lt;/font&gt;
     */
    private $bindingAlipayLogonId;
    /**
     * 默认结算类型
     */
    private $defaultSettleType;
    /**
     * 文件列表
     */
    private $fileList;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_DIRECT_ZFT_REG;
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

    public function getAppId() {
        return $this->appId;
    }

    public function setAppId($appId) {
        $this->appId = $appId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getMerchantType() {
        return $this->merchantType;
    }

    public function setMerchantType($merchantType) {
        $this->merchantType = $merchantType;
    }

    public function getMcc() {
        return $this->mcc;
    }

    public function setMcc($mcc) {
        $this->mcc = $mcc;
    }

    public function getCertType() {
        return $this->certType;
    }

    public function setCertType($certType) {
        $this->certType = $certType;
    }

    public function getCertNo() {
        return $this->certNo;
    }

    public function setCertNo($certNo) {
        $this->certNo = $certNo;
    }

    public function getCertName() {
        return $this->certName;
    }

    public function setCertName($certName) {
        $this->certName = $certName;
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

    public function getServicePhone() {
        return $this->servicePhone;
    }

    public function setServicePhone($servicePhone) {
        $this->servicePhone = $servicePhone;
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

    public function getContactTag() {
        return $this->contactTag;
    }

    public function setContactTag($contactTag) {
        $this->contactTag = $contactTag;
    }

    public function getContactType() {
        return $this->contactType;
    }

    public function setContactType($contactType) {
        $this->contactType = $contactType;
    }

    public function getContactMobileNo() {
        return $this->contactMobileNo;
    }

    public function setContactMobileNo($contactMobileNo) {
        $this->contactMobileNo = $contactMobileNo;
    }

    public function getZftCardInfoList() {
        return $this->zftCardInfoList;
    }

    public function setZftCardInfoList($zftCardInfoList) {
        $this->zftCardInfoList = $zftCardInfoList;
    }

    public function getAlipayLogonId() {
        return $this->alipayLogonId;
    }

    public function setAlipayLogonId($alipayLogonId) {
        $this->alipayLogonId = $alipayLogonId;
    }

    public function getIndustryQualificationType() {
        return $this->industryQualificationType;
    }

    public function setIndustryQualificationType($industryQualificationType) {
        $this->industryQualificationType = $industryQualificationType;
    }

    public function getService() {
        return $this->service;
    }

    public function setService($service) {
        $this->service = $service;
    }

    public function getSignTimeWithIsv() {
        return $this->signTimeWithIsv;
    }

    public function setSignTimeWithIsv($signTimeWithIsv) {
        $this->signTimeWithIsv = $signTimeWithIsv;
    }

    public function getBindingAlipayLogonId() {
        return $this->bindingAlipayLogonId;
    }

    public function setBindingAlipayLogonId($bindingAlipayLogonId) {
        $this->bindingAlipayLogonId = $bindingAlipayLogonId;
    }

    public function getDefaultSettleType() {
        return $this->defaultSettleType;
    }

    public function setDefaultSettleType($defaultSettleType) {
        $this->defaultSettleType = $defaultSettleType;
    }

    public function getFileList() {
        return $this->fileList;
    }

    public function setFileList($fileList) {
        $this->fileList = $fileList;
    }

}
