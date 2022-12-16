<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 卡bin信息查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeCardbinQueryRequest extends BaseRequest
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
     * 银行卡号密文
     */
    private $bankCardNoCrypt;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_CARDBIN_QUERY;
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

    public function getBankCardNoCrypt() {
        return $this->bankCardNoCrypt;
    }

    public function setBankCardNoCrypt($bankCardNoCrypt) {
        $this->bankCardNoCrypt = $bankCardNoCrypt;
    }

}
