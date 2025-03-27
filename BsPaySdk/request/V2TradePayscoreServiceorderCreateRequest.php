<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 创建支付分
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayscoreServiceorderCreateRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 商户申请单号
     */
    private $reqSeqId;
    /**
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 服务信息
     */
    private $serviceIntroduction;
    /**
     * 服务风险金
     */
    private $riskFund;
    /**
     * 服务时间
     */
    private $timeRange;
    /**
     * 商户回调地址
     */
    private $notifyUrl;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYSCORE_SERVICEORDER_CREATE;
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

    public function getServiceIntroduction() {
        return $this->serviceIntroduction;
    }

    public function setServiceIntroduction($serviceIntroduction) {
        $this->serviceIntroduction = $serviceIntroduction;
    }

    public function getRiskFund() {
        return $this->riskFund;
    }

    public function setRiskFund($riskFund) {
        $this->riskFund = $riskFund;
    }

    public function getTimeRange() {
        return $this->timeRange;
    }

    public function setTimeRange($timeRange) {
        $this->timeRange = $timeRange;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

}
