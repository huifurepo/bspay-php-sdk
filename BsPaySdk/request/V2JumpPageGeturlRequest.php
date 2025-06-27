<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 获取控台页面跳转链接
 *
 * @author sdk-generator
 * @Description
 */
class V2JumpPageGeturlRequest extends BaseRequest
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
     * 外部系统用户标识
     */
    private $externalUserId;
    /**
     * 功能菜单
     */
    private $jumpFunctionType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_JUMP_PAGE_GETURL;
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

    public function getExternalUserId() {
        return $this->externalUserId;
    }

    public function setExternalUserId($externalUserId) {
        $this->externalUserId = $externalUserId;
    }

    public function getJumpFunctionType() {
        return $this->jumpFunctionType;
    }

    public function setJumpFunctionType($jumpFunctionType) {
        $this->jumpFunctionType = $jumpFunctionType;
    }

}
