<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 企业账单退款
 *
 * @author sdk-generator
 * @Description
 */
class V2BillEntRefundRequest extends BaseRequest
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
    /**
     * 退款金额
     */
    private $refundAmt;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_BILL_ENT_REFUND;
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

    public function getRefundAmt() {
        return $this->refundAmt;
    }

    public function setRefundAmt($refundAmt) {
        $this->refundAmt = $refundAmt;
    }

}
