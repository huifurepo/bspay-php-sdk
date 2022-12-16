<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 更新花呗分期方案
 *
 * @author sdk-generator
 * @Description
 */
class V2PcreditSolutionModifyRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 创建成功后返回的贴息活动方案id
     */
    private $solutionId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_PCREDIT_SOLUTION_MODIFY;
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

    public function getSolutionId() {
        return $this->solutionId;
    }

    public function setSolutionId($solutionId) {
        $this->solutionId = $solutionId;
    }

}
