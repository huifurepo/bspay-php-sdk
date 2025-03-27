<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易确认
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentDelaytransConfirmRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 交易类型**原交易为快捷支付必填：QUICK_PAY**；&lt;br/&gt;**原交易为余额支付必填：ACCT_PAYMENT**；&lt;br/&gt;原交易为全域资金必填：REMITTANCE_PAY；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：ACCT_PAYMENT&lt;/font&gt;
     */
    private $payType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_DELAYTRANS_CONFIRM;
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

    public function getPayType() {
        return $this->payType;
    }

    public function setPayType($payType) {
        $this->payType = $payType;
    }

}
