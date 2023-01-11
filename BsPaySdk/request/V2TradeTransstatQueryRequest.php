<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 批量交易状态查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeTransstatQueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 页码
     */
    private $pageNo;
    /**
     * 页大小
     */
    private $pageSize;
    /**
     * 请求日期
     */
    private $reqDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_TRANSSTAT_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getPageNo() {
        return $this->pageNo;
    }

    public function setPageNo($pageNo) {
        $this->pageNo = $pageNo;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
    }

    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

}
