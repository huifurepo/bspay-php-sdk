<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 快捷绑卡确认接口
 *
 * @author sdk-generator
 * @Description
 */
class V2QuickbuckleConfirmRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 汇付商户Id
     */
    private $huifuId;
    /**
     * 用户id
     */
    private $outCustId;
    /**
     * 订单号
     */
    private $orderId;
    /**
     * 订单日期
     */
    private $orderDate;
    /**
     * 银行卡号
     */
    private $cardId;
    /**
     * 银行卡开户姓名
     */
    private $cardName;
    /**
     * 银行卡绑定证件类型
     */
    private $certType;
    /**
     * 银行卡绑定身份证
     */
    private $certId;
    /**
     * 银行卡绑定手机号
     */
    private $cardMp;
    /**
     * 验证码
     */
    private $verifyCode;
    /**
     * CVV2信用卡代扣专用需要密文传输，使用商户RSA私钥加密(加密前3位，加密后最长2048位），[参见参考文档](https://paas.huifu.com/partners/guide/#/api_jiami_jiemi)；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：Ly+fnExeyPOTzf……rGq0l0NTebfc6XJXZss&#x3D;&lt;/font&gt;
     */
    private $vipCode;
    /**
     * 卡有效期信用卡代扣专用，格式：MMYY，需要密文传输。&lt;br/&gt;使用商户RSA私钥加密(加密前4位，加密后最长2048位），[参见参考文档](https://paas.huifu.com/partners/guide/#/api_jiami_jiemi)；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：Ly+fnExeyPO……ebfc6XJXZss&#x3D;&lt;/font&gt;
     */
    private $expiration;
    /**
     * 设备信息域 
     */
    private $trxDeviceInf;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_QUICKBUCKLE_CONFIRM;
    }


    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOutCustId() {
        return $this->outCustId;
    }

    public function setOutCustId($outCustId) {
        $this->outCustId = $outCustId;
    }

    public function getOrderId() {
        return $this->orderId;
    }

    public function setOrderId($orderId) {
        $this->orderId = $orderId;
    }

    public function getOrderDate() {
        return $this->orderDate;
    }

    public function setOrderDate($orderDate) {
        $this->orderDate = $orderDate;
    }

    public function getCardId() {
        return $this->cardId;
    }

    public function setCardId($cardId) {
        $this->cardId = $cardId;
    }

    public function getCardName() {
        return $this->cardName;
    }

    public function setCardName($cardName) {
        $this->cardName = $cardName;
    }

    public function getCertType() {
        return $this->certType;
    }

    public function setCertType($certType) {
        $this->certType = $certType;
    }

    public function getCertId() {
        return $this->certId;
    }

    public function setCertId($certId) {
        $this->certId = $certId;
    }

    public function getCardMp() {
        return $this->cardMp;
    }

    public function setCardMp($cardMp) {
        $this->cardMp = $cardMp;
    }

    public function getVerifyCode() {
        return $this->verifyCode;
    }

    public function setVerifyCode($verifyCode) {
        $this->verifyCode = $verifyCode;
    }

    public function getVipCode() {
        return $this->vipCode;
    }

    public function setVipCode($vipCode) {
        $this->vipCode = $vipCode;
    }

    public function getExpiration() {
        return $this->expiration;
    }

    public function setExpiration($expiration) {
        $this->expiration = $expiration;
    }

    public function getTrxDeviceInf() {
        return $this->trxDeviceInf;
    }

    public function setTrxDeviceInf($trxDeviceInf) {
        $this->trxDeviceInf = $trxDeviceInf;
    }

}
