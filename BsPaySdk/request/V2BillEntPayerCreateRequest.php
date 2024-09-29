<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 新建付款人
 *
 * @author sdk-generator
 * @Description
 */
class V2BillEntPayerCreateRequest extends BaseRequest
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
     * 付款人名称
     */
    private $payerName;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_BILL_ENT_PAYER_CREATE;
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

    public function getPayerName() {
        return $this->payerName;
    }

    public function setPayerName($payerName) {
        $this->payerName = $payerName;
    }

}
