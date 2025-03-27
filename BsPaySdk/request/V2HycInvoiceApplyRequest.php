<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 申请开票
 *
 * @author sdk-generator
 * @Description
 */
class V2HycInvoiceApplyRequest extends BaseRequest
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
     * 交易流水列表
     */
    private $batchList;
    /**
     * 接收人手机号
     */
    private $receiveMobile;
    /**
     * 接收人姓名
     */
    private $receiveName;
    /**
     * 快递地址
     */
    private $courierAddress;
    /**
     * 开票类目
     */
    private $invoiceCategory;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_HYC_INVOICE_APPLY;
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

    public function getBatchList() {
        return $this->batchList;
    }

    public function setBatchList($batchList) {
        $this->batchList = $batchList;
    }

    public function getReceiveMobile() {
        return $this->receiveMobile;
    }

    public function setReceiveMobile($receiveMobile) {
        $this->receiveMobile = $receiveMobile;
    }

    public function getReceiveName() {
        return $this->receiveName;
    }

    public function setReceiveName($receiveName) {
        $this->receiveName = $receiveName;
    }

    public function getCourierAddress() {
        return $this->courierAddress;
    }

    public function setCourierAddress($courierAddress) {
        $this->courierAddress = $courierAddress;
    }

    public function getInvoiceCategory() {
        return $this->invoiceCategory;
    }

    public function setInvoiceCategory($invoiceCategory) {
        $this->invoiceCategory = $invoiceCategory;
    }

}
