<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 获取银联用户标识接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentUsermark2QueryRequest extends BaseRequest
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
     * 授权码
     */
    private $authCode;
    /**
     * 银联支付标识
     */
    private $appUpIdentifier;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_USERMARK2_QUERY;
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

    public function getAuthCode() {
        return $this->authCode;
    }

    public function setAuthCode($authCode) {
        $this->authCode = $authCode;
    }

    public function getAppUpIdentifier() {
        return $this->appUpIdentifier;
    }

    public function setAppUpIdentifier($appUpIdentifier) {
        $this->appUpIdentifier = $appUpIdentifier;
    }

}
