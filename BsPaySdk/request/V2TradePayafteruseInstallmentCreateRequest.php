<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 分期单创建
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePayafteruseInstallmentCreateRequest extends BaseRequest
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
     * 分期金额
     */
    private $fqAmt;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYAFTERUSE_INSTALLMENT_CREATE;
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

    public function getFqAmt() {
        return $this->fqAmt;
    }

    public function setFqAmt($fqAmt) {
        $this->fqAmt = $fqAmt;
    }

}
