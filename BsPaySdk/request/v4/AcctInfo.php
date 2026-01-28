<?php

namespace BsPaySdk\request\v4;

/**
 * 分账明细
 *
 * @author sdk-generator
 * @Description
 */
class AcctInfo {
    /**
     * 分账金额 (单位元，需保留小数点后两位，例如：1.00,最低传入0.01)
     */
    private $divAmt;
    /**
     * 客户号
     */
    private $huifuId;
    /**
     * 账户号
     */
    private $acctId;
    /**
     * 分账百分比%
     */
    private $percentageDiv;
    /**
     * 账务日期
     */
    private $acctDate;

    public function getDivAmt() {
        return $this->divAmt;
    }

    public function setDivAmt($divAmt) {
        $this->divAmt = $divAmt;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getAcctId() {
        return $this->acctId;
    }

    public function setAcctId($acctId) {
        $this->acctId = $acctId;
    }

    public function getPercentageDiv() {
        return $this->percentageDiv;
    }

    public function setPercentageDiv($percentageDiv) {
        $this->percentageDiv = $percentageDiv;
    }

    public function getAcctDate() {
        return $this->acctDate;
    }

    public function setAcctDate($acctDate) {
        $this->acctDate = $acctDate;
    }
}