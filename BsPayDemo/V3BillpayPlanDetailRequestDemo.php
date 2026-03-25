<?php

/**
 * 查询账单计划详情 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3BillpayPlanDetailRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3BillpayPlanDetailRequest;

// 2.组装请求参数
$request = new V3BillpayPlanDetailRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000123123123");
// 账单计划编号与原请求流水号编号二选一必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：BP202412270001&lt;/font&gt;
// $request->setPlanNo("test");
// 原请求流水号原请求流水号，同一商户号当天唯一；与账单计划编号二选一必填
$request->setOrgReqSeqId("2022012614120615001");
// 原请求日期原请求日期格式：yyyyMMdd，以北京时间为准；与账单编号二选一必填
$request->setOrgReqDate("20220125");

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
    return $extendInfoMap;
}


