<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户状态变更
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiModifyBusistatusRequest extends BaseRequest
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
     * 状态
     */
    private $status;
    /**
     * 状态变更原因
     */
    private $updStatusReason;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_MODIFY_BUSISTATUS;
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

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getUpdStatusReason() {
        return $this->updStatusReason;
    }

    public function setUpdStatusReason($updStatusReason) {
        $this->updStatusReason = $updStatusReason;
    }

}
