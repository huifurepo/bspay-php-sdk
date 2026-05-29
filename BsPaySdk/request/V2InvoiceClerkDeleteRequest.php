<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 开票员删除
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceClerkDeleteRequest extends BaseRequest
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
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 登录账号
     */
    private $loginAccount;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_CLERK_DELETE;
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

    public function getLoginAccount() {
        return $this->loginAccount;
    }

    public function setLoginAccount($loginAccount) {
        $this->loginAccount = $loginAccount;
    }

}
