<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 三方门店绑定（二阶段）
 *
 * @author sdk-generator
 * @Description
 */
class V2LinkappStoreBindRequest extends BaseRequest
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
     * 平台类型
     */
    private $platformType;
    /**
     * 门店ID
     */
    private $openShopUuid;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_LINKAPP_STORE_BIND;
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

    public function getPlatformType() {
        return $this->platformType;
    }

    public function setPlatformType($platformType) {
        $this->platformType = $platformType;
    }

    public function getOpenShopUuid() {
        return $this->openShopUuid;
    }

    public function setOpenShopUuid($openShopUuid) {
        $this->openShopUuid = $openShopUuid;
    }

}
