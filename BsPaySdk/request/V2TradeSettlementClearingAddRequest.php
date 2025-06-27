<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 电子账户资金清分
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeSettlementClearingAddRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 清分文件ID
     */
    private $fileId;
    /**
     * 交易日期
     */
    private $transDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_SETTLEMENT_CLEARING_ADD;
    }


    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getFileId() {
        return $this->fileId;
    }

    public function setFileId($fileId) {
        $this->fileId = $fileId;
    }

    public function getTransDate() {
        return $this->transDate;
    }

    public function setTransDate($transDate) {
        $this->transDate = $transDate;
    }

}
