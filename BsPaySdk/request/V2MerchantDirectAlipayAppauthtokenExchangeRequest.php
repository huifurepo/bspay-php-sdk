<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 支付宝直连-换取应用授权令牌
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantDirectAlipayAppauthtokenExchangeRequest extends BaseRequest
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
     * 开发者的应用ID
     */
    private $appId;
    /**
     * 操作类型
     */
    private $operType;
    /**
     * 授权码授权码，操作类型为0-换取令牌时必填，其它选填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：123&lt;/font&gt;
     */
    private $appAuthCode;
    /**
     * 应用授权令牌应用授权令牌，操作类型为1-刷新令牌时，且该字段有值，将与数据库值进行校验；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：202208200312104378&lt;/font&gt;
     */
    private $appAuthToken;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_DIRECT_ALIPAY_APPAUTHTOKEN_EXCHANGE;
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

    public function getOperType() {
        return $this->operType;
    }

    public function setOperType($operType) {
        $this->operType = $operType;
    }

    public function getAppAuthCode() {
        return $this->appAuthCode;
    }

    public function setAppAuthCode($appAuthCode) {
        $this->appAuthCode = $appAuthCode;
    }

    public function getAppAuthToken() {
        return $this->appAuthToken;
    }

    public function setAppAuthToken($appAuthToken) {
        $this->appAuthToken = $appAuthToken;
    }

}
