<?php

/**
 * 托管交易查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeHostingPaymentQueryorderinfoRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeHostingPaymentQueryorderinfoRequest;

// 2.组装请求参数
$request = new V2TradeHostingPaymentQueryorderinfoRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 原交易请求日期
$request->setOrgReqDate("20231020");
// 原交易请求流水号与**party_order_id**二选一，必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：rQ2021121311173944&lt;/font&gt;
$request->setOrgReqSeqId("202310201652361987182512");
// 用户账单上的商户订单号与**org_req_seq_id**二选一，必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：03232109190255105603561&lt;/font&gt;
// $request->setPartyOrderId("test");

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


