<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 新增绑定卡
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletCardAddRequest extends BaseRequest
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
     * 钱包用户ID
     */
    private $userHuifuId;
    /**
     * 跳转地址
     */
    private $frontUrl;
    /**
     * 设备信息域
     */
    private $trxDeviceInfo ;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_WALLET_CARD_ADD;
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

    public function getUserHuifuId() {
        return $this->userHuifuId;
    }

    public function setUserHuifuId($userHuifuId) {
        $this->userHuifuId = $userHuifuId;
    }

    public function getFrontUrl() {
        return $this->frontUrl;
    }

    public function setFrontUrl($frontUrl) {
        $this->frontUrl = $frontUrl;
    }

    public function getTrxDeviceInfo () {
        return $this->trxDeviceInfo ;
    }

    public function setTrxDeviceInfo ($trxDeviceInfo ) {
        $this->trxDeviceInfo  = $trxDeviceInfo ;
    }

}
