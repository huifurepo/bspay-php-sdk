<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 全渠道订单分账计算
 *
 * @author sdk-generator
 * @Description
 */
class V2OcoOrderCalculateRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求时间
     */
    private $reqDate;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 分账数据源
     */
    private $busiSource;
    /**
     * 业务订单号
     */
    private $ocoOrderId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_OCO_ORDER_CALCULATE;
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

    public function getBusiSource() {
        return $this->busiSource;
    }

    public function setBusiSource($busiSource) {
        $this->busiSource = $busiSource;
    }

    public function getOcoOrderId() {
        return $this->ocoOrderId;
    }

    public function setOcoOrderId($ocoOrderId) {
        $this->ocoOrderId = $ocoOrderId;
    }

}
