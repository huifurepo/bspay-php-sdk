<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 绑定终端信息查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TerminaldeviceDeviceinfoQueryRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 分页大小
     */
    private $pageSize;
    /**
     * 当前页码
     */
    private $pageNum;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TERMINALDEVICE_DEVICEINFO_QUERY;
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

    public function getPageSize() {
        return $this->pageSize;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
    }

    public function getPageNum() {
        return $this->pageNum;
    }

    public function setPageNum($pageNum) {
        $this->pageNum = $pageNum;
    }

}
