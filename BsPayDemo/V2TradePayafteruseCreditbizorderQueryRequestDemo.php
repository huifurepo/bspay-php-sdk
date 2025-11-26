<?php

/**
 * 服务单查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePayafteruseCreditbizorderQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePayafteruseCreditbizorderQueryRequest;

// 2.组装请求参数
$request = new V2TradePayafteruseCreditbizorderQueryRequest();
// 商户号
$request->setHuifuId("6666000108281250");

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
    // 原请求流水号
    $extendInfoMap["org_req_seq_id"]= "20241010test10000111111q";
    // 原请求日期
    $extendInfoMap["org_req_date"]= "20241009";
    // 原全局流水号
    $extendInfoMap["org_hf_seq_id"]= "0056default241010164346P593c0a831b900000";
    return $extendInfoMap;
}


