<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 美团卡券校验
 *
 * @author sdk-generator
 * @Description
 */
class V2CouponMeituanPrepareRequest extends BaseRequest
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
     * 团购券码
     */
    private $couponCode;
    /**
     * 门店绑定流水号
     */
    private $bindId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_COUPON_MEITUAN_PREPARE;
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

    public function getCouponCode() {
        return $this->couponCode;
    }

    public function setCouponCode($couponCode) {
        $this->couponCode = $couponCode;
    }

    public function getBindId() {
        return $this->bindId;
    }

    public function setBindId($bindId) {
        $this->bindId = $bindId;
    }

}
