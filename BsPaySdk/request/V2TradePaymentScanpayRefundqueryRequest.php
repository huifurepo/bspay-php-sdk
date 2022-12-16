<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易退款查询接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentScanpayRefundqueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 退款请求日期
     */
    private $orgReqDate;
    /**
     * 退款全局流水号退款请求流水号,退款全局流水号,终端订单号三选一不能都为空；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0030default220825182711P099ac1f343f00000&lt;/font&gt;
     */
    private $orgHfSeqId;
    /**
     * 退款请求流水号退款请求流水号,退款全局流水号,终端订单号三选一不能都为空；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：202110210012100005&lt;/font&gt;
     */
    private $orgReqSeqId;
    /**
     * 终端订单号退款请求流水号,退款全局流水号,终端订单号三选一不能都为空；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：16672670833524393&lt;/font&gt;
     */
    private $merOrdId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_SCANPAY_REFUNDQUERY;
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

    public function getMerOrdId() {
        return $this->merOrdId;
    }

    public function setMerOrdId($merOrdId) {
        $this->merOrdId = $merOrdId;
    }

}
