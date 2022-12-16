<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 花呗分期贴息查询
 *
 * @author sdk-generator
 * @Description
 */
class V2PcreditOrderQueryRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 贴息方案id
     */
    private $solutionId;
    /**
     * 活动开始时间
     */
    private $startTime;
    /**
     * 活动结束时间
     */
    private $endTime;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_PCREDIT_ORDER_QUERY;
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

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime($startTime) {
        $this->startTime = $startTime;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime($endTime) {
        $this->endTime = $endTime;
    }

}
