<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户微信支付宝ID查询
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiMercodeQueryRequest extends BaseRequest
{

    /**
     * 汇付ID
     */
    private $huifuId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 入驻通道类型
     */
    private $payWay;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_MERCODE_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
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

    public function getPayWay() {
        return $this->payWay;
    }

    public function setPayWay($payWay) {
        $this->payWay = $payWay;
    }

}
