<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 企业账单查询
 *
 * @author sdk-generator
 * @Description
 */
class V2BillEntQueryRequest extends BaseRequest
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
     * 账单编号
     */
    private $billNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_BILL_ENT_QUERY;
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

}
