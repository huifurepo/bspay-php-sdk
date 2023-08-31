<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 子账户开通配置(2022)
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantSettleConfigRequest extends BaseRequest
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
     * 商户/用户汇付Id
     */
    private $huifuId;
    /**
     * 上级汇付Id
     */
    private $upperHuifuId;
    /**
     * 子账户类型
     */
    private $acctType;
    /**
     * 账户名称
     */
    private $acctName;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_SETTLE_CONFIG;
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

    public function getAcctType() {
        return $this->acctType;
    }

    public function setAcctType($acctType) {
        $this->acctType = $acctType;
    }

    public function getAcctName() {
        return $this->acctName;
    }

    public function setAcctName($acctName) {
        $this->acctName = $acctName;
    }

}
