<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易结算对账单查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeCheckFilequeryRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 文件生成日期
     */
    private $fileDate;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_CHECK_FILEQUERY;
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

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getFileDate() {
        return $this->fileDate;
    }

    public function setFileDate($fileDate) {
        $this->fileDate = $fileDate;
    }

}
