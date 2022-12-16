<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户活动报名
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantActivityAddRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 营业执照图片
     */
    private $blPhoto;
    /**
     * 店内环境图片
     */
    private $dhPhoto;
    /**
     * 手续费类型
     */
    private $feeType;
    /**
     * 整体门面图片（门头照）
     */
    private $mmPhoto;
    /**
     * 收银台照片
     */
    private $sytPhoto;
    /**
     * 支付通道
     */
    private $payWay;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_ACTIVITY_ADD;
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

    public function getBlPhoto() {
        return $this->blPhoto;
    }

    public function setBlPhoto($blPhoto) {
        $this->blPhoto = $blPhoto;
    }

    public function getDhPhoto() {
        return $this->dhPhoto;
    }

    public function setDhPhoto($dhPhoto) {
        $this->dhPhoto = $dhPhoto;
    }

    public function getFeeType() {
        return $this->feeType;
    }

    public function setFeeType($feeType) {
        $this->feeType = $feeType;
    }

    public function getMmPhoto() {
        return $this->mmPhoto;
    }

    public function setMmPhoto($mmPhoto) {
        $this->mmPhoto = $mmPhoto;
    }

    public function getSytPhoto() {
        return $this->sytPhoto;
    }

    public function setSytPhoto($sytPhoto) {
        $this->sytPhoto = $sytPhoto;
    }

    public function getPayWay() {
        return $this->payWay;
    }

    public function setPayWay($payWay) {
        $this->payWay = $payWay;
    }

}
