<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 创建花呗分期方案
 *
 * @author sdk-generator
 * @Description
 */
class V2PcreditSolutionCreateRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 花呗分期商家贴息活动名称
     */
    private $activityName;
    /**
     * 活动开始时间
     */
    private $startTime;
    /**
     * 活动结束时间
     */
    private $endTime;
    /**
     * 免息金额下限(元)
     */
    private $minMoneyLimit;
    /**
     * 免息金额上限(元)
     */
    private $maxMoneyLimit;
    /**
     * 花呗分期贴息预算金额
     */
    private $amountBudget;
    /**
     * 花呗分期数集合
     */
    private $installNumStrList;
    /**
     * 预算提醒金额(元)
     */
    private $budgetWarningMoney;
    /**
     * 预算提醒邮件列表
     */
    private $budgetWarningMailList;
    /**
     * 预算提醒手机号列表
     */
    private $budgetWarningMobileNoList;
    /**
     * 子门店信息集合
     */
    private $subShopInfoList;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_PCREDIT_SOLUTION_CREATE;
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

    public function getActivityName() {
        return $this->activityName;
    }

    public function setActivityName($activityName) {
        $this->activityName = $activityName;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime($startTime) {
        $this->startTime = $startTime;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime($endTime) {
        $this->endTime = $endTime;
    }

    public function getMinMoneyLimit() {
        return $this->minMoneyLimit;
    }

    public function setMinMoneyLimit($minMoneyLimit) {
        $this->minMoneyLimit = $minMoneyLimit;
    }

    public function getMaxMoneyLimit() {
        return $this->maxMoneyLimit;
    }

    public function setMaxMoneyLimit($maxMoneyLimit) {
        $this->maxMoneyLimit = $maxMoneyLimit;
    }

    public function getAmountBudget() {
        return $this->amountBudget;
    }

    public function setAmountBudget($amountBudget) {
        $this->amountBudget = $amountBudget;
    }

    public function getInstallNumStrList() {
        return $this->installNumStrList;
    }

    public function setInstallNumStrList($installNumStrList) {
        $this->installNumStrList = $installNumStrList;
    }

    public function getBudgetWarningMoney() {
        return $this->budgetWarningMoney;
    }

    public function setBudgetWarningMoney($budgetWarningMoney) {
        $this->budgetWarningMoney = $budgetWarningMoney;
    }

    public function getBudgetWarningMailList() {
        return $this->budgetWarningMailList;
    }

    public function setBudgetWarningMailList($budgetWarningMailList) {
        $this->budgetWarningMailList = $budgetWarningMailList;
    }

    public function getBudgetWarningMobileNoList() {
        return $this->budgetWarningMobileNoList;
    }

    public function setBudgetWarningMobileNoList($budgetWarningMobileNoList) {
        $this->budgetWarningMobileNoList = $budgetWarningMobileNoList;
    }

    public function getSubShopInfoList() {
        return $this->subShopInfoList;
    }

    public function setSubShopInfoList($subShopInfoList) {
        $this->subShopInfoList = $subShopInfoList;
    }

}
