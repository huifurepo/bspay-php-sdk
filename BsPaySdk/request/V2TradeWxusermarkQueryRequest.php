<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信用户标识查询接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeWxusermarkQueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 支付授权码
     */
    private $authCode;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_WXUSERMARK_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
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

    public function getAuthCode() {
        return $this->authCode;
    }

    public function setAuthCode($authCode) {
        $this->authCode = $authCode;
    }

}
