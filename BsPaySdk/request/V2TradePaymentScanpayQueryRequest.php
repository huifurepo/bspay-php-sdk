<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易查询接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentScanpayQueryRequest extends BaseRequest
{

    /**
     * 原机构请求日期
     */
    private $orgReqDate;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 商户订单号线下POS、扫码机具发起的交易需要提供；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：22577563652260773965&lt;/font&gt;
     */
    private $merOrdId;
    /**
     * 交易返回的全局流水号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00290TOP1GR210919004230P853ac13262200000&lt;/font&gt;
     */
    private $orgHfSeqId;
    /**
     * 原机构请求流水号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：202110210012100005&lt;/font&gt;
     */
    private $orgReqSeqId;
    /**
     * 用户账单上的交易订单号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：092021091922001451301445517582&lt;/font&gt;；参见[用户账单说明](https://paas.huifu.com/partners/api/#/czsm/api_czsm_yhzd)
     */
    private $outTransId;
    /**
     * 用户账单上的商户订单号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：03232109190255105603561&lt;/font&gt;；参见[用户账单说明](https://paas.huifu.com/partners/api/#/czsm/api_czsm_yhzd)
     */
    private $partyOrderId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_SCANPAY_QUERY;
    }


    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getMerOrdId() {
        return $this->merOrdId;
    }

    public function setMerOrdId($merOrdId) {
        $this->merOrdId = $merOrdId;
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

    public function getOutTransId() {
        return $this->outTransId;
    }

    public function setOutTransId($outTransId) {
        $this->outTransId = $outTransId;
    }

    public function getPartyOrderId() {
        return $this->partyOrderId;
    }

    public function setPartyOrderId($partyOrderId) {
        $this->partyOrderId = $partyOrderId;
    }

}
