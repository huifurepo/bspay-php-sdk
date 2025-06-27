<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 全渠道订单分账明细操作
 *
 * @author sdk-generator
 * @Description
 */
class V2OcoOrderDetailOperateRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 分账数据源
     */
    private $busiSource;
    /**
     * 业务订单号
     */
    private $ocoOrderId;
    /**
     * 操作类型
     */
    private $operateType;
    /**
     * 支付方式枚举：BALANCE-余额支付 EFP-全域资金付款；备注：当operate_type&#x3D;SPLIT 立即分账时，pay_type必填，且若为退款，按原交易类型原路返回；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：BALANCE&lt;/font&gt;
     */
    private $payType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_OCO_ORDER_DETAIL_OPERATE;
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

    public function getBusiSource() {
        return $this->busiSource;
    }

    public function setBusiSource($busiSource) {
        $this->busiSource = $busiSource;
    }

    public function getOcoOrderId() {
        return $this->ocoOrderId;
    }

    public function setOcoOrderId($ocoOrderId) {
        $this->ocoOrderId = $ocoOrderId;
    }

    public function getOperateType() {
        return $this->operateType;
    }

    public function setOperateType($operateType) {
        $this->operateType = $operateType;
    }

    public function getPayType() {
        return $this->payType;
    }

    public function setPayType($payType) {
        $this->payType = $payType;
    }

}
