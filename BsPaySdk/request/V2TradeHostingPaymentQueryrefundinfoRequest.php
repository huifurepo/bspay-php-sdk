<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 托管交易退款查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeHostingPaymentQueryrefundinfoRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 退款请求日期
     */
    private $orgReqDate;
    /**
     * 退款全局流水号退款请求流水号/退款全局流水号二选一不能都为空；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0030default220825182711P099ac1f343f00000&lt;/font&gt;
     */
    private $orgHfSeqId;
    /**
     * 退款请求流水号退款请求流水号/退款全局流水号二选一不能都为空；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：202110210012100005&lt;/font&gt;
     */
    private $orgReqSeqId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_HOSTING_PAYMENT_QUERYREFUNDINFO;
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
