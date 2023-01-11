<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信直连-微信关注配置
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantDirectWechatSubscribeConfigRequest extends BaseRequest
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
     * 商户号
     */
    private $mchId;
    /**
     * 特约商户号
     */
    private $subMchid;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_DIRECT_WECHAT_SUBSCRIBE_CONFIG;
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

    public function getMchId() {
        return $this->mchId;
    }

    public function setMchId($mchId) {
        $this->mchId = $mchId;
    }

    public function getSubMchid() {
        return $this->subMchid;
    }

    public function setSubMchid($subMchid) {
        $this->subMchid = $subMchid;
    }

}
