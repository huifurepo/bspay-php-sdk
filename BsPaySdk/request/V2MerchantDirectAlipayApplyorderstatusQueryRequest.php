<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 支付宝直连-查询申请状态
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantDirectAlipayApplyorderstatusQueryRequest extends BaseRequest
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
     * 商户汇付Id
     */
    private $huifuId;
    /**
     * 开发者的应用ID
     */
    private $appId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_DIRECT_ALIPAY_APPLYORDERSTATUS_QUERY;
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

    public function getAppId() {
        return $this->appId;
    }

    public function setAppId($appId) {
        $this->appId = $appId;
    }

}
