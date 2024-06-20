<?php

/**
 * 商户注册状态查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2InvoiceMerStatusQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2InvoiceMerStatusQueryRequest;

// 2.组装请求参数
$request = new V2InvoiceMerStatusQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 商户汇付Id
$request->setHuifuId("6666000149801800");

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
    // 天池流水号
    $extendInfoMap["seq_id"]= "5394708107500433408";
    // 注册请求流水号
    $extendInfoMap["reg_req_seq_id"]= "";
    return $extendInfoMap;
}


