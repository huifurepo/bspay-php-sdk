<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 创建批量账单数据
 *
 * @author sdk-generator
 * @Description
 */
class V3BillpayOrderBatchAddRequest extends BaseRequest
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
     * 账单项目编号
     */
    private $projectNo;
    /**
     * 用户资料信息列表
     */
    private $userDocInfoList;
    /**
     * 账单收费项信息列表
     */
    private $paymentInfoList;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_BILLPAY_ORDER_BATCH_ADD;
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

    public function getProjectNo() {
        return $this->projectNo;
    }

    public function setProjectNo($projectNo) {
        $this->projectNo = $projectNo;
    }

    public function getUserDocInfoList() {
        return $this->userDocInfoList;
    }

    public function setUserDocInfoList($userDocInfoList) {
        $this->userDocInfoList = $userDocInfoList;
    }

    public function getPaymentInfoList() {
        return $this->paymentInfoList;
    }

    public function setPaymentInfoList($paymentInfoList) {
        $this->paymentInfoList = $paymentInfoList;
    }

}
