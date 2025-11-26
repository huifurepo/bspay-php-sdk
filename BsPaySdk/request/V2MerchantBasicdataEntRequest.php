<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 企业商户进件
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
     * 渠道商号
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
     * 小票名称
     */
    private $receiptName;
    /**
     * 公司类型
     */
    private $entType;
    /**
     * 所属行业参考[汇付MCC编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_hfmccbm) ；当use_head_info_flag&#x3D;Y时不填&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：5311&lt;/font&gt;
     */
    private $mcc;
    /**
     * 经营类型1：实体，2：虚拟 ；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1&lt;/font&gt; ；当use_head_info_flag&#x3D;Y时不填
     */
    private $busiType;
    /**
     * 场景类型
     */
    private $sceneType;
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
     * 证照有效期截止日期格式：yyyyMMdd。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20220125&lt;/font&gt;&lt;br/&gt;  当license_validity_type&#x3D;0时必填；当license_validity_type&#x3D;1时为空；当use_head_info_flag&#x3D;Y时不填
     */
    private $licenseEndDate;
    /**
     * 成立时间
     */
    private $foundDate;
    /**
     * 注册资本保留两位小数；条件选填，国营企业、私营企业、外资企业、事业单位、其他、集体经济必填，政府机构、个体工商户可为空；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：100.00&lt;/font&gt;
     */
    private $regCapital;
    /**
     * 注册区
     */
    private $regDistrictId;
    /**
     * 注册详细地址
     */
    private $regDetail;
    /**
     * 经营区
     */
    private $districtId;
    /**
     * 经营详细地址scene_type&#x3D;OFFLINE/ALL时必填；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：上海市徐汇区XX路XX号&lt;/font&gt;
     */
    private $detailAddr;
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
     * 法人证件有效期截止日期日期格式：yyyyMMdd， &lt;font color&#x3D;&quot;green&quot;&gt;示例值：20220125&lt;/font&gt;&lt;br/&gt;当legal_cert_validity_type&#x3D;0时必填；&lt;br/&gt;当legal_cert_validity_type&#x3D;1时为空；&lt;br/&gt;当use_head_info_flag&#x3D;Y时不填
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
     * 开户许可证企业商户需要，结算账号为对公账户必填；通过[图片上传接口](https://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)上传材料；文件类型：F08；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $regAcctPic;
    /**
     * 基本存款账户编号或核准号条件选填；当use_head_info_flag&#x3D;Y时不填 ；&lt;br/&gt;基本存款账户信息请填写基本存款账户编号；开户许可证请填写核准号。&lt;br/&gt;当注册地址或经营地址为如下地区时必填：江苏省、浙江省、湖南省、湖北省、云南省、贵州省、陕西省、河南省、吉林省、黑龙江省、福建省、海南省、重庆市、青海省、宁夏回族自治区；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：J2900123456789&lt;/font&gt;
     */
    private $openLicenceNo;
    /**
     * 银行卡信息配置
     */
    private $cardInfo;
    /**
     * 银行卡卡号面**对私必填**。通过[图片上传接口](https://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)上传材料；文件类型：F13；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $settleCardFrontPic;
    /**
     * 持卡人身份证国徽面**对私必填**。通过[图片上传接口](https://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)上传材料；文件类型：F56；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $settleCertBackPic;
    /**
     * 持卡人身份证人像面**对私必填**。通过[图片上传接口](https://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)上传材料；文件类型：F55；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $settleCertFrontPic;
    /**
     * 授权委托书**对私非法人、对公非同名结算必填**；通过[图片上传接口](https://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)上传材料；文件类型：F15；开通银行电子账户（中信E管家）需提供F520；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $authEntrustPic;
    /**
     * 上级汇付Id如果head_office_flag&#x3D;0，则字段必填，如果head_office_flag&#x3D;1，上级汇付Id不可传&lt;br/&gt;如果headOfficeFlag&#x3D;0，useHeadInfoFlag&#x3D;Y,且head_huifu_id不为空则基本信息部分复用上级的基本信息。&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123123&lt;/font&gt;
     */
    private $headHuifuId;
    /**
     * 商户ICP备案编号商户ICP备案编号或网站许可证号；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：沪ICP备06046402号-28 &lt;/font&gt;&lt;br/&gt;类型为PC网站时，且为企业商户，且开通快捷或网银，或大额转账，或余额支付或分账业务（20%（不含）-100%），或为个人商户开通分账业务（10%（不含）-100%），必填
     */
    private $merIcp;
    /**
     * 店铺门头照
     */
    private $storeHeaderPic;
    /**
     * 店铺内景/工作区域照
     */
    private $storeIndoorPic;
    /**
     * 店铺收银台/公司前台照
     */
    private $storeCashierDeskPic;

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

    public function getReceiptName() {
        return $this->receiptName;
    }

    public function setReceiptName($receiptName) {
        $this->receiptName = $receiptName;
    }

    public function getEntType() {
        return $this->entType;
    }

    public function setEntType($entType) {
        $this->entType = $entType;
    }

    public function getMcc() {
        return $this->mcc;
    }

    public function setMcc($mcc) {
        $this->mcc = $mcc;
    }

    public function getBusiType() {
        return $this->busiType;
    }

    public function setBusiType($busiType) {
        $this->busiType = $busiType;
    }

    public function getSceneType() {
        return $this->sceneType;
    }

    public function setSceneType($sceneType) {
        $this->sceneType = $sceneType;
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

    public function getRegCapital() {
        return $this->regCapital;
    }

    public function setRegCapital($regCapital) {
        $this->regCapital = $regCapital;
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

    public function getRegAcctPic() {
        return $this->regAcctPic;
    }

    public function setRegAcctPic($regAcctPic) {
        $this->regAcctPic = $regAcctPic;
    }

    public function getOpenLicenceNo() {
        return $this->openLicenceNo;
    }

    public function setOpenLicenceNo($openLicenceNo) {
        $this->openLicenceNo = $openLicenceNo;
    }

    public function getCardInfo() {
        return $this->cardInfo;
    }

    public function setCardInfo($cardInfo) {
        $this->cardInfo = $cardInfo;
    }

    public function getSettleCardFrontPic() {
        return $this->settleCardFrontPic;
    }

    public function setSettleCardFrontPic($settleCardFrontPic) {
        $this->settleCardFrontPic = $settleCardFrontPic;
    }

    public function getSettleCertBackPic() {
        return $this->settleCertBackPic;
    }

    public function setSettleCertBackPic($settleCertBackPic) {
        $this->settleCertBackPic = $settleCertBackPic;
    }

    public function getSettleCertFrontPic() {
        return $this->settleCertFrontPic;
    }

    public function setSettleCertFrontPic($settleCertFrontPic) {
        $this->settleCertFrontPic = $settleCertFrontPic;
    }

    public function getAuthEntrustPic() {
        return $this->authEntrustPic;
    }

    public function setAuthEntrustPic($authEntrustPic) {
        $this->authEntrustPic = $authEntrustPic;
    }

    public function getHeadHuifuId() {
        return $this->headHuifuId;
    }

    public function setHeadHuifuId($headHuifuId) {
        $this->headHuifuId = $headHuifuId;
    }

    public function getMerIcp() {
        return $this->merIcp;
    }

    public function setMerIcp($merIcp) {
        $this->merIcp = $merIcp;
    }

    public function getStoreHeaderPic() {
        return $this->storeHeaderPic;
    }

    public function setStoreHeaderPic($storeHeaderPic) {
        $this->storeHeaderPic = $storeHeaderPic;
    }

    public function getStoreIndoorPic() {
        return $this->storeIndoorPic;
    }

    public function setStoreIndoorPic($storeIndoorPic) {
        $this->storeIndoorPic = $storeIndoorPic;
    }

    public function getStoreCashierDeskPic() {
        return $this->storeCashierDeskPic;
    }

    public function setStoreCashierDeskPic($storeCashierDeskPic) {
        $this->storeCashierDeskPic = $storeCashierDeskPic;
    }

}
