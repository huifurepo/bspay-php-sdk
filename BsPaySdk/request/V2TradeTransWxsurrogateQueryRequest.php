<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信代发查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeTransWxsurrogateQueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 原请求流水号原交易请求流水号、原交易返回的全局流水号至少要送其中一项；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665001&lt;/font&gt;
     */
    private $orgReqSeqId;
    /**
     * 原交易返回的全局流水号原交易请求流水号、原交易返回的全局流水号至少要送其中一项；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00290TOP1GR210919004230P853ac13262200000 &lt;/font&gt;
     */
    private $orgHfSeqId;
    /**
     * 原请求日期
     */
    private $orgReqDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_TRANS_WXSURROGATE_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
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

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

}
