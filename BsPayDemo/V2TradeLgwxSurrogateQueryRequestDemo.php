<?php

/**
 * 灵工微信代发查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeLgwxSurrogateQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeLgwxSurrogateQueryRequest;

// 2.组装请求参数
$request = new V2TradeLgwxSurrogateQueryRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 原交易的商户号
$request->setHuifuId("6666000107755175");
// 原交易请求日期
$request->setOrgReqDate("20240621");
// 原交易请求流水号
$request->setOrgReqSeqId("1399999316713470");

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
    // 合作平台
    // $extendInfoMap["lg_platform_type"]= "";
    return $extendInfoMap;
}


