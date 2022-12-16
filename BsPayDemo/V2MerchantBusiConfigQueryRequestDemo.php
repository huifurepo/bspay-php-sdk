<?php

/**
 * 微信配置查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBusiConfigQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantBusiConfigQueryRequest;

// 2.组装请求参数
$request = new V2MerchantBusiConfigQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000108854952");

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
    // 渠道号
    $extendInfoMap["bank_channel_no"]= "";
    return $extendInfoMap;
}


