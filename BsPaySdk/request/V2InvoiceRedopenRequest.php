<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 红字发票开具接口
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceRedopenRequest extends BaseRequest
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
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 原发票号码
     */
    private $oriIvcNumber;
    /**
     * 红冲原因
     */
    private $redApplyReason;
    /**
     * 红冲申请来源
     */
    private $redApplySource;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_REDOPEN;
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

    public function getOriIvcNumber() {
        return $this->oriIvcNumber;
    }

    public function setOriIvcNumber($oriIvcNumber) {
        $this->oriIvcNumber = $oriIvcNumber;
    }

    public function getRedApplyReason() {
        return $this->redApplyReason;
    }

    public function setRedApplyReason($redApplyReason) {
        $this->redApplyReason = $redApplyReason;
    }

    public function getRedApplySource() {
        return $this->redApplySource;
    }

    public function setRedApplySource($redApplySource) {
        $this->redApplySource = $redApplySource;
    }

}
