<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 修改归集配置
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeSettleCollectionRuleModifyRequest extends BaseRequest
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
     * 转出方商户号
     */
    private $outHuifuId;
    /**
     * 转出方账户号
     */
    private $outAcctId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_SETTLE_COLLECTION_RULE_MODIFY;
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

    public function getOutHuifuId() {
        return $this->outHuifuId;
    }

    public function setOutHuifuId($outHuifuId) {
        $this->outHuifuId = $outHuifuId;
    }

    public function getOutAcctId() {
        return $this->outAcctId;
    }

    public function setOutAcctId($outAcctId) {
        $this->outAcctId = $outAcctId;
    }

}
