<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 电子账户绑卡
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantElecCardBindRequest extends BaseRequest
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

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_ELEC_CARD_BIND;
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

}
