<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 钱包用户查询
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletQueryRequest extends BaseRequest
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
     * 钱包用户ID
     */
    private $userHuifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_WALLET_QUERY;
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

    public function getUserHuifuId() {
        return $this->userHuifuId;
    }

    public function setUserHuifuId($userHuifuId) {
        $this->userHuifuId = $userHuifuId;
    }

}
