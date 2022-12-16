<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银联活动商户入驻状态查询
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantActivityUnionpayRegisteStatusQueryRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 工单号
     */
    private $serialNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_ACTIVITY_UNIONPAY_REGISTE_STATUS_QUERY;
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

    public function getSerialNo() {
        return $this->serialNo;
    }

    public function setSerialNo($serialNo) {
        $this->serialNo = $serialNo;
    }

}
