<?php

namespace BsPaySdk\request\v4;

/**
 * 分账对象
 *
 * @author sdk-generator
 * @Description
 */
class AcctSplitBunch
{
    /**
     * 百分比分账标志
     */
    private $percentageFlag;
    /**
     * 是否净值分账
     */
    private $isCleanSplit;
    /**
     * 分账明细
     */
    private $acctInfos;

    public function getPercentageFlag() {
        return $this->percentageFlag;
    }

    public function setPercentageFlag($percentageFlag) {
        $this->percentageFlag = $percentageFlag;
    }

    public function getIsCleanSplit() {
        return $this->isCleanSplit;
    }

    public function setIsCleanSplit($isCleanSplit) {
        $this->isCleanSplit = $isCleanSplit;
    }

    public function getAcctInfos() {
        return $this->acctInfos;
    }

    public function setAcctInfos($acctInfos) {
        $this->acctInfos = $acctInfos;
    }
}