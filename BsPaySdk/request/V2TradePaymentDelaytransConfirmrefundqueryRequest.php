<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易确认退款查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentDelaytransConfirmrefundqueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 原交易请求日期
     */
    private $orgReqDate;
    /**
     * 原交易请求流水号指交易确认请求流水号，org_req_seq_id和org_hf_seq_id二选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665002&lt;/font&gt;
     */
    private $orgReqSeqId;
    /**
     * 原退款全局流水号 原交易确认退款全局流水号。org_req_seq_id和org_hf_seq_id二选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：003500TOP2B211021163242P447ac132fd200000&lt;/font&gt;
     */
    private $orgHfSeqId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_DELAYTRANS_CONFIRMREFUNDQUERY;
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

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getOrgHfSeqId() {
        return $this->orgHfSeqId;
    }

    public function setOrgHfSeqId($orgHfSeqId) {
        $this->orgHfSeqId = $orgHfSeqId;
    }

}
