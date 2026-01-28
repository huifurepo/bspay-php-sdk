<?php

namespace BsPaySdk\request\v4;

/**
 * 收款方信息
 *
 * @author sdk-generator
 * @Description
 */
class PayeeInfo {
    /**
     * 商户类别
     */
    private $merCatCode;
    /**
     * 二级商户代码
     */
    private $subId;
    /**
     * 二级商户名称
     */
    private $subName;
    /**
     * 终端号
     */
    private $termId;

    public function getMerCatCode() {
        return $this->merCatCode;
    }

    public function setMerCatCode($merCatCode) {
        $this->merCatCode = $merCatCode;
    }

    public function getSubId() {
        return $this->subId;
    }

    public function setSubId($subId) {
        $this->subId = $subId;
    }

    public function getSubName() {
        return $this->subName;
    }

    public function setSubName($subName) {
        $this->subName = $subName;
    }

    public function getTermId() {
        return $this->termId;
    }

    public function setTermId($termId) {
        $this->termId = $termId;
    }
}