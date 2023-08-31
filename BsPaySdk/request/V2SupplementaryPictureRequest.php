<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 图片上传
 *
 * @author sdk-generator
 * @Description
 */
class V2SupplementaryPictureRequest extends BaseRequest
{

    /**
     * 业务请求流水号
     */
    private $reqSeqId;
    /**
     * 业务请求日期
     */
    private $reqDate;
    /**
     * 图片类型
     */
    private $fileType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_SUPPLEMENTARY_PICTURE;
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

    public function getFileType() {
        return $this->fileType;
    }

    public function setFileType($fileType) {
        $this->fileType = $fileType;
    }

}
