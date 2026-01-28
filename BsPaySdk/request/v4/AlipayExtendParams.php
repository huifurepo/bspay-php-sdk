<?php

namespace BsPaySdk\request\v4;

/**
 * 支付宝业务扩展参数
 *
 * @author sdk-generator
 * @Description
 */
class AlipayExtendParams {
    /**
     * 卡类型
     */
    private $cardType;
    /**
     * 支付宝点餐场景类型
     */
    private $foodOrderType;
    /**
     * 花呗分期数
     */
    private $hbFqNum;
    /**
     * 花呗卖家手续费百分比
     */
    private $hbFqSellerPercent;
    /**
     * 信用卡分期资产方式
     */
    private $fqChannels;
    /**
     * 行业数据回流信息
     */
    private $industryRefluxInfo;
    /**
     * 停车场id
     */
    private $parkingId;
    /**
     * 系统商编号
     */
    private $sysServiceProviderId;

    public function getCardType() {
        return $this->cardType;
    }

    public function setCardType($cardType) {
        $this->cardType = $cardType;
    }

    public function getFoodOrderType() {
        return $this->foodOrderType;
    }

    public function setFoodOrderType($foodOrderType) {
        $this->foodOrderType = $foodOrderType;
    }

    public function getHbFqNum() {
        return $this->hbFqNum;
    }

    public function setHbFqNum($hbFqNum) {
        $this->hbFqNum = $hbFqNum;
    }

    public function getHbFqSellerPercent() {
        return $this->hbFqSellerPercent;
    }

    public function setHbFqSellerPercent($hbFqSellerPercent) {
        $this->hbFqSellerPercent = $hbFqSellerPercent;
    }

    public function getFqChannels() {
        return $this->fqChannels;
    }

    public function setFqChannels($fqChannels) {
        $this->fqChannels = $fqChannels;
    }

    public function getIndustryRefluxInfo() {
        return $this->industryRefluxInfo;
    }

    public function setIndustryRefluxInfo($industryRefluxInfo) {
        $this->industryRefluxInfo = $industryRefluxInfo;
    }

    public function getParkingId() {
        return $this->parkingId;
    }

    public function setParkingId($parkingId) {
        $this->parkingId = $parkingId;
    }

    public function getSysServiceProviderId() {
        return $this->sysServiceProviderId;
    }

    public function setSysServiceProviderId($sysServiceProviderId) {
        $this->sysServiceProviderId = $sysServiceProviderId;
    }
}