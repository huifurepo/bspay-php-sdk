<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 余额支付
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeAcctpaymentPayRequest extends BaseRequest
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
     * 支付金额
     */
    private $ordAmt;
    /**
     * 分账对象
     */
    private $acctSplitBunch;
    /**
     * 安全信息
     */
    private $riskCheckData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ACCTPAYMENT_PAY;
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

    public function getOrdAmt() {
        return $this->ordAmt;
    }

    public function setOrdAmt($ordAmt) {
        $this->ordAmt = $ordAmt;
    }

    public function getAcctSplitBunch() {
        return $this->acctSplitBunch;
    }

    public function setAcctSplitBunch($acctSplitBunch) {
        $this->acctSplitBunch = $acctSplitBunch;
    }

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

}
