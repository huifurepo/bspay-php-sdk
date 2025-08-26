<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 抖音卡券撤销
 *
 * @author sdk-generator
 * @Description
 */
class V2CouponDouyinCancelRequest extends BaseRequest
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
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 门店绑定流水号
     */
    private $bindId;
    /**
     * 抖音券码
     */
    private $encryptedCode;
    /**
     * 核销标识
     */
    private $verifyId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_COUPON_DOUYIN_CANCEL;
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

    public function getBindId() {
        return $this->bindId;
    }

    public function setBindId($bindId) {
        $this->bindId = $bindId;
    }

    public function getEncryptedCode() {
        return $this->encryptedCode;
    }

    public function setEncryptedCode($encryptedCode) {
        $this->encryptedCode = $encryptedCode;
    }

    public function getVerifyId() {
        return $this->verifyId;
    }

    public function setVerifyId($verifyId) {
        $this->verifyId = $verifyId;
    }

}
