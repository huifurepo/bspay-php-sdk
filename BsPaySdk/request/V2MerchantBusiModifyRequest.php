<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户业务开通修改
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiModifyRequest extends BaseRequest
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
     * 是否交易手续费外扣
     */
    private $outFeeFlag;
    /**
     * 交易手续费外扣汇付ID
     */
    private $outFeeHuifuid;
    /**
     * *线上业务类型编码*开通快捷、网银、余额支付、分账必填；参见[线上业务类型编码及补充材料说明](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/kyc/KYC-%E7%BA%BF%E4%B8%8A%E4%B8%9A%E5%8A%A1%E7%B1%BB%E5%9E%8B%E7%BC%96%E7%A0%81%E5%8F%8A%E8%A1%A5%E5%85%85%E6%9D%90%E6%96%99%E8%AF%B4%E6%98%8E.xlsx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：H7999AL&lt;/font&gt;
     */
    private $onlineBusiType;
    /**
     * 签约人jsonObject格式；agreement_info中选择电子签约时必填；个人商户填本人信息。
     */
    private $signUserInfo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_MODIFY;
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

    public function getOutFeeFlag() {
        return $this->outFeeFlag;
    }

    public function setOutFeeFlag($outFeeFlag) {
        $this->outFeeFlag = $outFeeFlag;
    }

    public function getOutFeeHuifuid() {
        return $this->outFeeHuifuid;
    }

    public function setOutFeeHuifuid($outFeeHuifuid) {
        $this->outFeeHuifuid = $outFeeHuifuid;
    }

    public function getOnlineBusiType() {
        return $this->onlineBusiType;
    }

    public function setOnlineBusiType($onlineBusiType) {
        $this->onlineBusiType = $onlineBusiType;
    }

    public function getSignUserInfo() {
        return $this->signUserInfo;
    }

    public function setSignUserInfo($signUserInfo) {
        $this->signUserInfo = $signUserInfo;
    }

}
