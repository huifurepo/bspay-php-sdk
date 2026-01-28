<?php

namespace BsPaySdk\request\v4;

/**
 * 支付宝外部指定买家
 *
 * @author sdk-generator
 * @Description
 */
class AlipayExtUserInfo {
    /**
     * 姓名
     */
    private $name;
    /**
     * 手机号
     */
    private $mobile;
    /**
     * 证件类型
     */
    private $certType;
    /**
     * 证件号
     */
    private $certNo;
    /**
     * 允许的最小买家年龄
     */
    private $minAge;
    /**
     * 是否强制校验付款人身份信息
     */
    private $fixBuyer;
    /**
     * 是否强制校验身份信息
     */
    private $needCheckInfo;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function setMobile($mobile) {
        $this->mobile = $mobile;
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

    public function getMinAge() {
        return $this->minAge;
    }

    public function setMinAge($minAge) {
        $this->minAge = $minAge;
    }

    public function getFixBuyer() {
        return $this->fixBuyer;
    }

    public function setFixBuyer($fixBuyer) {
        $this->fixBuyer = $fixBuyer;
    }

    public function getNeedCheckInfo() {
        return $this->needCheckInfo;
    }

    public function setNeedCheckInfo($needCheckInfo) {
        $this->needCheckInfo = $needCheckInfo;
    }
}