<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 统一进件页面版查询
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiStatusQueryRequest extends BaseRequest
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
     * 门店号
     */
    private $storeId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_STATUS_QUERY;
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

    public function getStoreId() {
        return $this->storeId;
    }

    public function setStoreId($storeId) {
        $this->storeId = $storeId;
    }

}
