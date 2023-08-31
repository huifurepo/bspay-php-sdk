<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 个人商户基本信息入驻(2022)
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
     * 上级主体ID
     */
    private $upperHuifuId;
    /**
     * 商户名
     */
    private $regName;
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
     * 结算卡信息配置
     */
    private $cardInfo;

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

    public function getCardInfo() {
        return $this->cardInfo;
    }

    public function setCardInfo($cardInfo) {
        $this->cardInfo = $cardInfo;
    }

}
