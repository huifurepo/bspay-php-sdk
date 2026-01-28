<?php

namespace BsPaySdk\request\v4\payment;

use BsPaySdk\request\BaseRequest;
use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 扫码交易退款查询
 *
 * @author sdk-generator
 * @Description
 */
class TradePaymentScanpayRefundQueryRequest extends BaseRequest {
    /** 
     * 商户号 
     */
    private $huifuId;
    /** 
     * 原退款请求日期 
     */
    private $orgReqDate;
    /** 
     * 原退款请求流水号 
     */
    private $orgReqSeqId;
    /** 
     * 原退款全局流水号 
     */
    private $orgHfSeqId;
    /** 
     * 终端订单号 
     */
    private $merOrdId;
    
    public function getFunctionCode() {
        return FunctionCodeEnum::$V4_TRADE_PAYMENT_SCANPAY_REFUNDQUERY;
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

    public function getMerOrdId() {
        return $this->merOrdId;
    }

    public function setMerOrdId($merOrdId) {
        $this->merOrdId = $merOrdId;
    }
}