<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易结算对账文件重新生成
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeCheckReplayRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 交易日期
     */
    private $reqDate;
    /**
     * 汇付机构编号
     */
    private $huifuId;
    /**
     * 文件类型
     */
    private $fileType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_CHECK_REPLAY;
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

    public function getFileType() {
        return $this->fileType;
    }

    public function setFileType($fileType) {
        $this->fileType = $fileType;
    }

}
