<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 查询批量账单数据
 *
 * @author sdk-generator
 * @Description
 */
class V3BillpayOrderBatchDetailRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 账单编号与原创建批量账单数据请求流水号二选一必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：BN2025091279190693&lt;/font&gt;;
     */
    private $billNo;
    /**
     * 原创建批量账单数据请求流水号原创建批量账单数据请求流水号，同一商户号当天唯一；与帐单编号二选一必填
     */
    private $oriReqSeqId;
    /**
     * 原创建批量账单数据请求日期原创建批量账单数据日期格式：yyyyMMdd，以北京时间为准；与帐单编号二选一必填
     */
    private $oriReqDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_BILLPAY_ORDER_BATCH_DETAIL;
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

    public function getBillNo() {
        return $this->billNo;
    }

    public function setBillNo($billNo) {
        $this->billNo = $billNo;
    }

    public function getOriReqSeqId() {
        return $this->oriReqSeqId;
    }

    public function setOriReqSeqId($oriReqSeqId) {
        $this->oriReqSeqId = $oriReqSeqId;
    }

    public function getOriReqDate() {
        return $this->oriReqDate;
    }

    public function setOriReqDate($oriReqDate) {
        $this->oriReqDate = $oriReqDate;
    }

}
