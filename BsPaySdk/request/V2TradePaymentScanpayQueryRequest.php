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
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 汇付服务订单号out_order_no,org_hf_seq_id,org_req_seq_id 必填其一；汇付生成的服务订单号；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1234323JKHDFE1243252&lt;/font&gt;
     */
    private $outOrderNo;
    /**
     * 创建服务订单返回的汇付全局流水号out_order_no,org_hf_seq_id,org_req_seq_id 必填其一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00290TOP1GR210919004230P853ac13262200000&lt;/font&gt;
     */
    private $orgHfSeqId;
    /**
     * 服务订单创建请求流水号out_order_no,org_hf_seq_id,org_req_seq_id 必填其一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：202110210012100005&lt;/font&gt;
     */
    private $orgReqSeqId;
    /**
     * 原机构请求日期
     */
    private $orgReqDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_SCANPAY_QUERY;
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

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

}
