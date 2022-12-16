<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 花呗分期活动查询
 *
 * @author sdk-generator
 * @Description
 */
class V2PcreditSolutionQueryRequest extends BaseRequest
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
     * 活动方案id
     */
    private $solutionId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_PCREDIT_SOLUTION_QUERY;
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
