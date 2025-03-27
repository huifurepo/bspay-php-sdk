<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 钱包支付退款查询
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletTradePayRefundQueryRequest extends BaseRequest
{

    /**
     * 原退款交易请求日期
     */
    private $orgReqDate;
    /**
     * 原退款交易请求流水号
     */
    private $orgReqSeqId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_WALLET_TRADE_PAY_REFUND_QUERY;
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

}
