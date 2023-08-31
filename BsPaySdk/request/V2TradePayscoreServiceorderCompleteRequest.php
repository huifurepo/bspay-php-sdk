<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 完结支付分订单
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayscoreServiceorderCompleteRequest extends BaseRequest
{

    /**
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 汇付订单号
     */
    private $outOrderNo;
    /**
     * 完结金额
     */
    private $ordAmt;
    /**
     * 服务时间
     */
    private $timeRange;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYSCORE_SERVICEORDER_COMPLETE;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOutOrderNo() {
        return $this->outOrderNo;
    }

    public function setOutOrderNo($outOrderNo) {
        $this->outOrderNo = $outOrderNo;
    }

    public function getOrdAmt() {
        return $this->ordAmt;
    }

    public function setOrdAmt($ordAmt) {
        $this->ordAmt = $ordAmt;
    }

    public function getTimeRange() {
        return $this->timeRange;
    }

    public function setTimeRange($timeRange) {
        $this->timeRange = $timeRange;
    }

}
