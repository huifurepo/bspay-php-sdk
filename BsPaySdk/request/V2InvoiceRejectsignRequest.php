<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 电子合同拒签
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceRejectsignRequest extends BaseRequest
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
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 协议编号
     */
    private $agreementId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_REJECTSIGN;
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

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getAgreementId() {
        return $this->agreementId;
    }

    public function setAgreementId($agreementId) {
        $this->agreementId = $agreementId;
    }

}
