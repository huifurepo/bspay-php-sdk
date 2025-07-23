<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 灵工个人用户进件
 *
 * @author sdk-generator
 * @Description
 */
class V2FlexibleIndvRequest extends BaseRequest
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
     * 渠道商/商户汇付Id
     */
    private $upperHuifuId;
    /**
     * 基本信息
     */
    private $basicInfo;
    /**
     * 卡信息
     */
    private $cardInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_FLEXIBLE_INDV;
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

    public function getBasicInfo() {
        return $this->basicInfo;
    }

    public function setBasicInfo($basicInfo) {
        $this->basicInfo = $basicInfo;
    }

    public function getCardInfo() {
        return $this->cardInfo;
    }

    public function setCardInfo($cardInfo) {
        $this->cardInfo = $cardInfo;
    }

}
