<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 抖音卡券核销
 *
 * @author sdk-generator
 * @Description
 */
class V2CouponDouyinConsumeRequest extends BaseRequest
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
     * 加密抖音券码列表
     */
    private $encryptedCodes;
    /**
     * 校验标识
     */
    private $verifyToken;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_COUPON_DOUYIN_CONSUME;
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

    public function getEncryptedCodes() {
        return $this->encryptedCodes;
    }

    public function setEncryptedCodes($encryptedCodes) {
        $this->encryptedCodes = $encryptedCodes;
    }

    public function getVerifyToken() {
        return $this->verifyToken;
    }

    public function setVerifyToken($verifyToken) {
        $this->verifyToken = $verifyToken;
    }

}
