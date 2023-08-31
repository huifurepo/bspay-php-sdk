<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 登记扣款信息
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayscoreDeductRegitsterRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 商户申请单号
     */
    private $reqSeqId;
    /**
     * 汇付商户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYSCORE_DEDUCT_REGITSTER;
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
