<?php

/**
 * 交易确认查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3TradePaymentDelaytransConfirmqueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3TradePaymentDelaytransConfirmqueryRequest;

// 2.组装请求参数
$request = new V3TradePaymentDelaytransConfirmqueryRequest();
// 原请求日期
$request->setOrgReqDate("20240513");
// 原请求流水号
$request->setOrgReqSeqId("20240513105825239x0lp7ldbus4sji");
// 商户号
$request->setHuifuId("6666000109133323");

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
    return $extendInfoMap;
}


