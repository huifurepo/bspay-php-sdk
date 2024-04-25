<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 发票开具申请查询
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceQueryapplyRequest extends BaseRequest
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
     * 渠道号汇付商户号为空时，必传；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000109812124&lt;/font&gt;
     */
    private $channelId;
    /**
     * 流水号
     */
    private $seqId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_QUERYAPPLY;
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

    public function getChannelId() {
        return $this->channelId;
    }

    public function setChannelId($channelId) {
        $this->channelId = $channelId;
    }

    public function getSeqId() {
        return $this->seqId;
    }

    public function setSeqId($seqId) {
        $this->seqId = $seqId;
    }

}
