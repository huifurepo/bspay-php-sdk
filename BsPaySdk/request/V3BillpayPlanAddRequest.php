<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 创建账单计划
 *
 * @author sdk-generator
 * @Description
 */
class V3BillpayPlanAddRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 账单项目编号
     */
    private $projectNo;
    /**
     * 账单周期
     */
    private $planCycle;
    /**
     * 账单日
     */
    private $billDay;
    /**
     * 补发当前周期账单标志枚举:Y-是、N-否；指定账单日时，必填；若填写是，则立即生成当前系统时间所在周期的账单； 滚动账单日时，此字段无效
     */
    private $reissueBillFlag;
    /**
     * 代扣信息jsonObject格式；账单计划需自动代扣时必填
     */
    private $withholdInfoData;
    /**
     * 用户资料信息列表
     */
    private $userDocInfoList;
    /**
     * 账单收费项信息列表
     */
    private $paymentInfoList;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_BILLPAY_PLAN_ADD;
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

    public function getPlanCycle() {
        return $this->planCycle;
    }

    public function setPlanCycle($planCycle) {
        $this->planCycle = $planCycle;
    }

    public function getBillDay() {
        return $this->billDay;
    }

    public function setBillDay($billDay) {
        $this->billDay = $billDay;
    }

    public function getReissueBillFlag() {
        return $this->reissueBillFlag;
    }

    public function setReissueBillFlag($reissueBillFlag) {
        $this->reissueBillFlag = $reissueBillFlag;
    }

    public function getWithholdInfoData() {
        return $this->withholdInfoData;
    }

    public function setWithholdInfoData($withholdInfoData) {
        $this->withholdInfoData = $withholdInfoData;
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
