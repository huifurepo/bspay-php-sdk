<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 全渠道资金提现申请
 *
 * @author sdk-generator
 * @Description
 */
class V2EfpEncashRequest extends BaseRequest
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
     * 商户汇付id
     */
    private $huifuId;
    /**
     * 交易金额.单位:元，2位小数
     */
    private $cashAmt;
    /**
     * 取现卡序列号
     */
    private $tokenNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_EFP_ENCASH;
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

    public function getCashAmt() {
        return $this->cashAmt;
    }

    public function setCashAmt($cashAmt) {
        $this->cashAmt = $cashAmt;
    }

    public function getTokenNo() {
        return $this->tokenNo;
    }

    public function setTokenNo($tokenNo) {
        $this->tokenNo = $tokenNo;
    }

}
