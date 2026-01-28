<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 个人签约状态查询
 *
 * @author sdk-generator
 * @Description
 */
class V2HycContractQueryRequest extends BaseRequest
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
     * 合同编号
     */
    private $contractId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_HYC_CONTRACT_QUERY;
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

    public function getContractId() {
        return $this->contractId;
    }

    public function setContractId($contractId) {
        $this->contractId = $contractId;
    }

}
