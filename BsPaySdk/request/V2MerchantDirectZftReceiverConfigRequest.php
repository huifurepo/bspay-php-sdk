<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 直付通分账关系绑定解绑
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantDirectZftReceiverConfigRequest extends BaseRequest
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
     * 汇付ID
     */
    private $huifuId;
    /**
     * 开发者的应用ID
     */
    private $appId;
    /**
     * 分账开关
     */
    private $splitFlag;
    /**
     * 分账接收方列表
     */
    private $zftSplitReceiverList;
    /**
     * 状态
     */
    private $status;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_DIRECT_ZFT_RECEIVER_CONFIG;
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

    public function getAppId() {
        return $this->appId;
    }

    public function setAppId($appId) {
        $this->appId = $appId;
    }

    public function getSplitFlag() {
        return $this->splitFlag;
    }

    public function setSplitFlag($splitFlag) {
        $this->splitFlag = $splitFlag;
    }

    public function getZftSplitReceiverList() {
        return $this->zftSplitReceiverList;
    }

    public function setZftSplitReceiverList($zftSplitReceiverList) {
        $this->zftSplitReceiverList = $zftSplitReceiverList;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}
