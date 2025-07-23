<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 灵工企业商户业务修改
 *
 * @author sdk-generator
 * @Description
 */
class V2FlexibleEntModifyRequest extends BaseRequest
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
     * 商户汇付id
     */
    private $huifuId;
    /**
     * 渠道商汇付ID
     */
    private $upperHuifuId;
    /**
     * 商户基本信息jsonObject格式；其中的contact_info和legal_info联系人和法人信息可能在卡信息修改时需要
     */
    private $basicInfo;
    /**
     * 签约人
     */
    private $signUserInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_FLEXIBLE_ENT_MODIFY;
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

    public function getUpperHuifuId() {
        return $this->upperHuifuId;
    }

    public function setUpperHuifuId($upperHuifuId) {
        $this->upperHuifuId = $upperHuifuId;
    }

    public function getBasicInfo() {
        return $this->basicInfo;
    }

    public function setBasicInfo($basicInfo) {
        $this->basicInfo = $basicInfo;
    }

    public function getSignUserInfo() {
        return $this->signUserInfo;
    }

    public function setSignUserInfo($signUserInfo) {
        $this->signUserInfo = $signUserInfo;
    }

}
