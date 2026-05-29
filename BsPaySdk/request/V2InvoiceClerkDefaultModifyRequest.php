<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 设置默认开票员
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceClerkDefaultModifyRequest extends BaseRequest
{

    /**
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 登录账号
     */
    private $loginAccount;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_CLERK_DEFAULT_MODIFY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getLoginAccount() {
        return $this->loginAccount;
    }

    public function setLoginAccount($loginAccount) {
        $this->loginAccount = $loginAccount;
    }

}
