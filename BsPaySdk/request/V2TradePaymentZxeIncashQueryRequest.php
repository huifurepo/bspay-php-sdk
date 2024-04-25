<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * E账户转账及充值查询接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentZxeIncashQueryRequest extends BaseRequest
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
     * 商户号/用户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_ZXE_INCASH_QUERY;
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

}
