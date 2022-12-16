<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银行卡分期支持银行查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeBankinstallmentinfoQueryRequest extends BaseRequest
{

    /**
     * 页码
     */
    private $pageNum;
    /**
     * 每页条数
     */
    private $pageSize;
    /**
     * 产品号
     */
    private $productId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_BANKINSTALLMENTINFO_QUERY;
    }


    public function getPageNum() {
        return $this->pageNum;
    }

    public function setPageNum($pageNum) {
        $this->pageNum = $pageNum;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

}
