<?php

namespace BsPaySdk\request\v4;

/**
 * 	银联支付参数
 *
 * @author sdk-generator
 * @Description UnionpayData
 */
class UnionpayData {
    /**
     * 扫码设备读出的条形码或者二维码信息
     */
    private $authCode;
    /**
     * 二维码
     */
    private $qrCode;
    /**
     * 收款方附加数据
     */
    private $addnData;
    /**
     * 持卡人ip
     */
    private $customerIp;
    /**
     * 前台通知地址
     */
    private $frontUrl;
    /**
     * 订单描述
     */
    private $orderDesc;
    /**
     * 收款方附言
     */
    private $payeeComments;
    /**
     * 收款方信息
     */
    private $payeeInfo;
    /**
     * 请求方自定义域
     */
    private $reqReserved;
    /**
     * 银联用户标识
     */
    private $userId;
    /**
     * 服务商信息
     */
    private $pidInfo;

    public function getAuthCode() {
        return $this->authCode;
    }

    public function setAuthCode($authCode) {
        $this->authCode = $authCode;
    }

    public function getQrCode() {
        return $this->qrCode;
    }

    public function setQrCode($qrCode) {
        $this->qrCode = $qrCode;
    }

    public function getAddnData() {
        return $this->addnData;
    }

    public function setAddnData($addnData) {
        $this->addnData = $addnData;
    }

    public function getCustomerIp() {
        return $this->customerIp;
    }

    public function setCustomerIp($customerIp) {
        $this->customerIp = $customerIp;
    }

    public function getFrontUrl() {
        return $this->frontUrl;
    }

    public function setFrontUrl($frontUrl) {
        $this->frontUrl = $frontUrl;
    }

    public function getOrderDesc() {
        return $this->orderDesc;
    }

    public function setOrderDesc($orderDesc) {
        $this->orderDesc = $orderDesc;
    }

    public function getPayeeComments() {
        return $this->payeeComments;
    }

    public function setPayeeComments($payeeComments) {
        $this->payeeComments = $payeeComments;
    }

    public function getPayeeInfo() {
        return $this->payeeInfo;
    }

    public function setPayeeInfo($payeeInfo) {
        $this->payeeInfo = $payeeInfo;
    }

    public function getReqReserved() {
        return $this->reqReserved;
    }

    public function setReqReserved($reqReserved) {
        $this->reqReserved = $reqReserved;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getPidInfo() {
        return $this->pidInfo;
    }

    public function setPidInfo($pidInfo) {
        $this->pidInfo = $pidInfo;
    }
}