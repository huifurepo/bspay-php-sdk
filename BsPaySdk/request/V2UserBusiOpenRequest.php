<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 用户业务入驻
 *
 * @author sdk-generator
 * @Description
 */
class V2UserBusiOpenRequest extends BaseRequest
{

    /**
     * 汇付ID
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
     * 渠道商/商户汇付Id
     */
    private $upperHuifuId;
    /**
     * 乐接活配置当合作平台为乐接活，必填
     */
    private $ljhData;
    /**
     * 汇薪云配置当合作平台为汇薪云，必填
     */
    private $hxyData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_USER_BUSI_OPEN;
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

    public function getUpperHuifuId() {
        return $this->upperHuifuId;
    }

    public function setUpperHuifuId($upperHuifuId) {
        $this->upperHuifuId = $upperHuifuId;
    }

    public function getLjhData() {
        return $this->ljhData;
    }

    public function setLjhData($ljhData) {
        $this->ljhData = $ljhData;
    }

    public function getHxyData() {
        return $this->hxyData;
    }

    public function setHxyData($hxyData) {
        $this->hxyData = $hxyData;
    }

}
