<?php

/**
 * 创建修改小票自定义入口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeElectronReceiptsCustomentrancesCreateRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeElectronReceiptsCustomentrancesCreateRequest;

// 2.组装请求参数
$request = new V2TradeElectronReceiptsCustomentrancesCreateRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000103334211");
// 操作类型
$request->setOperateType("A");

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
    // 票据信息
    $extendInfoMap["receipt_data"]= getReceiptData();
    return $extendInfoMap;
}

function getJumpLinkData() {
    $dto = array();
    // 商家小程序AppID
    $dto["mini_programs_app_id"] = "oBmItsxLKa6pd5dSHK4xRLXTt05M";
    // 商家小程序path
    $dto["mini_programs_path"] = "https://wxpaylogo.qpic.cn/wxpaylogo/PiajxSqBRaEIPAeia7ImvtsoMpdQ8uEd23s8VtfKDXa04FZk8kXDeH9Q/0";

    return $dto;
}

function getWxReceiptData() {
    $dto = array();
    // 品牌ID
    $dto["brand_id"] = "1";
    // 自定义入口种类
    $dto["custom_entrance_type"] = "MERCHANT_ACTIVITY";
    // 副标题
    $dto["sub_title"] = "1";
    // 商品缩略图URL
    $dto["goods_thumbnail_url"] = "1";
    // 入口展示开始时间
    $dto["start_time"] = "2023-08-17T13:20:00+08:00";
    // 入口展示结束时间
    $dto["end_time"] = "2023-08-18T11:20:00+08:00";
    // 自定义入口状态
    $dto["custom_entrance_state"] = "ONLINE";
    // 请求业务单据号
    $dto["out_request_no"] = "1";
    // 跳转信息
    $dto["jump_link_data"] = getJumpLinkData();

    return $dto;
}

function getReceiptData() {
    $dto = array();
    // 三方通道类型
    $dto["third_channel_type"] = "T";
    // 微信票据信息
    $dto["wx_receipt_data"] = getWxReceiptData();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


