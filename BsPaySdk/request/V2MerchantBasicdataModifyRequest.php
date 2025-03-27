<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户基本信息修改
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBasicdataModifyRequest extends BaseRequest
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
     * 直属渠道号
     */
    private $upperHuifuId;
    /**
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 签约人jsonObject格式；agreement_info中选择电子签约时必填；个人商户填本人信息。
     */
    private $signUserInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BASICDATA_MODIFY;
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

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getSignUserInfo() {
        return $this->signUserInfo;
    }

    public function setSignUserInfo($signUserInfo) {
        $this->signUserInfo = $signUserInfo;
    }

}
