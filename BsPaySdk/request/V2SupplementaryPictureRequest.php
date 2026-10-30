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
    /**
     * 文件url链接文件url链接与file文件流不能同时上传；文件支持类型：JPG,BMP,PNG；单个图片最大支持2M；除去图片外其他类型文件支持10M&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：[https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/imgs/guide/jinjian/%E8%90%A5%E4%B8%9A%E6%89%A7%E7%85%A71-2.png](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/imgs/guide/jinjian/%E8%90%A5%E4%B8%9A%E6%89%A7%E7%85%A71-2.png)
     */
    private $fileUrl;

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

    public function getFileUrl() {
        return $this->fileUrl;
    }

    public function setFileUrl($fileUrl) {
        $this->fileUrl = $fileUrl;
    }

}
