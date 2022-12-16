<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 证书登记
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantDirectCertinfoAddRequest extends BaseRequest
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
     * 渠道商汇付Id
     */
    private $upperHuifuId;
    /**
     * 开通类型
     */
    private $payWay;
    /**
     * 开发者的应用ID
     */
    private $appId;
    /**
     * 文件列表
     */
    private $fileList;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_DIRECT_CERTINFO_ADD;
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

    public function getUpperHuifuId() {
        return $this->upperHuifuId;
    }

    public function setUpperHuifuId($upperHuifuId) {
        $this->upperHuifuId = $upperHuifuId;
    }

    public function getPayWay() {
        return $this->payWay;
    }

    public function setPayWay($payWay) {
        $this->payWay = $payWay;
    }

    public function getAppId() {
        return $this->appId;
    }

    public function setAppId($appId) {
        $this->appId = $appId;
    }

    public function getFileList() {
        return $this->fileList;
    }

    public function setFileList($fileList) {
        $this->fileList = $fileList;
    }

}
