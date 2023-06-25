<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 图片上传
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeElectronReceiptsPictureUploadRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 三方通道类型
     */
    private $thirdChannelType;
    /**
     * 文件名称
     */
    private $fileName;
    /**
     * 图片内容
     */
    private $imageContent;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ELECTRON_RECEIPTS_PICTURE_UPLOAD;
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

    public function getThirdChannelType() {
        return $this->thirdChannelType;
    }

    public function setThirdChannelType($thirdChannelType) {
        $this->thirdChannelType = $thirdChannelType;
    }

    public function getFileName() {
        return $this->fileName;
    }

    public function setFileName($fileName) {
        $this->fileName = $fileName;
    }

    public function getImageContent() {
        return $this->imageContent;
    }

    public function setImageContent($imageContent) {
        $this->imageContent = $imageContent;
    }

}
