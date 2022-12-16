<?php

/**
 * 花呗分期贴息查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2PcreditOrderQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2PcreditOrderQueryRequest;

// 2.组装请求参数
$request = new V2PcreditOrderQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000003113981");
// 贴息方案id
$request->setSolutionId("1515");
// 活动开始时间
$request->setStartTime("2019-07-08 00:00:00");
// 活动结束时间
$request->setEndTime("2019-07-08 00:00:00");

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
    // 开发者的应用ID
    $extendInfoMap["app_id"]= "2021001153625042";
    return $extendInfoMap;
}


