<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 新增快捷/代扣解绑接口
 *
 * @author sdk-generator
 * @Description
 */
class V2QuickbuckleUnbindRequest extends BaseRequest
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
     * 汇付商户Id
     */
    private $huifuId;
    /**
     * 用户ID
     */
    private $outCustId;
    /**
     * 卡令牌
     */
    private $tokenNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_QUICKBUCKLE_UNBIND;
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

    public function getOutCustId() {
        return $this->outCustId;
    }

    public function setOutCustId($outCustId) {
        $this->outCustId = $outCustId;
    }

    public function getTokenNo() {
        return $this->tokenNo;
    }

    public function setTokenNo($tokenNo) {
        $this->tokenNo = $tokenNo;
    }

}
