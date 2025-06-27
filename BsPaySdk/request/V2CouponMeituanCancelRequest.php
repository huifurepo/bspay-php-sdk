<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 美团卡券撤销
 *
 * @author sdk-generator
 * @Description
 */
class V2CouponMeituanCancelRequest extends BaseRequest
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
     * 登录账号
     */
    private $appShopAccount;
    /**
     * 登录用户名
     */
    private $appShopAccountName;
    /**
     * 券码
     */
    private $receiptCode;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_COUPON_MEITUAN_CANCEL;
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

    public function getReceiptCode() {
        return $this->receiptCode;
    }

    public function setReceiptCode($receiptCode) {
        $this->receiptCode = $receiptCode;
    }

}
