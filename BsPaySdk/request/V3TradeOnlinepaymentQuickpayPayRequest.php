<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 快捷支付
 *
 * @author sdk-generator
 * @Description
 */
class V3TradeOnlinepaymentQuickpayPayRequest extends BaseRequest
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
     * 短信验证码
     */
    private $smsCode;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_TRADE_ONLINEPAYMENT_QUICKPAY_PAY;
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

    public function getSmsCode() {
        return $this->smsCode;
    }

    public function setSmsCode($smsCode) {
        $this->smsCode = $smsCode;
    }

}
