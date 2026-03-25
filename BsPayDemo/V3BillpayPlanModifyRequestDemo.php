<?php

/**
 * 账单计划变更 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3BillpayPlanModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3BillpayPlanModifyRequest;

// 2.组装请求参数
$request = new V3BillpayPlanModifyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000123123123");
// 账单计划编号
$request->setPlanNo("BP202412270001");

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
    // 账单计划有效期
    $extendInfoMap["plan_expire_date"]= "20251231";
    // 是否发送代扣前短信通知
    $extendInfoMap["sms_notify_flag"]= "Y";
    // 账单计划状态
    $extendInfoMap["plan_status"]= "PROGRESS";
    return $extendInfoMap;
}


