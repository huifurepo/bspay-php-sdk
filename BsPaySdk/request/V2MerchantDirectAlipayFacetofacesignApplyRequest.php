<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 支付宝直连-申请当面付代签约
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantDirectAlipayFacetofacesignApplyRequest extends BaseRequest
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
     * 上级主体ID
     */
    private $upperHuifuId;
    /**
     * 支付宝经营类目
     */
    private $directCategory;
    /**
     * 开发者的应用ID
     */
    private $appId;
    /**
     * 联系人姓名
     */
    private $contactName;
    /**
     * 联系人手机号
     */
    private $contactMobileNo;
    /**
     * 联系人电子邮箱
     */
    private $contactEmail;
    /**
     * 商户账号
     */
    private $account;
    /**
     * 服务费率（%）0.38~3之间，精确到0.01。当签约且授权sign_and_auth&#x3D;Y时，必填。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.38&lt;/font&gt;
     */
    private $rate;
    /**
     * 文件列表
     */
    private $fileList;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_DIRECT_ALIPAY_FACETOFACESIGN_APPLY;
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

    public function getDirectCategory() {
        return $this->directCategory;
    }

    public function setDirectCategory($directCategory) {
        $this->directCategory = $directCategory;
    }

    public function getAppId() {
        return $this->appId;
    }

    public function setAppId($appId) {
        $this->appId = $appId;
    }

    public function getContactName() {
        return $this->contactName;
    }

    public function setContactName($contactName) {
        $this->contactName = $contactName;
    }

    public function getContactMobileNo() {
        return $this->contactMobileNo;
    }

    public function setContactMobileNo($contactMobileNo) {
        $this->contactMobileNo = $contactMobileNo;
    }

    public function getContactEmail() {
        return $this->contactEmail;
    }

    public function setContactEmail($contactEmail) {
        $this->contactEmail = $contactEmail;
    }

    public function getAccount() {
        return $this->account;
    }

    public function setAccount($account) {
        $this->account = $account;
    }

    public function getRate() {
        return $this->rate;
    }

    public function setRate($rate) {
        $this->rate = $rate;
    }

    public function getFileList() {
        return $this->fileList;
    }

    public function setFileList($fileList) {
        $this->fileList = $fileList;
    }

}
