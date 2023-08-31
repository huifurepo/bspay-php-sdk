<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信商户配置
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiConfigRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 业务开通类型
     */
    private $feeType;
    /**
     * 公众号支付Appid条件必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx3767c5bd01df5061&lt;/font&gt; ；wx_woa_app_id 、wx_woa_path和 wx_applet_app_id三者不能同时为空
     */
    private $wxWoaAppId;
    /**
     * 微信公众号授权目录条件必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：https://paas.huifu.com/shouyintai/demo/h5/&lt;/font&gt;；wx_woa_app_id 、wx_woa_path和 wx_applet_app_id三者不能同时为空
     */
    private $wxWoaPath;
    /**
     * 微信小程序APPID条件必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx8523175fea790f10&lt;/font&gt; ；wx_woa_app_id 、wx_woa_path和 wx_applet_app_id三者不能同时为空
     */
    private $wxAppletAppId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_CONFIG;
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

    public function getFeeType() {
        return $this->feeType;
    }

    public function setFeeType($feeType) {
        $this->feeType = $feeType;
    }

    public function getWxWoaAppId() {
        return $this->wxWoaAppId;
    }

    public function setWxWoaAppId($wxWoaAppId) {
        $this->wxWoaAppId = $wxWoaAppId;
    }

    public function getWxWoaPath() {
        return $this->wxWoaPath;
    }

    public function setWxWoaPath($wxWoaPath) {
        $this->wxWoaPath = $wxWoaPath;
    }

    public function getWxAppletAppId() {
        return $this->wxAppletAppId;
    }

    public function setWxAppletAppId($wxAppletAppId) {
        $this->wxAppletAppId = $wxAppletAppId;
    }

}
