<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 创建修改小票自定义入口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeElectronReceiptsCustomentrancesCreateRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 操作类型
     */
    private $operateType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ELECTRON_RECEIPTS_CUSTOMENTRANCES_CREATE;
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

    public function getOperateType() {
        return $this->operateType;
    }

    public function setOperateType($operateType) {
        $this->operateType = $operateType;
    }

}
