<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 快捷绑卡申请接口
 *
 * @author sdk-generator
 * @Description
 */
class V3QuickbuckleApplyRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 商户用户id
     */
    private $outCustId;
    /**
     * 银行卡号
     */
    private $cardNo;
    /**
     * 银行卡开户姓名
     */
    private $cardName;
    /**
     * 银行卡绑定身份证
     */
    private $certNo;
    /**
     * 个人证件有效期类型
     */
    private $certValidityType;
    /**
     * 个人证件有效期起始日
     */
    private $certBeginDate;
    /**
     * 个人证件有效期到期日长期有效不填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20420905&lt;/font&gt;
     */
    private $certEndDate;
    /**
     * 银行卡绑定手机号
     */
    private $mobileNo;
    /**
     * 挂网协议编号授权信息(招行绑卡需要上送)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：34463343&lt;/font&gt;
     */
    private $protocolNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_QUICKBUCKLE_APPLY;
    }


    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOutCustId() {
        return $this->outCustId;
    }

    public function setOutCustId($outCustId) {
        $this->outCustId = $outCustId;
    }

    public function getCardNo() {
        return $this->cardNo;
    }

    public function setCardNo($cardNo) {
        $this->cardNo = $cardNo;
    }

    public function getCardName() {
        return $this->cardName;
    }

    public function setCardName($cardName) {
        $this->cardName = $cardName;
    }

    public function getCertNo() {
        return $this->certNo;
    }

    public function setCertNo($certNo) {
        $this->certNo = $certNo;
    }

    public function getCertValidityType() {
        return $this->certValidityType;
    }

    public function setCertValidityType($certValidityType) {
        $this->certValidityType = $certValidityType;
    }

    public function getCertBeginDate() {
        return $this->certBeginDate;
    }

    public function setCertBeginDate($certBeginDate) {
        $this->certBeginDate = $certBeginDate;
    }

    public function getCertEndDate() {
        return $this->certEndDate;
    }

    public function setCertEndDate($certEndDate) {
        $this->certEndDate = $certEndDate;
    }

    public function getMobileNo() {
        return $this->mobileNo;
    }

    public function setMobileNo($mobileNo) {
        $this->mobileNo = $mobileNo;
    }

    public function getProtocolNo() {
        return $this->protocolNo;
    }

    public function setProtocolNo($protocolNo) {
        $this->protocolNo = $protocolNo;
    }

}
