<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 开票信息查询
 *
 * @author sdk-generator
 * @Description
 */
class V2HycInvinfoQueryRequest extends BaseRequest
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
     * 商户汇付id
     */
    private $huifuId;
    /**
     * 开票批次号
     */
    private $invoiceBatch;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_HYC_INVINFO_QUERY;
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

    public function getInvoiceBatch() {
        return $this->invoiceBatch;
    }

    public function setInvoiceBatch($invoiceBatch) {
        $this->invoiceBatch = $invoiceBatch;
    }

}
