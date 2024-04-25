<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 一键绑卡-工行卡号查询
 *
 * @author sdk-generator
 * @Description
 */
class V2QuickbuckleBindCardinfoQueryRequest extends BaseRequest
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
     * 产品Id
     */
    private $productId;
    /**
     * 银行卡开户姓名
     */
    private $cardName;
    /**
     * 身份证类型
     */
    private $certType;
    /**
     * 银行卡绑定身份证
     */
    private $certNo;
    /**
     * 银行卡绑定手机号
     */
    private $cardMobile;
    /**
     * 回调地址
     */
    private $notifyUrl;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_QUICKBUCKLE_BIND_CARDINFO_QUERY;
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

    public function getProductId() {
        return $this->productId;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
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

    public function getCertNo() {
        return $this->certNo;
    }

    public function setCertNo($certNo) {
        $this->certNo = $certNo;
    }

    public function getCardMobile() {
        return $this->cardMobile;
    }

    public function setCardMobile($cardMobile) {
        $this->cardMobile = $cardMobile;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

}
