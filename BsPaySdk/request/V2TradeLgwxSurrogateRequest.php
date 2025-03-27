<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 灵工微信代发
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeLgwxSurrogateRequest extends BaseRequest
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
     * 出款方商户号
     */
    private $huifuId;
    /**
     * 支付金额(元)
     */
    private $cashAmt;
    /**
     * 代发模式
     */
    private $salaryModleType;
    /**
     * 落地公司商户号
     */
    private $bmemberId;
    /**
     * 子商户应用ID
     */
    private $subAppid;
    /**
     * 异步通知地址
     */
    private $notifyUrl;
    /**
     * 分账明细
     */
    private $acctSplitBunch;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_LGWX_SURROGATE;
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

    public function getCashAmt() {
        return $this->cashAmt;
    }

    public function setCashAmt($cashAmt) {
        $this->cashAmt = $cashAmt;
    }

    public function getSalaryModleType() {
        return $this->salaryModleType;
    }

    public function setSalaryModleType($salaryModleType) {
        $this->salaryModleType = $salaryModleType;
    }

    public function getBmemberId() {
        return $this->bmemberId;
    }

    public function setBmemberId($bmemberId) {
        $this->bmemberId = $bmemberId;
    }

    public function getSubAppid() {
        return $this->subAppid;
    }

    public function setSubAppid($subAppid) {
        $this->subAppid = $subAppid;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

    public function getAcctSplitBunch() {
        return $this->acctSplitBunch;
    }

    public function setAcctSplitBunch($acctSplitBunch) {
        $this->acctSplitBunch = $acctSplitBunch;
    }

}
