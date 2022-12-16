<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 支付宝申诉请求凭证
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantComplaintRequestCertificatesRequest extends BaseRequest
{

    /**
     * 请求汇付流水号
     */
    private $reqSeqId;
    /**
     * 请求汇付时间
     */
    private $reqDate;
    /**
     * 支付宝推送流水号
     */
    private $riskBizId;
    /**
     * 商户类型
     */
    private $merchantType;
    /**
     * 商户经营模式
     */
    private $operationType;
    /**
     * 收款应用场景
     */
    private $paymentScene;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_COMPLAINT_REQUEST_CERTIFICATES;
    }


    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getRiskBizId() {
        return $this->riskBizId;
    }

    public function setRiskBizId($riskBizId) {
        $this->riskBizId = $riskBizId;
    }

    public function getMerchantType() {
        return $this->merchantType;
    }

    public function setMerchantType($merchantType) {
        $this->merchantType = $merchantType;
    }

    public function getOperationType() {
        return $this->operationType;
    }

    public function setOperationType($operationType) {
        $this->operationType = $operationType;
    }

    public function getPaymentScene() {
        return $this->paymentScene;
    }

    public function setPaymentScene($paymentScene) {
        $this->paymentScene = $paymentScene;
    }

}
