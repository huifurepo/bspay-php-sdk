<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 出金交易查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeSettlementQueryRequest extends BaseRequest
{

    /**
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 原交易请求日期
     */
    private $orgReqDate;
    /**
     * 原交易返回的全局流水号原交易返回的全局流水号、原交易请求流水号二选一必填；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00470topo1A211015160805P090ac132fef00000&lt;/font&gt;
     */
    private $orgHfSeqId;
    /**
     * 原交易请求流水号原交易返回的全局流水号、原交易请求流水号二选一必填；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：202109167745558220003&lt;/font&gt;
     */
    private $orgReqSeqId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_SETTLEMENT_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getOrgHfSeqId() {
        return $this->orgHfSeqId;
    }

    public function setOrgHfSeqId($orgHfSeqId) {
        $this->orgHfSeqId = $orgHfSeqId;
    }

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

}
