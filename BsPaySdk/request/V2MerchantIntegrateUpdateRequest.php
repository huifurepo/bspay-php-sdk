<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户统一变更接口
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantIntegrateUpdateRequest extends BaseRequest
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
     * 汇付ID
     */
    private $huifuId;
    /**
     * 渠道商汇付ID
     */
    private $upperHuifuId;
    /**
     * 业务处理类型
     */
    private $dealType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_INTEGRATE_UPDATE;
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

    public function getUpperHuifuId() {
        return $this->upperHuifuId;
    }

    public function setUpperHuifuId($upperHuifuId) {
        $this->upperHuifuId = $upperHuifuId;
    }

    public function getDealType() {
        return $this->dealType;
    }

    public function setDealType($dealType) {
        $this->dealType = $dealType;
    }

}
