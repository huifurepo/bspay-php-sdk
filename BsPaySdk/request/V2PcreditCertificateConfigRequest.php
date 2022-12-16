<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 分期证书配置
 *
 * @author sdk-generator
 * @Description
 */
class V2PcreditCertificateConfigRequest extends BaseRequest
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
     * 开发者的应用ID
     */
    private $appId;
    /**
     * 证书文件列表
     */
    private $fileList;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_PCREDIT_CERTIFICATE_CONFIG;
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
