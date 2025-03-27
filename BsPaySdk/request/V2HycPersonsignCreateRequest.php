<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 个人签约发起
 *
 * @author sdk-generator
 * @Description
 */
class V2HycPersonsignCreateRequest extends BaseRequest
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
     * 用户汇付id
     */
    private $huifuId;
    /**
     * 落地公司机构号
     */
    private $minorAgentId;
    /**
     * 乐接活请求参数jsonObject格式 合作平台为乐接活时必传
     */
    private $ljhData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_HYC_PERSONSIGN_CREATE;
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

    public function getMinorAgentId() {
        return $this->minorAgentId;
    }

    public function setMinorAgentId($minorAgentId) {
        $this->minorAgentId = $minorAgentId;
    }

    public function getLjhData() {
        return $this->ljhData;
    }

    public function setLjhData($ljhData) {
        $this->ljhData = $ljhData;
    }

}
