<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户公域授权
 *
 * @author sdk-generator
 * @Description
 */
class V2LinkappAuthDoRequest extends BaseRequest
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
     * 平台类型
     */
    private $platformType;
    /**
     * 协议地址
     */
    private $contractUrl;
    /**
     * 签约商户名称
     */
    private $contractMerName;
    /**
     * 签约时间
     */
    private $contractTime;
    /**
     * 登录用手机号第一次登录有需要手机验证码的情况;（需要授权手机安装一个转发短信的应用）
     */
    private $phoneNumber;
    /**
     * 商户类型商户类型：0个人店 1企业 2个体工商户 3其他(目前固定填3即可)
     */
    private $merchantType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_LINKAPP_AUTH_DO;
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

    public function getPlatformType() {
        return $this->platformType;
    }

    public function setPlatformType($platformType) {
        $this->platformType = $platformType;
    }

    public function getContractUrl() {
        return $this->contractUrl;
    }

    public function setContractUrl($contractUrl) {
        $this->contractUrl = $contractUrl;
    }

    public function getContractMerName() {
        return $this->contractMerName;
    }

    public function setContractMerName($contractMerName) {
        $this->contractMerName = $contractMerName;
    }

    public function getContractTime() {
        return $this->contractTime;
    }

    public function setContractTime($contractTime) {
        $this->contractTime = $contractTime;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function getMerchantType() {
        return $this->merchantType;
    }

    public function setMerchantType($merchantType) {
        $this->merchantType = $merchantType;
    }

}
