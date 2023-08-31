<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户分账配置(2022)
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantSplitConfigRequest extends BaseRequest
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
     * 商户汇付Id
     */
    private $huifuId;
    /**
     * 分账规则来源
     */
    private $ruleOrigin;
    /**
     * 分账开关
     */
    private $divFlag;
    /**
     * 最大分账比例
     */
    private $applyRatio;
    /**
     * 生效类型
     */
    private $startType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_SPLIT_CONFIG;
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

    public function getRuleOrigin() {
        return $this->ruleOrigin;
    }

    public function setRuleOrigin($ruleOrigin) {
        $this->ruleOrigin = $ruleOrigin;
    }

    public function getDivFlag() {
        return $this->divFlag;
    }

    public function setDivFlag($divFlag) {
        $this->divFlag = $divFlag;
    }

    public function getApplyRatio() {
        return $this->applyRatio;
    }

    public function setApplyRatio($applyRatio) {
        $this->applyRatio = $applyRatio;
    }

    public function getStartType() {
        return $this->startType;
    }

    public function setStartType($startType) {
        $this->startType = $startType;
    }

}
