<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户统一进件接口(2022)
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantIntegrateRegRequest extends BaseRequest
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
     * 渠道商汇付id
     */
    private $upperHuifuId;
    /**
     * 公司类型
     */
    private $entType;
    /**
     * 商户名称
     */
    private $regName;
    /**
     * 经营类型
     */
    private $busiType;
    /**
     * 经营详细地址
     */
    private $detailAddr;
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
     * 联系人信息
     */
    private $contactInfo;
    /**
     * 卡信息配置实体
     */
    private $cardInfo;
    /**
     * 取现配置列表jsonArray格式 ；
     */
    private $cashConfig;
    /**
     * 结算配置jsonObject格式；
     */
    private $settleConfig;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_INTEGRATE_REG;
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

    public function getEntType() {
        return $this->entType;
    }

    public function setEntType($entType) {
        $this->entType = $entType;
    }

    public function getRegName() {
        return $this->regName;
    }

    public function setRegName($regName) {
        $this->regName = $regName;
    }

    public function getBusiType() {
        return $this->busiType;
    }

    public function setBusiType($busiType) {
        $this->busiType = $busiType;
    }

    public function getDetailAddr() {
        return $this->detailAddr;
    }

    public function setDetailAddr($detailAddr) {
        $this->detailAddr = $detailAddr;
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

    public function getContactInfo() {
        return $this->contactInfo;
    }

    public function setContactInfo($contactInfo) {
        $this->contactInfo = $contactInfo;
    }

    public function getCardInfo() {
        return $this->cardInfo;
    }

    public function setCardInfo($cardInfo) {
        $this->cardInfo = $cardInfo;
    }

    public function getCashConfig() {
        return $this->cashConfig;
    }

    public function setCashConfig($cashConfig) {
        $this->cashConfig = $cashConfig;
    }

    public function getSettleConfig() {
        return $this->settleConfig;
    }

    public function setSettleConfig($settleConfig) {
        $this->settleConfig = $settleConfig;
    }

}
