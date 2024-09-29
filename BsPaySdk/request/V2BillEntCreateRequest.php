<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 创建企业账单
 *
 * @author sdk-generator
 * @Description
 */
class V2BillEntCreateRequest extends BaseRequest
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
     * 付款人
     */
    private $payerId;
    /**
     * 账单名称
     */
    private $billName;
    /**
     * 账单金额
     */
    private $billAmt;
    /**
     * 可支持的付款方式
     */
    private $supportPayType;
    /**
     * 账单截止日期
     */
    private $billEndDate;
    /**
     * 收款人信息
     */
    private $payeeInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_BILL_ENT_CREATE;
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

    public function getPayerId() {
        return $this->payerId;
    }

    public function setPayerId($payerId) {
        $this->payerId = $payerId;
    }

    public function getBillName() {
        return $this->billName;
    }

    public function setBillName($billName) {
        $this->billName = $billName;
    }

    public function getBillAmt() {
        return $this->billAmt;
    }

    public function setBillAmt($billAmt) {
        $this->billAmt = $billAmt;
    }

    public function getSupportPayType() {
        return $this->supportPayType;
    }

    public function setSupportPayType($supportPayType) {
        $this->supportPayType = $supportPayType;
    }

    public function getBillEndDate() {
        return $this->billEndDate;
    }

    public function setBillEndDate($billEndDate) {
        $this->billEndDate = $billEndDate;
    }

    public function getPayeeInfo() {
        return $this->payeeInfo;
    }

    public function setPayeeInfo($payeeInfo) {
        $this->payeeInfo = $payeeInfo;
    }

}
