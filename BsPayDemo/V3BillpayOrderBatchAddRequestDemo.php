<?php

/**
 * 创建批量账单数据 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3BillpayOrderBatchAddRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3BillpayOrderBatchAddRequest;

// 2.组装请求参数
$request = new V3BillpayOrderBatchAddRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000123123123");
// 账单项目编号
$request->setProjectNo("BN2025091279190693");
// 用户资料信息列表
// $request->setUserDocInfoList(getC2e8906531d04dc8981304f7acdb9361());
// 账单收费项信息列表
// $request->setPaymentInfoList(getAfd400dc0f48495881a97bc3c0f33fed());

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
    // 是否生效
    // $extendInfoMap["effective_flag"]= "";
    return $extendInfoMap;
}

function getC2e8906531d04dc8981304f7acdb9361() {
    $dto = array();
    // 账单表单字段属性ID
    // $dto["key_no"] = "test";
    // 账单表单字段属性值
    // $dto["key_value"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAfd400dc0f48495881a97bc3c0f33fed() {
    $dto = array();
    // 账单表单字段属性ID
    // $dto["key_no"] = "test";
    // 账单表单字段属性值
    // $dto["key_value"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


