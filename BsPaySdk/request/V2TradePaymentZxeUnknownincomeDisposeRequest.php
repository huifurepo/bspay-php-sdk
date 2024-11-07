<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 不明来账处理
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentZxeUnknownincomeDisposeRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 银行侧交易流水号
     */
    private $bankSerialNo;
    /**
     * 操作类型
     */
    private $operateType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_ZXE_UNKNOWNINCOME_DISPOSE;
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

    public function getBankSerialNo() {
        return $this->bankSerialNo;
    }

    public function setBankSerialNo($bankSerialNo) {
        $this->bankSerialNo = $bankSerialNo;
    }

    public function getOperateType() {
        return $this->operateType;
    }

    public function setOperateType($operateType) {
        $this->operateType = $operateType;
    }

}
