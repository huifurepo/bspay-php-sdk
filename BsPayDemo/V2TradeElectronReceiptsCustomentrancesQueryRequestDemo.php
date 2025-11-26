<?php

/**
 * 查询小票自定义入口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeElectronReceiptsCustomentrancesQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeElectronReceiptsCustomentrancesQueryRequest;

// 2.组装请求参数
$request = new V2TradeElectronReceiptsCustomentrancesQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000103334211");

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
    // 票据信息
    $extendInfoMap["receipt_data"]= getReceiptDataRucan();
    return $extendInfoMap;
}

function getWxReceiptDataRucan() {
    $dto = array();
    // 品牌ID
    $dto["brand_id"] = "11";

    return $dto;
}

function getReceiptDataRucan() {
    $dto = array();
    // 三方通道类型
    $dto["third_channel_type"] = "T";
    // 微信票据信息
    $dto["wx_receipt_data"] = getWxReceiptDataRucan();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


