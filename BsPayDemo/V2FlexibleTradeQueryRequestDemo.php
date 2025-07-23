<?php

/**
 * 灵工支付查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2FlexibleTradeQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2FlexibleTradeQueryRequest;

// 2.组装请求参数
$request = new V2FlexibleTradeQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 原请求流水号原请求流水号与原请求全局流水号二选一必填，示例值：2021091708126665001
$request->setOrgReqSeqId("2025060916130548005test001");
// 原请求日期原请求流水号必填则原请求日期必填，格式：yyyyMMdd；示例值：20210917
$request->setOrgReqDate("20250609");
// 汇付商户号
$request->setHuifuId("6666000107740841");
// 原交易全局流水号原请求流水号与原请求全局流水号二选一必填，  &lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值： 003100TOP1A230816150903P990ac139c0600000&lt;/font&gt;
$request->setOrgHfSeqId("2025060900000000000078864005");

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


