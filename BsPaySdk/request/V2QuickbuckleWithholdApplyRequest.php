<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 代扣绑卡申请
 *
 * @author sdk-generator
 * @Description
 */
class V2QuickbuckleWithholdApplyRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求时间
     */
    private $reqDate;
    /**
     * 汇付Id
     */
    private $huifuId;
    /**
     * 返回地址
     */
    private $returnUrl;
    /**
     * 用户id
     */
    private $outCustId;
    /**
     * 绑卡订单号
     */
    private $orderId;
    /**
     * 绑卡订单日期
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
     * 个人证件有效期类型
     */
    private $certValidityType;
    /**
     * 个人证件有效期起始日
     */
    private $certBeginDate;
    /**
     * 卡的借贷类型
     */
    private $dcType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_QUICKBUCKLE_WITHHOLD_APPLY;
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

    public function getReturnUrl() {
        return $this->returnUrl;
    }

    public function setReturnUrl($returnUrl) {
        $this->returnUrl = $returnUrl;
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

    public function getCertValidityType() {
        return $this->certValidityType;
    }

    public function setCertValidityType($certValidityType) {
        $this->certValidityType = $certValidityType;
    }

    public function getCertBeginDate() {
        return $this->certBeginDate;
    }

    public function setCertBeginDate($certBeginDate) {
        $this->certBeginDate = $certBeginDate;
    }

    public function getDcType() {
        return $this->dcType;
    }

    public function setDcType($dcType) {
        $this->dcType = $dcType;
    }

}
