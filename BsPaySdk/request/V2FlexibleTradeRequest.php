<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 灵工支付
 *
 * @author sdk-generator
 * @Description
 */
class V2FlexibleTradeRequest extends BaseRequest
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
     * 出款方商户号
     */
    private $outHuifuId;
    /**
     * 出款方账户号
     */
    private $outAcctId;
    /**
     * 交易阶段操作类型
     */
    private $stageOperationType;
    /**
     * 前段交易流水号** 当交易阶段操作类型为02时，该字段必填。填写的是交易阶段操作类型为01时交易已完成的交易全局流水号。 &lt;font color&#x3D;&quot;green&quot;&gt;示例值：20250620112533115566896&lt;/font&gt;
     */
    private $phaseHfSeqId;
    /**
     * 支付金额
     */
    private $ordAmt;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_FLEXIBLE_TRADE;
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

    public function getOutHuifuId() {
        return $this->outHuifuId;
    }

    public function setOutHuifuId($outHuifuId) {
        $this->outHuifuId = $outHuifuId;
    }

    public function getOutAcctId() {
        return $this->outAcctId;
    }

    public function setOutAcctId($outAcctId) {
        $this->outAcctId = $outAcctId;
    }

    public function getStageOperationType() {
        return $this->stageOperationType;
    }

    public function setStageOperationType($stageOperationType) {
        $this->stageOperationType = $stageOperationType;
    }

    public function getPhaseHfSeqId() {
        return $this->phaseHfSeqId;
    }

    public function setPhaseHfSeqId($phaseHfSeqId) {
        $this->phaseHfSeqId = $phaseHfSeqId;
    }

    public function getOrdAmt() {
        return $this->ordAmt;
    }

    public function setOrdAmt($ordAmt) {
        $this->ordAmt = $ordAmt;
    }

}
