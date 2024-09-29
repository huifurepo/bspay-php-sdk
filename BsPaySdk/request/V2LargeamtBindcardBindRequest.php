<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银行大额支付绑卡
 *
 * @author sdk-generator
 * @Description
 */
class V2LargeamtBindcardBindRequest extends BaseRequest
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
     * 卡类型
     */
    private $cardType;
    /**
     * 银行账户名
     */
    private $cardName;
    /**
     * 银行卡号密文
     */
    private $cardNo;
    /**
     * 银行编码
     */
    private $bankCode;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_LARGEAMT_BINDCARD_BIND;
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

    public function getCardType() {
        return $this->cardType;
    }

    public function setCardType($cardType) {
        $this->cardType = $cardType;
    }

    public function getCardName() {
        return $this->cardName;
    }

    public function setCardName($cardName) {
        $this->cardName = $cardName;
    }

    public function getCardNo() {
        return $this->cardNo;
    }

    public function setCardNo($cardNo) {
        $this->cardNo = $cardNo;
    }

    public function getBankCode() {
        return $this->bankCode;
    }

    public function setBankCode($bankCode) {
        $this->bankCode = $bankCode;
    }

}
