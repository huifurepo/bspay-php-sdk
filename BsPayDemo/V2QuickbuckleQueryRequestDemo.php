<?php

/**
 * 快捷绑卡查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2QuickbuckleQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2QuickbuckleQueryRequest;

// 2.组装请求参数
$request = new V2QuickbuckleQueryRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 汇付商户Id
$request->setHuifuId("6666000109133323");
// 用户id
$request->setOutCustId("6666000103637719");

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
    // 用户汇付号
    $extendInfoMap["user_huifu_id"]= "";
    return $extendInfoMap;
}


