<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 终端解绑
 *
 * @author sdk-generator
 * @Description
 */
class V2TerminaldeviceManageUnbindRequest extends BaseRequest
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
     * 汇付ID
     */
    private $huifuId;
    /**
     * 终端号
     */
    private $deviceId;
    /**
     * 解绑原因
     */
    private $reason;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TERMINALDEVICE_MANAGE_UNBIND;
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

    public function getDeviceId() {
        return $this->deviceId;
    }

    public function setDeviceId($deviceId) {
        $this->deviceId = $deviceId;
    }

    public function getReason() {
        return $this->reason;
    }

    public function setReason($reason) {
        $this->reason = $reason;
    }

}
