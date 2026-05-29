<?php

/**
 * 开票商品新增 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2InvoiceManageGoodsAddRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2InvoiceManageGoodsAddRequest;

// 2.组装请求参数
$request = new V2InvoiceManageGoodsAddRequest();
// 汇付商户号
$request->setHuifuId("6666000123123123");
// 商品名称
$request->setGoodsName("sint amet minim");
// 税收分类编码
// $request->setTaxCode("test");
// 税率
$request->setTaxRate("0.130");
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
    // 请求日期
    $extendInfoMap["req_date"]= date("Ymd");
    // 请求流水号
    $extendInfoMap["req_seq_id"]= date("YmdHis").mt_rand();
    // 订单商品明细
    $extendInfoMap["order_goods_detail"]= "order_goods_detail";
    // 规格型号
    $extendInfoMap["goods_model"]= "id dolor ";
    // 计量单位
    $extendInfoMap["goods_unit"]= "单位元";
    // 单价
    $extendInfoMap["goods_price"]= "1.23";
    // 含税标识
    $extendInfoMap["is_price_con_tax"]= "0";
    // 优惠政策标识
    $extendInfoMap["preferential_flag"]= "0";
    // 零税率标示
    $extendInfoMap["zero_tax_rate_flag"]= "";
    // 增值税特殊管理
    $extendInfoMap["add_tax_spec_manage"]= "";
    // 说明
    $extendInfoMap["ivc_remark"]= "ivc_remark";
    return $extendInfoMap;
}


