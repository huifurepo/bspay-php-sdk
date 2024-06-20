<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易分账明细查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeTransSplitQueryRequest extends BaseRequest
{

    /**
     * 分账交易汇付全局流水号
     */
    private $hfSeqId;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 交易类型
     */
    private $ordType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_TRANS_SPLIT_QUERY;
    }


    public function getHfSeqId() {
        return $this->hfSeqId;
    }

    public function setHfSeqId($hfSeqId) {
        $this->hfSeqId = $hfSeqId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOrdType() {
        return $this->ordType;
    }

    public function setOrdType($ordType) {
        $this->ordType = $ordType;
    }

}
