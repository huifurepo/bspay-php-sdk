<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 修改子账户配置
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantSettleModifyRequest extends BaseRequest
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
     * 商户汇付Id
     */
    private $huifuId;
    /**
     * 渠道商汇付Id
     */
    private $upperHuifuId;
    /**
     * 子账户号
     */
    private $acctId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_SETTLE_MODIFY;
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

    public function getUpperHuifuId() {
        return $this->upperHuifuId;
    }

    public function setUpperHuifuId($upperHuifuId) {
        $this->upperHuifuId = $upperHuifuId;
    }

    public function getAcctId() {
        return $this->acctId;
    }

    public function setAcctId($acctId) {
        $this->acctId = $acctId;
    }

}
