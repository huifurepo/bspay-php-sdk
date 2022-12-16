<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信支付宝预授权撤销
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentPreauthcancelRefundRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 客户号
     */
    private $huifuId;
    /**
     * 原交易请求日期
     */
    private $orgReqDate;
    /**
     * 撤销金额
     */
    private $ordAmt;
    /**
     * 风控信息
     */
    private $riskCheckInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_PREAUTHCANCEL_REFUND;
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

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getOrdAmt() {
        return $this->ordAmt;
    }

    public function setOrdAmt($ordAmt) {
        $this->ordAmt = $ordAmt;
    }

    public function getRiskCheckInfo() {
        return $this->riskCheckInfo;
    }

    public function setRiskCheckInfo($riskCheckInfo) {
        $this->riskCheckInfo = $riskCheckInfo;
    }

}
