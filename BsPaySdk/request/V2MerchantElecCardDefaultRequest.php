<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 电子账户设置默认卡
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantElecCardDefaultRequest extends BaseRequest
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
     * 汇付Id
     */
    private $huifuId;
    /**
     * 银行卡号
     */
    private $cardNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_ELEC_CARD_DEFAULT;
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

    public function getCardNo() {
        return $this->cardNo;
    }

    public function setCardNo($cardNo) {
        $this->cardNo = $cardNo;
    }

}
