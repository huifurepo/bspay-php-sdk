<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 开票类目查询
 *
 * @author sdk-generator
 * @Description
 */
class V2HycInvcategoryQueryRequest extends BaseRequest
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
     * 落地公司机构号
     */
    private $minorAgentId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_HYC_INVCATEGORY_QUERY;
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

    public function getMinorAgentId() {
        return $this->minorAgentId;
    }

    public function setMinorAgentId($minorAgentId) {
        $this->minorAgentId = $minorAgentId;
    }

}
