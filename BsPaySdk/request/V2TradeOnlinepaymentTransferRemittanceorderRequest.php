<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 汇付入账查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentTransferRemittanceorderRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 原请求开始日期
     */
    private $orgReqStartDate;
    /**
     * 原请求结束日期
     */
    private $orgReqEndDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_TRANSFER_REMITTANCEORDER;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOrgReqStartDate() {
        return $this->orgReqStartDate;
    }

    public function setOrgReqStartDate($orgReqStartDate) {
        $this->orgReqStartDate = $orgReqStartDate;
    }

    public function getOrgReqEndDate() {
        return $this->orgReqEndDate;
    }

    public function setOrgReqEndDate($orgReqEndDate) {
        $this->orgReqEndDate = $orgReqEndDate;
    }

}
