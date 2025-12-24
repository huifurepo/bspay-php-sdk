<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 账单退款接口
 *
 * @author sdk-generator
 * @Description
 */
class V3BillpayOrderPaymentRefundRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求时间
     */
    private $reqDate;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 账单编号
     */
    private $billNo;
    /**
     * 退款金额
     */
    private $refAmt;
    /**
     * 大额转账支付账户信息数据jsonObject格式；银行大额转账支付交易的退款申请,付款方账户类型为对公时必填
     */
    private $bankInfoData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_BILLPAY_ORDER_PAYMENT_REFUND;
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

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getBillNo() {
        return $this->billNo;
    }

    public function setBillNo($billNo) {
        $this->billNo = $billNo;
    }

    public function getRefAmt() {
        return $this->refAmt;
    }

    public function setRefAmt($refAmt) {
        $this->refAmt = $refAmt;
    }

    public function getBankInfoData() {
        return $this->bankInfoData;
    }

    public function setBankInfoData($bankInfoData) {
        $this->bankInfoData = $bankInfoData;
    }

}
