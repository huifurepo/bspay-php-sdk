<?php

/**
 * 服务单创建 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePayafteruseCreditbizorderCreateRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePayafteruseCreditbizorderCreateRequest;

// 2.组装请求参数
$request = new V2TradePayafteruseCreditbizorderCreateRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000108281250");
// 订单总金额
$request->setTransAmt("0.01");
// 支付宝用户ID
$request->setBuyerId("2088000000000000");
// 订单标题
$request->setTitle("测试001");
// 订单类型
$request->setMerchantBizType("INDIRECT_CHARGE_WITHHOLD");
// 订单详情地址
$request->setPath("https://www.baidu.com/");
// 芝麻信用服务ID
$request->setZmServiceId("2024081500001003000081751200");
// 商品详细信息
$request->setItemInfos(get864f5a50D5064cea9423A5f3ca9e73a7());

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
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://mock.uutool.cn/4pga0jqv8vv0";
    // 追踪ID
    $extendInfoMap["source_id"]= "MjA4ODcwMjY5OTkwODI1N3wyMDIxMDAzMTUwNjM4MTE2fDE3Mjg1NDk3OTU0OTl8ZmFsc2V8VE9LRU5fSVNfTlVMTA==";
    // 支付宝交易号
    $extendInfoMap["trade_no"]= "2024092722001408251414114417";
    // 代扣协议签约场景
    $extendInfoMap["deduct_sign_scene"]= "INDUSTRY|XIANXIANG_BIKE_CHARGE";
    // 芝麻信用外部类⽬
    $extendInfoMap["zm_category_id"]= "credit_pay_for_battery_charging";
    // 是否不需要核身
    // $extendInfoMap["no_need_verify_identity"]= "";
    // 开通成功后跳转地址
    // $extendInfoMap["acceptance_jump_url"]= "";
    return $extendInfoMap;
}

function get1efd507a9385411f80f998b1c37876d9() {
    $dto = array();
    // 总分期数
    $dto["period_num"] = 1;
    // 每期最大金额
    $dto["period_max_price"] = 0.30;
    // 每期金额
    // $dto["period_price"] = "";

    return $dto;
}

function get864f5a50D5064cea9423A5f3ca9e73a7() {
    $dto = array();
    // 商户商品ID
    $dto["out_item_id"] = "1234567";
    // 商品名称
    $dto["goods_name"] = "快充";
    // 商品数量
    $dto["item_cnt"] = "1";
    // 商品单价
    $dto["sale_price"] = "0.30";
    // 商品的编号
    $dto["goods_id"] = "Ldkc00001";
    // 商品分期信息
    $dto["item_installment_info"] = get1efd507a9385411f80f998b1c37876d9();

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


