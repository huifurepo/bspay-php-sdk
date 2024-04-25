<?php

/**
 * 自助扫码开票 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2InvoiceSelfscanopenRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2InvoiceSelfscanopenRequest;

// 2.组装请求参数
$request = new V2InvoiceSelfscanopenRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 汇付商户号
$request->setHuifuId("6666000103675282");
// 发票类型
// $request->setIvcType("test");
// 开票类型
// $request->setOpenType("test");
// 含税合计金额（元）
// $request->setOrderAmt("test");
// 开票商品信息
// $request->setGoodsInfos(getGoodsInfosRc());
// 开票人信息
// $request->setPayerInfo(getPayerInfo());

// 设置非必填字段
$extendInfoMap = getExtendInfos();
$request->setExtendInfo($extendInfoMap);

// 3. 发起API调用
$client = new BsPayClient();
$result = $client->postRequest($request);
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
    // 税控盘编号
    // $extendInfoMap["tax_device_id"]= "";
    // 备注
    // $extendInfoMap["resv"]= "";
    // 特殊票种标识
    // $extendInfoMap["special_flag"]= "";
    // 开票结果异步通知地址
    // $extendInfoMap["callback_url"]= "";
    return $extendInfoMap;
}

function getGoodsInfosRc() {
    $dto = array();
    // 发票行性质
    // $dto["ivc_nature"] = "test";
    // 商品名称goods_code不为空时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：电视机&lt;/font&gt;
    // $dto["goods_name"] = "test";
    // 税率goods_code不为空时必填，最多三位小数 如：税率13% 则传入&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.13&lt;/font&gt;
    // $dto["tax_rate"] = "test";
    // 金额（元）
    // $dto["trans_amt"] = "test";
    // 商品id
    // $dto["goods_id"] = "";
    // 商品税收分类编码
    // $dto["goods_code"] = "";
    // 规格型号
    // $dto["goods_model"] = "";
    // 计量单位
    // $dto["goods_unit"] = "";
    // 优惠政策标识
    // $dto["preferential_flag"] = "";
    // 零税率标示
    // $dto["zero_tax_rate_flag"] = "";
    // 增值税特殊管理
    // $dto["add_tax_spec_manage"] = "";
    // 含税标识
    // $dto["is_price_con_tax"] = "";
    // 数量
    // $dto["goods_count"] = "";
    // 单价
    // $dto["goods_price"] = "";
    // 折扣金额(元)
    // $dto["sale_amt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getPayerInfo() {
    $dto = array();
    // 开票人
    // $dto["payer_name"] = "test";
    // 收款人
    // $dto["payee"] = "";
    // 复核人
    // $dto["reviewer"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


