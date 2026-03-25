<?php

/**
 * 创建账单计划 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3BillpayPlanAddRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3BillpayPlanAddRequest;

// 2.组装请求参数
$request = new V3BillpayPlanAddRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000123123123");
// 账单项目编号
// $request->setProjectNo("test");
// 账单周期
$request->setPlanCycle("MONTH");
// 账单日
$request->setBillDay("15");
// 补发当前周期账单标志枚举:Y-是、N-否；指定账单日时，必填；若填写是，则立即生成当前系统时间所在周期的账单； 滚动账单日时，此字段无效
$request->setReissueBillFlag("Y");
// 代扣信息jsonObject格式；账单计划需自动代扣时必填
$request->setWithholdInfoData(get49450184739c47e6Bab527b61aa24f1a());
// 用户资料信息列表
$request->setUserDocInfoList(get919c625f5db74bca802a9a31f9647a55());
// 账单收费项信息列表
$request->setPaymentInfoList(get64292bd749be4204A99cA4e9c977a623());

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
    return $extendInfoMap;
}

function get49450184739c47e6Bab527b61aa24f1a() {
    $dto = array();
    // 卡令牌
    $dto["token_no"] = "CT202412270001";
    // 是否发送代扣前短信通知
    $dto["sms_notify_flag"] = "Y";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get919c625f5db74bca802a9a31f9647a55() {
    $dto = array();
    // 账单表单字段属性ID
    $dto["key_no"] = "userName";
    // 账单表单字段属性值
    $dto["key_value"] = "张三";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get64292bd749be4204A99cA4e9c977a623() {
    $dto = array();
    // 账单表单字段属性ID
    $dto["key_no"] = "propertyFee";
    // 账单表单字段属性值
    $dto["key_value"] = "500.00";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


