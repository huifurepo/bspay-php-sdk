<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户活动报名
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantActivityAddRequest extends BaseRequest
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
     * 营业执照图片调用[图片上传接口](http://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)获取jfile文件id；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;&lt;br/&gt;活动类型为支付宝谷雨活动时无需填写任何资料
     */
    private $blPhoto;
    /**
     * 店内环境图片参加教育食堂、校园团餐、非盈利、停车缴费行业时必传；调用[图片上传接口](http://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)获取jfile文件id；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;&lt;br/&gt;活动类型为支付宝谷雨活动时无需填写任何资料
     */
    private $dhPhoto;
    /**
     * 手续费类型
     */
    private $feeType;
    /**
     * 整体门面图片（门头照）参加教育食堂行业、校园团餐、非盈利、线下教培、公办医院、商业医疗时必传；调用[图片上传接口](http://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)获取jfile文件id；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;&lt;br/&gt;活动类型为支付宝谷雨活动时无需填写任何资料
     */
    private $mmPhoto;
    /**
     * 收银台照片参加教育食堂行业、线下教培、公办医院时必传；调用[图片上传接口](http://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)获取jfile文件id；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;&lt;br/&gt;活动类型为支付宝谷雨活动时无需填写任何资料
     */
    private $sytPhoto;
    /**
     * 支付通道
     */
    private $payWay;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_ACTIVITY_ADD;
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

    public function getBlPhoto() {
        return $this->blPhoto;
    }

    public function setBlPhoto($blPhoto) {
        $this->blPhoto = $blPhoto;
    }

    public function getDhPhoto() {
        return $this->dhPhoto;
    }

    public function setDhPhoto($dhPhoto) {
        $this->dhPhoto = $dhPhoto;
    }

    public function getFeeType() {
        return $this->feeType;
    }

    public function setFeeType($feeType) {
        $this->feeType = $feeType;
    }

    public function getMmPhoto() {
        return $this->mmPhoto;
    }

    public function setMmPhoto($mmPhoto) {
        $this->mmPhoto = $mmPhoto;
    }

    public function getSytPhoto() {
        return $this->sytPhoto;
    }

    public function setSytPhoto($sytPhoto) {
        $this->sytPhoto = $sytPhoto;
    }

    public function getPayWay() {
        return $this->payWay;
    }

    public function setPayWay($payWay) {
        $this->payWay = $payWay;
    }

}
