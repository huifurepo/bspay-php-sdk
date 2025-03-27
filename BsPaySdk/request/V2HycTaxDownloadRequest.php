<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 完税凭证下载
 *
 * @author sdk-generator
 * @Description
 */
class V2HycTaxDownloadRequest extends BaseRequest
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
     * 商户汇付id
     */
    private $huifuId;
    /**
     * 附件编号
     */
    private $taxId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_HYC_TAX_DOWNLOAD;
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

    public function getTaxId() {
        return $this->taxId;
    }

    public function setTaxId($taxId) {
        $this->taxId = $taxId;
    }

}
