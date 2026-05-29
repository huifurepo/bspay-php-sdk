<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 开票商品查询
 *
 * @author sdk-generator
 * @Description
 */
class V2InvoiceManageGoodsQuerylistRequest extends BaseRequest
{

    /**
     * 汇付商户号
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_INVOICE_MANAGE_GOODS_QUERYLIST;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

}
