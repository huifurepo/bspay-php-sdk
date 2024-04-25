<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 全域资金管理配置
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiEfpconfigRequest extends BaseRequest
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
     * 商户汇付id
     */
    private $huifuId;
    /**
     * 所属渠道商
     */
    private $upperHuifuId;
    /**
     * 开关
     */
    private $switchState;
    /**
     * 自动入账开关0:关闭 1:开通；switch_state为1时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1&lt;/font&gt;
     */
    private $outOrderAutoAcctFlag;
    /**
     * 支付手续费外扣汇付ID支付手续费外扣标记为1时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000109812123&lt;/font&gt;
     */
    private $outFeeHuifuid;
    /**
     * 全域资金开户使用的银行卡信息首次开通时必填 jsonObject格式
     */
    private $outOrderAcctCard;
    /**
     * 全域资金开户手续费首次开通时必填 jsonObject格式
     */
    private $outOrderAcctOpenFees;
    /**
     * 商户与其他支付机构签署的收单协议文件id首次开通时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $otherPaymentInstitutionsPic;
    /**
     * 银行类型
     */
    private $outFundsGateId;
    /**
     * 签约人信息switch_state为1时必填 jsonObject格式
     */
    private $signUserInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_EFPCONFIG;
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

    public function getUpperHuifuId() {
        return $this->upperHuifuId;
    }

    public function setUpperHuifuId($upperHuifuId) {
        $this->upperHuifuId = $upperHuifuId;
    }

    public function getSwitchState() {
        return $this->switchState;
    }

    public function setSwitchState($switchState) {
        $this->switchState = $switchState;
    }

    public function getOutOrderAutoAcctFlag() {
        return $this->outOrderAutoAcctFlag;
    }

    public function setOutOrderAutoAcctFlag($outOrderAutoAcctFlag) {
        $this->outOrderAutoAcctFlag = $outOrderAutoAcctFlag;
    }

    public function getOutFeeHuifuid() {
        return $this->outFeeHuifuid;
    }

    public function setOutFeeHuifuid($outFeeHuifuid) {
        $this->outFeeHuifuid = $outFeeHuifuid;
    }

    public function getOutOrderAcctCard() {
        return $this->outOrderAcctCard;
    }

    public function setOutOrderAcctCard($outOrderAcctCard) {
        $this->outOrderAcctCard = $outOrderAcctCard;
    }

    public function getOutOrderAcctOpenFees() {
        return $this->outOrderAcctOpenFees;
    }

    public function setOutOrderAcctOpenFees($outOrderAcctOpenFees) {
        $this->outOrderAcctOpenFees = $outOrderAcctOpenFees;
    }

    public function getOtherPaymentInstitutionsPic() {
        return $this->otherPaymentInstitutionsPic;
    }

    public function setOtherPaymentInstitutionsPic($otherPaymentInstitutionsPic) {
        $this->otherPaymentInstitutionsPic = $otherPaymentInstitutionsPic;
    }

    public function getOutFundsGateId() {
        return $this->outFundsGateId;
    }

    public function setOutFundsGateId($outFundsGateId) {
        $this->outFundsGateId = $outFundsGateId;
    }

    public function getSignUserInfo() {
        return $this->signUserInfo;
    }

    public function setSignUserInfo($signUserInfo) {
        $this->signUserInfo = $signUserInfo;
    }

}
