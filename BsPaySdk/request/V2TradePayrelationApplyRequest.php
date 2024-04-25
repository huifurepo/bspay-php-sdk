<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 付款关系提交
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayrelationApplyRequest extends BaseRequest
{

    /**
     * 出款方商户号
     */
    private $outHuifuId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 付款关系明细
     */
    private $payRelations;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYRELATION_APPLY;
    }


    public function getOutHuifuId() {
        return $this->outHuifuId;
    }

    public function setOutHuifuId($outHuifuId) {
        $this->outHuifuId = $outHuifuId;
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

    public function getPayRelations() {
        return $this->payRelations;
    }

    public function setPayRelations($payRelations) {
        $this->payRelations = $payRelations;
    }

}
