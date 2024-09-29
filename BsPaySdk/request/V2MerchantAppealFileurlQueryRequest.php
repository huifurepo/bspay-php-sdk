<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 申诉文件url查询
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantAppealFileurlQueryRequest extends BaseRequest
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
     * 申诉文件Id
     */
    private $fileId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_APPEAL_FILEURL_QUERY;
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

    public function getFileId() {
        return $this->fileId;
    }

    public function setFileId($fileId) {
        $this->fileId = $fileId;
    }

}
