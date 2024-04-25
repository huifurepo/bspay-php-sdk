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
    /**
     * 资金类型资金类型。支付渠道为中信E管家时，资金类型必填（[详见说明](https://paas.huifu.com/partners/api/#/yuer/api_zxegjzllx)）
     */
    private $fundType;
    /**
     * 手续费承担方标识余额支付手续费承担方标识；商户余额支付扣收规则为接口指定承担方时必填！枚举值：&lt;br/&gt;OUT：出款方；&lt;br/&gt;IN：分账接受方。&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：IN&lt;/font&gt;
     */
    private $transFeeTakeFlag;

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

    public function getFundType() {
        return $this->fundType;
    }

    public function setFundType($fundType) {
        $this->fundType = $fundType;
    }

    public function getTransFeeTakeFlag() {
        return $this->transFeeTakeFlag;
    }

    public function setTransFeeTakeFlag($transFeeTakeFlag) {
        $this->transFeeTakeFlag = $transFeeTakeFlag;
    }

}
