<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 授权结果查询
 *
 * @author sdk-generator
 * @Description
 */
class V2LinkappAuthResultRequest extends BaseRequest
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
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 平台类型
     */
    private $platformType;
    /**
     * 授权请求ID
     */
    private $authSeqId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_LINKAPP_AUTH_RESULT;
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

    public function getPlatformType() {
        return $this->platformType;
    }

    public function setPlatformType($platformType) {
        $this->platformType = $platformType;
    }

    public function getAuthSeqId() {
        return $this->authSeqId;
    }

    public function setAuthSeqId($authSeqId) {
        $this->authSeqId = $authSeqId;
    }

}
