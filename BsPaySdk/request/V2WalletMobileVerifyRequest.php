<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 钱包绑定手机号验证
 *
 * @author sdk-generator
 * @Description
 */
class V2WalletMobileVerifyRequest extends BaseRequest
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
     * 钱包用户ID斗拱系统生成的钱包用户ID。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123122343&lt;/font&gt;&lt;br/&gt;验证类型为2-密码修改和3-密码重置时，必须提供钱包用户的汇付ID。
     */
    private $userHuifuId;
    /**
     * 用户手机号
     */
    private $mobileNo;
    /**
     * 验证类型
     */
    private $type;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_WALLET_MOBILE_VERIFY;
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

    public function getUserHuifuId() {
        return $this->userHuifuId;
    }

    public function setUserHuifuId($userHuifuId) {
        $this->userHuifuId = $userHuifuId;
    }

    public function getMobileNo() {
        return $this->mobileNo;
    }

    public function setMobileNo($mobileNo) {
        $this->mobileNo = $mobileNo;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

}
