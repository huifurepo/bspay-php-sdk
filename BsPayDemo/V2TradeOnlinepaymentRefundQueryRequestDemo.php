<?php

/**
 * 线上交易退款查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentRefundQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentRefundQueryRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentRefundQueryRequest();
// 商户号
$request->setHuifuId("6666000108854952");
// 原退款请求日期
$request->setOrgReqDate("20220818");

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
    // 原退款全局流水号
    $extendInfoMap["org_hf_seq_id"]= "0047default220818142809P500c0a8212f00000";
    // 原退款请求流水号
    $extendInfoMap["org_req_seq_id"]= "1660804089";
    return $extendInfoMap;
}


