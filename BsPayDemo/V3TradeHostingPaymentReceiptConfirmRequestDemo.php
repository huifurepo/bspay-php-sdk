<?php

/**
 * 确认收货提醒 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3TradeHostingPaymentReceiptConfirmRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3TradeHostingPaymentReceiptConfirmRequest;

// 2.组装请求参数
$request = new V3TradeHostingPaymentReceiptConfirmRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 快递签收时间
$request->setReceivedTime("1670829139");

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
    // 原支付交易对应的微信订单号
    $extendInfoMap["transaction_id"]= "fake-transid-20221209132531-44";
    // 支付下单商户的商户号
    $extendInfoMap["merchant_id"]= "fake-mchid-123";
    // 二级商户号
    // $extendInfoMap["sub_merchant_id"]= "";
    // 商户系统内部订单号
    $extendInfoMap["merchant_trade_no"]= "fake-tradeno-20221209132531-44";
    return $extendInfoMap;
}


