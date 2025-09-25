<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 代运营代扣业务配置
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiLlaconfigRequest extends BaseRequest
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
     * 代运营配置json字符串，业务角色为AGENCY:代运营时必填
     */
    private $llaAgencyConfig;
    /**
     * 商家配置json字符串，业务角色为MERCHANT:商家时必填
     */
    private $llaMerchantConfig;
    /**
     * 纸质协议文件协议类型为纸质且业务角色不为空时必填，文件类型F633；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $paperAgreementFile;
    /**
     * 签约人信息json字符串，协议类型为电子时必填
     */
    private $signUserInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_LLACONFIG;
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

    public function getLlaAgencyConfig() {
        return $this->llaAgencyConfig;
    }

    public function setLlaAgencyConfig($llaAgencyConfig) {
        $this->llaAgencyConfig = $llaAgencyConfig;
    }

    public function getLlaMerchantConfig() {
        return $this->llaMerchantConfig;
    }

    public function setLlaMerchantConfig($llaMerchantConfig) {
        $this->llaMerchantConfig = $llaMerchantConfig;
    }

    public function getPaperAgreementFile() {
        return $this->paperAgreementFile;
    }

    public function setPaperAgreementFile($paperAgreementFile) {
        $this->paperAgreementFile = $paperAgreementFile;
    }

    public function getSignUserInfo() {
        return $this->signUserInfo;
    }

    public function setSignUserInfo($signUserInfo) {
        $this->signUserInfo = $signUserInfo;
    }

}
