<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 开通下级商户权限配置接口
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiHeadConfigRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 产品编号
     */
    private $productId;
    /**
     * 直属渠道号
     */
    private $upperHuifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_HEAD_CONFIG;
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

    public function getUpperHuifuId() {
        return $this->upperHuifuId;
    }

    public function setUpperHuifuId($upperHuifuId) {
        $this->upperHuifuId = $upperHuifuId;
    }

}
