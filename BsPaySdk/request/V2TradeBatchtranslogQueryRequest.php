<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 批量出金交易查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeBatchtranslogQueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 开始日期
     */
    private $beginDate;
    /**
     * 结束日期
     */
    private $endDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_BATCHTRANSLOG_QUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getBeginDate() {
        return $this->beginDate;
    }

    public function setBeginDate($beginDate) {
        $this->beginDate = $beginDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function setEndDate($endDate) {
        $this->endDate = $endDate;
    }

}
