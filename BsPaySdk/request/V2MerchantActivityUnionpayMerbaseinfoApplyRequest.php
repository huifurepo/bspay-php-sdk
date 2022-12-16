<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银联活动商户入驻
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantActivityUnionpayMerbaseinfoApplyRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 商户类型
     */
    private $merType;
    /**
     * 经营类型
     */
    private $dealType;
    /**
     * 所属行业（MCC）MERCHANT_01-自然人 需要传入，参考[银联MCC编码](https://paas.huifu.com/partners/api/#/csfl/api_csfl_ylmccbm) ；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：5311&lt;/font&gt;
     */
    private $mcc;
    /**
     * 负责人手机号
     */
    private $legalMobile;
    /**
     * 联系人身份证号
     */
    private $contractIdNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_ACTIVITY_UNIONPAY_MERBASEINFO_APPLY;
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

    public function getMerType() {
        return $this->merType;
    }

    public function setMerType($merType) {
        $this->merType = $merType;
    }

    public function getDealType() {
        return $this->dealType;
    }

    public function setDealType($dealType) {
        $this->dealType = $dealType;
    }

    public function getMcc() {
        return $this->mcc;
    }

    public function setMcc($mcc) {
        $this->mcc = $mcc;
    }

    public function getLegalMobile() {
        return $this->legalMobile;
    }

    public function setLegalMobile($legalMobile) {
        $this->legalMobile = $legalMobile;
    }

    public function getContractIdNo() {
        return $this->contractIdNo;
    }

    public function setContractIdNo($contractIdNo) {
        $this->contractIdNo = $contractIdNo;
    }

}
