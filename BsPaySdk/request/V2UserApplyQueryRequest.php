<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 用户申请单状态查询
 *
 * @author sdk-generator
 * @Description
 */
class V2UserApplyQueryRequest extends BaseRequest
{

    /**
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 申请单号
     */
    private $applyNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_USER_APPLY_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
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

    public function getApplyNo() {
        return $this->applyNo;
    }

    public function setApplyNo($applyNo) {
        $this->applyNo = $applyNo;
    }

}
