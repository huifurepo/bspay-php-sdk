<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 提现记录查询
 *
 * @author sdk-generator
 * @Description
 */
class V2LlaDywithdrawQueryRequest extends BaseRequest
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
     * 代运营汇付id
     */
    private $agencyHuifuId;
    /**
     * 商家汇付id
     */
    private $merchantHuifuId;
    /**
     * 平台
     */
    private $platformType;
    /**
     * 提现发起开始日期
     */
    private $startDate;
    /**
     * 查询游标
     */
    private $cursor;
    /**
     * 页大小
     */
    private $size;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_LLA_DYWITHDRAW_QUERY;
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

    public function getAgencyHuifuId() {
        return $this->agencyHuifuId;
    }

    public function setAgencyHuifuId($agencyHuifuId) {
        $this->agencyHuifuId = $agencyHuifuId;
    }

    public function getMerchantHuifuId() {
        return $this->merchantHuifuId;
    }

    public function setMerchantHuifuId($merchantHuifuId) {
        $this->merchantHuifuId = $merchantHuifuId;
    }

    public function getPlatformType() {
        return $this->platformType;
    }

    public function setPlatformType($platformType) {
        $this->platformType = $platformType;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    public function getCursor() {
        return $this->cursor;
    }

    public function setCursor($cursor) {
        $this->cursor = $cursor;
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

}
