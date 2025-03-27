<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 钱包交易查询
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletTradeQueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 原交易请求日期
     */
    private $orgReqDate;
    /**
     * 原交易请求流水号
     */
    private $orgReqSeqId;
    /**
     * 交易类型
     */
    private $transType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_WALLET_TRADE_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getTransType() {
        return $this->transType;
    }

    public function setTransType($transType) {
        $this->transType = $transType;
    }

}
