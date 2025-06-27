<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 美团卡券核销
 *
 * @author sdk-generator
 * @Description
 */
class V2CouponMeituanConsumeRequest extends BaseRequest
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
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 门店绑定流水号
     */
    private $bindId;
    /**
     * 核销券
     */
    private $receiptCodeInfos;
    /**
     * 登录账号
     */
    private $appShopAccount;
    /**
     * 登录用户名
     */
    private $appShopAccountName;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_COUPON_MEITUAN_CONSUME;
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

    public function getBindId() {
        return $this->bindId;
    }

    public function setBindId($bindId) {
        $this->bindId = $bindId;
    }

    public function getReceiptCodeInfos() {
        return $this->receiptCodeInfos;
    }

    public function setReceiptCodeInfos($receiptCodeInfos) {
        $this->receiptCodeInfos = $receiptCodeInfos;
    }

    public function getAppShopAccount() {
        return $this->appShopAccount;
    }

    public function setAppShopAccount($appShopAccount) {
        $this->appShopAccount = $appShopAccount;
    }

    public function getAppShopAccountName() {
        return $this->appShopAccountName;
    }

    public function setAppShopAccountName($appShopAccountName) {
        $this->appShopAccountName = $appShopAccountName;
    }

}
