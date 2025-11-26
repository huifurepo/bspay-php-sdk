<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 个人商户进件
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBasicdataIndvRequest extends BaseRequest
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
     * 直属渠道号
     */
    private $upperHuifuId;
    /**
     * 商户名
     */
    private $regName;
    /**
     * 所属行业
     */
    private $mcc;
    /**
     * 场景类型
     */
    private $sceneType;
    /**
     * 经营区
     */
    private $districtId;
    /**
     * 经营详细地址scene_type字段含有线下场景时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：上海市徐汇区XX路XX号&lt;/font&gt;
     */
    private $detailAddr;
    /**
     * 负责人证件号码
     */
    private $legalCertNo;
    /**
     * 负责人证件有效期开始日期
     */
    private $legalCertBeginDate;
    /**
     * 负责人证件有效期截止日期
     */
    private $legalCertEndDate;
    /**
     * 负责人身份证地址
     */
    private $legalAddr;
    /**
     * 负责人身份证国徽面
     */
    private $legalCertBackPic;
    /**
     * 负责人身份证人像面
     */
    private $legalCertFrontPic;
    /**
     * 负责人手机号
     */
    private $contactMobileNo;
    /**
     * 负责人电子邮箱
     */
    private $contactEmail;
    /**
     * 结算卡信息配置
     */
    private $cardInfo;
    /**
     * 银行卡卡号面
     */
    private $settleCardFrontPic;
    /**
     * 商户ICP备案编号商户ICP备案编号或网站许可证号；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：沪ICP备06046402号-28 &lt;/font&gt;&lt;br/&gt;类型为PC网站时，且为企业商户，且开通快捷或网银，或大额转账，或余额支付或分账业务（20%（不含）-100%），或为个人商户开通分账业务（10%（不含）-100%），必填
     */
    private $merIcp;
    /**
     * 店铺门头照文件类型：F22；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;&lt;br/&gt;微信/支付宝实名认证个人商户，门头照也使用此字段； &lt;br/&gt;门店场所：提交门店门口照片，要求招牌清晰可见; &lt;br/&gt;小微商户流动经营/便民服务：提交经营/服务现场照片
     */
    private $storeHeaderPic;
    /**
     * 店铺内景/工作区域照文件类型：F24；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;&lt;br/&gt;微信/支付宝实名认证个人商户，内景照也使用此字段； &lt;br/&gt;门店场所：提交店内环境照片 &lt;br/&gt;小微商户流动经营/便民服务：可提交另一张经营/服务现场照片
     */
    private $storeIndoorPic;
    /**
     * 店铺收银台/公司前台照商户线下场景需要提供；文件类型：F105；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $storeCashierDeskPic;
    /**
     * 上级商户汇付ID如果head_office_flag&#x3D;0，则字段必填&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123123&lt;/font&gt;
     */
    private $headHuifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BASICDATA_INDV;
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

    public function getMcc() {
        return $this->mcc;
    }

    public function setMcc($mcc) {
        $this->mcc = $mcc;
    }

    public function getSceneType() {
        return $this->sceneType;
    }

    public function setSceneType($sceneType) {
        $this->sceneType = $sceneType;
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

    public function getLegalCertNo() {
        return $this->legalCertNo;
    }

    public function setLegalCertNo($legalCertNo) {
        $this->legalCertNo = $legalCertNo;
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

    public function getHeadHuifuId() {
        return $this->headHuifuId;
    }

    public function setHeadHuifuId($headHuifuId) {
        $this->headHuifuId = $headHuifuId;
    }

}
