<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 新增归集配置
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeSettleCollectionRuleAddRequest extends BaseRequest
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
     * 转入方商户号
     */
    private $inHuifuId;
    /**
     * 转出方商户号
     */
    private $outHuifuId;
    /**
     * 签约人手机号协议类型为电子协议时必填，必须为法人手机号。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：13911111111&lt;/font&gt;
     */
    private $signUserMobileNo;
    /**
     * 协议文件Id协议类型为纸质协议时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;
     */
    private $fileId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_SETTLE_COLLECTION_RULE_ADD;
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

    public function getInHuifuId() {
        return $this->inHuifuId;
    }

    public function setInHuifuId($inHuifuId) {
        $this->inHuifuId = $inHuifuId;
    }

    public function getOutHuifuId() {
        return $this->outHuifuId;
    }

    public function setOutHuifuId($outHuifuId) {
        $this->outHuifuId = $outHuifuId;
    }

    public function getSignUserMobileNo() {
        return $this->signUserMobileNo;
    }

    public function setSignUserMobileNo($signUserMobileNo) {
        $this->signUserMobileNo = $signUserMobileNo;
    }

    public function getFileId() {
        return $this->fileId;
    }

    public function setFileId($fileId) {
        $this->fileId = $fileId;
    }

}
