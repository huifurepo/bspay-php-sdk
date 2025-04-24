<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 发票邮件重发接口
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceResendmailRequest extends BaseRequest
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
     * 发票号码
     */
    private $ivcNumber;
    /**
     * 重发邮箱地址
     */
    private $mailAddr;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_RESENDMAIL;
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

    public function getIvcNumber() {
        return $this->ivcNumber;
    }

    public function setIvcNumber($ivcNumber) {
        $this->ivcNumber = $ivcNumber;
    }

    public function getMailAddr() {
        return $this->mailAddr;
    }

    public function setMailAddr($mailAddr) {
        $this->mailAddr = $mailAddr;
    }

}
