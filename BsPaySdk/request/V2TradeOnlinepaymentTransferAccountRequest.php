<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银行大额转账
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentTransferAccountRequest extends BaseRequest
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
     * 收款方商户号
     */
    private $huifuId;
    /**
     * 付款方名称
     */
    private $certificateName;
    /**
     * 付款方银行卡号
     */
    private $bankCardNo;
    /**
     * 交易金额
     */
    private $transAmt;
    /**
     * 异步通知地址
     */
    private $notifyUrl;
    /**
     * 商品描述
     */
    private $goodsDesc;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_TRANSFER_ACCOUNT;
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

    public function getCertificateName() {
        return $this->certificateName;
    }

    public function setCertificateName($certificateName) {
        $this->certificateName = $certificateName;
    }

    public function getBankCardNo() {
        return $this->bankCardNo;
    }

    public function setBankCardNo($bankCardNo) {
        $this->bankCardNo = $bankCardNo;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

    public function getGoodsDesc() {
        return $this->goodsDesc;
    }

    public function setGoodsDesc($goodsDesc) {
        $this->goodsDesc = $goodsDesc;
    }

}
