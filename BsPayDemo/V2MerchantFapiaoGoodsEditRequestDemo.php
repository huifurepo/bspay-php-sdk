<?php

/**
 * 开票商品修改 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantFapiaoGoodsEditRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantFapiaoGoodsEditRequest;

// 2.组装请求参数
$request = new V2MerchantFapiaoGoodsEditRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 汇付商户号
$request->setHuifuId("6666000123123123");
// 商品id
$request->setGoodsId("G558461047849918464");
// 是否默认
$request->setIsDefault("Y");

// 设置非必填字段
$extendInfoMap = getExtendInfos();
$request->setExtendInfo($extendInfoMap);

// 3. 发起API调用
$client = new BsPayClient();
$result = $client->postRequest($request);
$respData = $result->getRspDatas();
if (!$result || $result->isError()) {  //失败处理
    var_dump($result -> getErrorInfo());
} else {    //成功处理
    var_dump($result);
}

/**
 * 非必填字段
 *
 */
function getExtendInfos() {
    // 设置非必填字段
    $extendInfoMap = array();
    // 商品名称
    $extendInfoMap["goods_name"]= "irure aliqua dolore sed";
    // 税率
    $extendInfoMap["tax_rate"]= "1";
    // 订单商品明细
    $extendInfoMap["order_goods_detail"]= "你好";
    // 规格型号
    $extendInfoMap["goods_model"]= "12345678901234567890123456789012";
    // 计量单位
    $extendInfoMap["goods_unit"]= "2";
    // 单价
    $extendInfoMap["goods_price"]= "2";
    // 含税标识
    $extendInfoMap["is_price_con_tax"]= "0";
    // 优惠政策标识
    $extendInfoMap["preferential_flag"]= "0";
    // 零税率标示
    $extendInfoMap["zero_tax_rate_flag"]= "";
    // 增值税特殊管理
    $extendInfoMap["add_tax_spec_manage"]= "";
    // 说明
    $extendInfoMap["ivc_remark"]= "sss";
    // 生效状态
    $extendInfoMap["stat"]= "N";
    return $extendInfoMap;
}


