<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 云MIS订单详情查询接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeCloudmisOrderDetailRequest extends BaseRequest
{

    /**
     * 原MIS请求商户号
     */
    private $orgHuifuId;
    /**
     * 原MIS请求终端号
     */
    private $orgDeviceId;
    /**
     * 原MIS请求日期
     */
    private $orgReqDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_CLOUDMIS_ORDER_DETAIL;
    }


    public function getOrgHuifuId() {
        return $this->orgHuifuId;
    }

    public function setOrgHuifuId($orgHuifuId) {
        $this->orgHuifuId = $orgHuifuId;
    }

    public function getOrgDeviceId() {
        return $this->orgDeviceId;
    }

    public function setOrgDeviceId($orgDeviceId) {
        $this->orgDeviceId = $orgDeviceId;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

}
