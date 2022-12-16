<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信特约商户进件
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantDirectWechatSignRequest extends BaseRequest
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
     * 商户汇付Id
     */
    private $huifuId;
    /**
     * 渠道商汇付Id
     */
    private $upperHuifuId;
    /**
     * 开发者的应用ID
     */
    private $appId;
    /**
     * 商户号
     */
    private $mchId;
    /**
     * 经营者/法人是否为受益人
     */
    private $owner;
    /**
     * 超级管理员信息
     */
    private $contactInfo;
    /**
     * 经营场景类型
     */
    private $salesScenesType;
    /**
     * 经营场景
     */
    private $salesInfo;
    /**
     * 结算信息
     */
    private $settlementInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_DIRECT_WECHAT_SIGN;
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

    public function getUpperHuifuId() {
        return $this->upperHuifuId;
    }

    public function setUpperHuifuId($upperHuifuId) {
        $this->upperHuifuId = $upperHuifuId;
    }

    public function getAppId() {
        return $this->appId;
    }

    public function setAppId($appId) {
        $this->appId = $appId;
    }

    public function getMchId() {
        return $this->mchId;
    }

    public function setMchId($mchId) {
        $this->mchId = $mchId;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function setOwner($owner) {
        $this->owner = $owner;
    }

    public function getContactInfo() {
        return $this->contactInfo;
    }

    public function setContactInfo($contactInfo) {
        $this->contactInfo = $contactInfo;
    }

    public function getSalesScenesType() {
        return $this->salesScenesType;
    }

    public function setSalesScenesType($salesScenesType) {
        $this->salesScenesType = $salesScenesType;
    }

    public function getSalesInfo() {
        return $this->salesInfo;
    }

    public function setSalesInfo($salesInfo) {
        $this->salesInfo = $salesInfo;
    }

    public function getSettlementInfo() {
        return $this->settlementInfo;
    }

    public function setSettlementInfo($settlementInfo) {
        $this->settlementInfo = $settlementInfo;
    }

}
