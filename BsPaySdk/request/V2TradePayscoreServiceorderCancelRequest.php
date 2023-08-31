<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 取消支付分订单
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayscoreServiceorderCancelRequest extends BaseRequest
{

    /**
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 取消服务订单原因
     */
    private $reason;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYSCORE_SERVICEORDER_CANCEL;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getReason() {
        return $this->reason;
    }

    public function setReason($reason) {
        $this->reason = $reason;
    }

}
