<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 图片下载
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantComplaintDownloadPictureRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求时间
     */
    private $reqDate;
    /**
     * 下载图片的url
     */
    private $mediaUrl;
    /**
     * 微信商户号
     */
    private $mchId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_COMPLAINT_DOWNLOAD_PICTURE;
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

    public function getMediaUrl() {
        return $this->mediaUrl;
    }

    public function setMediaUrl($mediaUrl) {
        $this->mediaUrl = $mediaUrl;
    }

    public function getMchId() {
        return $this->mchId;
    }

    public function setMchId($mchId) {
        $this->mchId = $mchId;
    }

}
