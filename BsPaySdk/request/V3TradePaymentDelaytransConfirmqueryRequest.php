<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易确认查询接口
 *
 * @author sdk-generator
 * @Description
 */
class V3TradePaymentDelaytransConfirmqueryRequest extends BaseRequest
{

    /**
     * 原请求日期
     */
    private $orgReqDate;
    /**
     * 原请求流水号
     */
    private $orgReqSeqId;
    /**
     * 商户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_TRADE_PAYMENT_DELAYTRANS_CONFIRMQUERY;
    }


    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

}
