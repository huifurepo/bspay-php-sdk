<?php

namespace BsPaySdk\request\v4;

/**
 * 设备信息
 *
 * @author sdk-generator
 * @Description
 */
class TerminalDeviceData {
    /**
     * 交易设备IP
     */
    private $deviceIp;
    /**
     * 交易设备MAC
     */
    private $deviceMac;
    /**
     * 交易设备IMEI
     */
    private $deviceImei;
    /**
     * 交易设备IMSI
     */
    private $deviceImsi;
    /**
     * 交易设备ICCID
     */
    private $deviceIccId;
    /**
     * 交易设备WIFIMAC
     */
    private $deviceWifiMac;
    /**
     * 交易设备GPS
     */
    private $deviceGps;
    /**
     * 商户终端应用程序版本
     */
    private $appVersion;
    /**
     * 加密随机因子
     */
    private $encryptRandNum;
    /**
     * SIM卡卡号
     */
    private $iccId;
    /**
     * 商户终端实时经纬度信息
     */
    private $location;
    /**
     * 商户交易设备IP
     */
    private $merDeviceIp;
    /**
     * 商户设备类型
     */
    private $merDeviceType;
    /**
     * 移动国家代码
     */
    private $mobileCountryCd;
    /**
     * 移动网络号码
     */
    private $mobileNetNum;
    /**
     * 商户终端入网认证编号
     */
    private $networkLicense;
    /**
     * 密文数据
     */
    private $secretText;
    /**
     * 商户终端序列号
     */
    private $serialNum;
    /**
     * 汇付机具号
     */
    private $devsId;

    public function getDeviceIp() {
        return $this->deviceIp;
    }

    public function setDeviceIp($deviceIp) {
        $this->deviceIp = $deviceIp;
    }

    public function getDeviceMac() {
        return $this->deviceMac;
    }

    public function setDeviceMac($deviceMac) {
        $this->deviceMac = $deviceMac;
    }

    public function getDeviceImei() {
        return $this->deviceImei;
    }

    public function setDeviceImei($deviceImei) {
        $this->deviceImei = $deviceImei;
    }

    public function getDeviceImsi() {
        return $this->deviceImsi;
    }

    public function setDeviceImsi($deviceImsi) {
        $this->deviceImsi = $deviceImsi;
    }

    public function getDeviceIccId() {
        return $this->deviceIccId;
    }

    public function setDeviceIccId($deviceIccId) {
        $this->deviceIccId = $deviceIccId;
    }

    public function getDeviceWifiMac() {
        return $this->deviceWifiMac;
    }

    public function setDeviceWifiMac($deviceWifiMac) {
        $this->deviceWifiMac = $deviceWifiMac;
    }

    public function getDeviceGps() {
        return $this->deviceGps;
    }

    public function setDeviceGps($deviceGps) {
        $this->deviceGps = $deviceGps;
    }

    public function getAppVersion() {
        return $this->appVersion;
    }

    public function setAppVersion($appVersion) {
        $this->appVersion = $appVersion;
    }

    public function getEncryptRandNum() {
        return $this->encryptRandNum;
    }

    public function setEncryptRandNum($encryptRandNum) {
        $this->encryptRandNum = $encryptRandNum;
    }

    public function getIccId() {
        return $this->iccId;
    }

    public function setIccId($iccId) {
        $this->iccId = $iccId;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function getMerDeviceIp() {
        return $this->merDeviceIp;
    }

    public function setMerDeviceIp($merDeviceIp) {
        $this->merDeviceIp = $merDeviceIp;
    }

    public function getMerDeviceType() {
        return $this->merDeviceType;
    }

    public function setMerDeviceType($merDeviceType) {
        $this->merDeviceType = $merDeviceType;
    }

    public function getMobileCountryCd() {
        return $this->mobileCountryCd;
    }

    public function setMobileCountryCd($mobileCountryCd) {
        $this->mobileCountryCd = $mobileCountryCd;
    }

    public function getMobileNetNum() {
        return $this->mobileNetNum;
    }

    public function setMobileNetNum($mobileNetNum) {
        $this->mobileNetNum = $mobileNetNum;
    }

    public function getNetworkLicense() {
        return $this->networkLicense;
    }

    public function setNetworkLicense($networkLicense) {
        $this->networkLicense = $networkLicense;
    }

    public function getSecretText() {
        return $this->secretText;
    }

    public function setSecretText($secretText) {
        $this->secretText = $secretText;
    }

    public function getSerialNum() {
        return $this->serialNum;
    }

    public function setSerialNum($serialNum) {
        $this->serialNum = $serialNum;
    }

    public function getDevsId() {
        return $this->devsId;
    }

    public function setDevsId($devsId) {
        $this->devsId = $devsId;
    }
}