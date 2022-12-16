<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信代发
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeTransWxSurrogateRequest extends BaseRequest
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
     * 出账商户号
     */
    private $outHuifuId;
    /**
     * 代发金额
     */
    private $transAmt;
    /**
     * 收款用户openid
     */
    private $openId;
    /**
     * 微信收款用户姓名
     */
    private $userName;
    /**
     * 代发备注
     */
    private $remark;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_TRANS_WX_SURROGATE;
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

    public function getOutHuifuId() {
        return $this->outHuifuId;
    }

    public function setOutHuifuId($outHuifuId) {
        $this->outHuifuId = $outHuifuId;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getOpenId() {
        return $this->openId;
    }

    public function setOpenId($openId) {
        $this->openId = $openId;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function getRemark() {
        return $this->remark;
    }

    public function setRemark($remark) {
        $this->remark = $remark;
    }

}
