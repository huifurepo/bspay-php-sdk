<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 发票开具
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceOpenRequest extends BaseRequest
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
     * 渠道号汇付商户号为空时，必传；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000109812124&lt;/font&gt;
     */
    private $channelId;
    /**
     * 发票类型
     */
    private $ivcType;
    /**
     * 开票类型
     */
    private $openType;
    /**
     * 购方单位名称
     */
    private $buyerName;
    /**
     * 含税合计金额(元)
     */
    private $orderAmt;
    /**
     * 冲红原因open_type&#x3D;1时必填01：开票有误02：销货退回03：服务终止04：销售转让
     */
    private $redApplyReason;
    /**
     * 冲红申请来源open_type&#x3D;1时必填01：销方02：购方
     */
    private $redApplySource;
    /**
     * 原发票代码openType&#x3D;1时必填；参见[发票右上角](https://paas.huifu.com/open/doc/api/#/fp/api_fp_yanglitu.md)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：144032209110&lt;/font&gt;
     */
    private $oriIvcCode;
    /**
     * 原发票号码openType&#x3D;1时必填；参见[发票右上角](https://paas.huifu.com/open/doc/api/#/fp/api_fp_yanglitu.md)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20685767&lt;/font&gt;
     */
    private $oriIvcNumber;
    /**
     * 开票商品信息
     */
    private $goodsInfos;
    /**
     * 开票人信息
     */
    private $payerInfo;
    /**
     * 不动产销售特殊字段specialFlag为05时，必填；jsonArray格式
     */
    private $estateSales;
    /**
     * 不动产租赁特殊字段specialFlag为16时，必填；jsonArray格式
     */
    private $estateLease;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_OPEN;
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

    public function getChannelId() {
        return $this->channelId;
    }

    public function setChannelId($channelId) {
        $this->channelId = $channelId;
    }

    public function getIvcType() {
        return $this->ivcType;
    }

    public function setIvcType($ivcType) {
        $this->ivcType = $ivcType;
    }

    public function getOpenType() {
        return $this->openType;
    }

    public function setOpenType($openType) {
        $this->openType = $openType;
    }

    public function getBuyerName() {
        return $this->buyerName;
    }

    public function setBuyerName($buyerName) {
        $this->buyerName = $buyerName;
    }

    public function getOrderAmt() {
        return $this->orderAmt;
    }

    public function setOrderAmt($orderAmt) {
        $this->orderAmt = $orderAmt;
    }

    public function getRedApplyReason() {
        return $this->redApplyReason;
    }

    public function setRedApplyReason($redApplyReason) {
        $this->redApplyReason = $redApplyReason;
    }

    public function getRedApplySource() {
        return $this->redApplySource;
    }

    public function setRedApplySource($redApplySource) {
        $this->redApplySource = $redApplySource;
    }

    public function getOriIvcCode() {
        return $this->oriIvcCode;
    }

    public function setOriIvcCode($oriIvcCode) {
        $this->oriIvcCode = $oriIvcCode;
    }

    public function getOriIvcNumber() {
        return $this->oriIvcNumber;
    }

    public function setOriIvcNumber($oriIvcNumber) {
        $this->oriIvcNumber = $oriIvcNumber;
    }

    public function getGoodsInfos() {
        return $this->goodsInfos;
    }

    public function setGoodsInfos($goodsInfos) {
        $this->goodsInfos = $goodsInfos;
    }

    public function getPayerInfo() {
        return $this->payerInfo;
    }

    public function setPayerInfo($payerInfo) {
        $this->payerInfo = $payerInfo;
    }

    public function getEstateSales() {
        return $this->estateSales;
    }

    public function setEstateSales($estateSales) {
        $this->estateSales = $estateSales;
    }

    public function getEstateLease() {
        return $this->estateLease;
    }

    public function setEstateLease($estateLease) {
        $this->estateLease = $estateLease;
    }

}
