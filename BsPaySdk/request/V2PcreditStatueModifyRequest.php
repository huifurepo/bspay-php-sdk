<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 上架下架分期活动接口
 *
 * @author sdk-generator
 * @Description
 */
class V2PcreditStatueModifyRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 贴息方案实例id
     */
    private $solutionId;
    /**
     * 状态控制
     */
    private $status;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_PCREDIT_STATUE_MODIFY;
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

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}
