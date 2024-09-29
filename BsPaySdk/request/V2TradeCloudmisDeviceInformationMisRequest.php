<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 终端云MIS接入
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeCloudmisDeviceInformationMisRequest extends BaseRequest
{

    /**
     * 终端设备号
     */
    private $deviceId;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 交易信息
     */
    private $jsonData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_CLOUDMIS_DEVICE_INFORMATION_MIS;
    }


    public function getDeviceId() {
        return $this->deviceId;
    }

    public function setDeviceId($deviceId) {
        $this->deviceId = $deviceId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getJsonData() {
        return $this->jsonData;
    }

    public function setJsonData($jsonData) {
        $this->jsonData = $jsonData;
    }

}
