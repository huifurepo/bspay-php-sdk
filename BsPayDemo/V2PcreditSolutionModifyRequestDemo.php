<?php

/**
 * 更新花呗分期方案 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2PcreditSolutionModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2PcreditSolutionModifyRequest;

// 2.组装请求参数
$request = new V2PcreditSolutionModifyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000110468104");
// 创建成功后返回的贴息活动方案id
$request->setSolutionId("1515");

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
    // 开发者的应用ID
    $extendInfoMap["app_id"]= "2019090666961966";
    // 花呗分期商家贴息活动名称
    // $extendInfoMap["activity_name"]= "";
    // 活动开始时间
    $extendInfoMap["start_time"]= "2019-07-08 00:00:00";
    // 活动结束时间
    $extendInfoMap["end_time"]= "2029-07-10 00:00:00";
    return $extendInfoMap;
}


