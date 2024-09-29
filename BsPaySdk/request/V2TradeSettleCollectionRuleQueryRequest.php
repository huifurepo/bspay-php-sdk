<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 归集配置查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeSettleCollectionRuleQueryRequest extends BaseRequest
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
     * 转出方商户号转出方商户号和转入方商户号二选一必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123124&lt;/font&gt;
     */
    private $outHuifuId;
    /**
     * 转入方商户号转出方商户号和转入方商户号二选一必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123124&lt;/font&gt;
     */
    private $inHuifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_SETTLE_COLLECTION_RULE_QUERY;
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

    public function getInHuifuId() {
        return $this->inHuifuId;
    }

    public function setInHuifuId($inHuifuId) {
        $this->inHuifuId = $inHuifuId;
    }

}
