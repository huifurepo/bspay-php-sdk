<?php

/**
 * 发货信息合单录入 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3TradeHostingPaymentCombinedshippinginfoUploadRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3TradeHostingPaymentCombinedshippinginfoUploadRequest;

// 2.组装请求参数
$request = new V3TradeHostingPaymentCombinedshippinginfoUploadRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000103334211");
// 订单信息
$request->setOrderKey(getAa22aa8e4421431bBcbb03bf9ea6b08d());
// 上传时间
$request->setUploadTime("20231112200913");
// 支付者
$request->setPayer(getAeaf17f6D3934753A5f70c39ebdf7f85());

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
    // 子单物流详情
    $extendInfoMap["sub_orders"]= get3614704a5b104be1906399e5c7076590();
    return $extendInfoMap;
}

function getAa22aa8e4421431bBcbb03bf9ea6b08d() {
    $dto = array();
    // 订单单号类型
    $dto["order_number_type"] = "1";
    // 原支付交易对应的微信订单号
    // $dto["transaction_id"] = "";
    // 支付下单商户的商户号
    $dto["mchid"] = "fake-mchid-123";
    // 商户系统内部订单号
    $dto["out_trade_no"] = "fake-tradeno-20221214190427-0";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAeaf17f6D3934753A5f70c39ebdf7f85() {
    $dto = array();
    // 用户标识
    $dto["openid"] = "ogqztkPsejM9MQAFfwCQSCi4oNg3";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getFc965ab6287d405dAb325c90241f7b70() {
    $dto = array();
    // 订单单号类型
    $dto["order_number_type"] = "1";
    // 原支付交易对应的微信订单号
    // $dto["transaction_id"] = "";
    // 支付下单商户的商户号
    $dto["mchid"] = "fake-mchid-123";
    // 商户系统内部订单号
    $dto["out_trade_no"] = "fake-tradeno-20221214190427-01";

    return $dto;
}

function getAfc3fe0753a949889a8b3bac0ed4196a() {
    $dto = array();
    // 寄件人联系方式
    $dto["consignor_contact"] = "021-**34-12";
    // 收件人联系方式
    // $dto["receiver_contact"] = "";

    return $dto;
}

function getCc61a8ed21154bdd8231E4e48a2ae31a() {
    $dto = array();
    // 商品信息
    $dto["item_desc"] = "微信气泡狗零钱包*1";
    // 物流单号
    $dto["tracking_no"] = "fake-trackingno-202212141904271";
    // 物流公司编码
    $dto["express_company"] = "YD";
    // 联系方式
    $dto["contact"] = getAfc3fe0753a949889a8b3bac0ed4196a();

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get3614704a5b104be1906399e5c7076590() {
    $dto = array();
    // 需要上传物流详情的子单订单，订单类型与合单订单保持一致
    $dto["order_key"] = getFc965ab6287d405dAb325c90241f7b70();
    // 物流模式
    $dto["logistics_type"] = "1";
    // 发货模式
    $dto["delivery_mode"] = "2";
    // 是否已全部发货完成
    $dto["is_all_delivered"] = "true";
    // 子单物流信息列表
    $dto["shipping_list"] = getCc61a8ed21154bdd8231E4e48a2ae31a();

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


