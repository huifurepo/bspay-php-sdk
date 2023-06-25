<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银行列表查询
 *
 * @author sdk-generator
 * @Description
 */
class V2QuickbuckleBankQueryRequest extends BaseRequest
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
     * 业务类型
     */
    private $bizType;
    /**
     * 借贷类型
     */
    private $dcType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_QUICKBUCKLE_BANK_QUERY;
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

    public function getBizType() {
        return $this->bizType;
    }

    public function setBizType($bizType) {
        $this->bizType = $bizType;
    }

    public function getDcType() {
        return $this->dcType;
    }

    public function setDcType($dcType) {
        $this->dcType = $dcType;
    }

}
