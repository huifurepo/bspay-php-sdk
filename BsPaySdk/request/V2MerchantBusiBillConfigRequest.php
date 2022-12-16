<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易结算对账文件配置
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiBillConfigRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 汇付机构编号
     */
    private $huifuId;
    /**
     * 对账文件生成开关
     */
    private $reconSendFlag;
    /**
     * 对账单类型
     */
    private $fileType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_BILL_CONFIG;
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

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getReconSendFlag() {
        return $this->reconSendFlag;
    }

    public function setReconSendFlag($reconSendFlag) {
        $this->reconSendFlag = $reconSendFlag;
    }

    public function getFileType() {
        return $this->fileType;
    }

    public function setFileType($fileType) {
        $this->fileType = $fileType;
    }

}
