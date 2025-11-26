<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银行卡代发
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeSettlementSurrogateRequest extends BaseRequest
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
     * 代发金额
     */
    private $cashAmt;
    /**
     * 代发用途描述
     */
    private $purposeDesc;
    /**
     * 省份选填，参见[代发省市地区码](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/area/%E6%96%97%E6%8B%B1%E4%BB%A3%E5%8F%91%E7%9C%81%E4%BB%BD%E5%9C%B0%E5%8C%BA%E7%BC%96%E7%A0%81.xlsx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0013&lt;/font&gt;&lt;br/&gt;对公代发(省份+地区)与联行号信息二选一填入；对私代发非必填；
     */
    private $province;
    /**
     * 地区选填，参见[代发省市地区码](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/area/%E6%96%97%E6%8B%B1%E4%BB%A3%E5%8F%91%E7%9C%81%E4%BB%BD%E5%9C%B0%E5%8C%BA%E7%BC%96%E7%A0%81.xlsx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1301&lt;/font&gt;&lt;br/&gt;对公代发(省份+地区)与联行号信息二选一填入；对私代发非必填；
     */
    private $area;
    /**
     * 银行编号参考： [银行编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_yhbm)； &lt;font color&#x3D;&quot;green&quot;&gt;&lt;br/&gt; 选填 ，card_acct_type&#x3D;E 时必填， 示例值：01040000&lt;/font&gt;
     */
    private $bankCode;
    /**
     * 联行号选填，参见：[银行支行编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_yhzhbm) &lt;font color&#x3D;&quot;green&quot;&gt;示例值：102290026507&lt;/font&gt;&lt;br/&gt;对公代发(省份+地区)与联行号信息二选一填入；对私代发非必填；
     */
    private $correspondentCode;
    /**
     * 银行卡用户名
     */
    private $bankAccountName;
    /**
     * 对公对私标识
     */
    private $cardAcctType;
    /**
     * 银行账号密文
     */
    private $bankCardNoCrypt;
    /**
     * 证件号密文
     */
    private $certificateNoCrypt;
    /**
     * 证件类型对私必填，类型&lt;br/&gt;01：身份证&lt;br/&gt;03：护照（国内）&lt;br/&gt;09：外国人居留证&lt;br/&gt;15：港澳台居住证&lt;br/&gt;16：回乡证&lt;br/&gt;17：台胞证&lt;br/&gt;
     */
    private $certificateType;
    /**
     * 到账日期类型
     */
    private $intoAcctDateType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_SETTLEMENT_SURROGATE;
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

    public function getCashAmt() {
        return $this->cashAmt;
    }

    public function setCashAmt($cashAmt) {
        $this->cashAmt = $cashAmt;
    }

    public function getPurposeDesc() {
        return $this->purposeDesc;
    }

    public function setPurposeDesc($purposeDesc) {
        $this->purposeDesc = $purposeDesc;
    }

    public function getProvince() {
        return $this->province;
    }

    public function setProvince($province) {
        $this->province = $province;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function getBankCode() {
        return $this->bankCode;
    }

    public function setBankCode($bankCode) {
        $this->bankCode = $bankCode;
    }

    public function getCorrespondentCode() {
        return $this->correspondentCode;
    }

    public function setCorrespondentCode($correspondentCode) {
        $this->correspondentCode = $correspondentCode;
    }

    public function getBankAccountName() {
        return $this->bankAccountName;
    }

    public function setBankAccountName($bankAccountName) {
        $this->bankAccountName = $bankAccountName;
    }

    public function getCardAcctType() {
        return $this->cardAcctType;
    }

    public function setCardAcctType($cardAcctType) {
        $this->cardAcctType = $cardAcctType;
    }

    public function getBankCardNoCrypt() {
        return $this->bankCardNoCrypt;
    }

    public function setBankCardNoCrypt($bankCardNoCrypt) {
        $this->bankCardNoCrypt = $bankCardNoCrypt;
    }

    public function getCertificateNoCrypt() {
        return $this->certificateNoCrypt;
    }

    public function setCertificateNoCrypt($certificateNoCrypt) {
        $this->certificateNoCrypt = $certificateNoCrypt;
    }

    public function getCertificateType() {
        return $this->certificateType;
    }

    public function setCertificateType($certificateType) {
        $this->certificateType = $certificateType;
    }

    public function getIntoAcctDateType() {
        return $this->intoAcctDateType;
    }

    public function setIntoAcctDateType($intoAcctDateType) {
        $this->intoAcctDateType = $intoAcctDateType;
    }

}
