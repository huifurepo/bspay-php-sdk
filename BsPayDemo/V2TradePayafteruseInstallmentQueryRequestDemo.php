<?php

/**
 * 分期扣款查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePayafteruseInstallmentQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePayafteruseInstallmentQueryRequest;

// 2.组装请求参数
$request = new V2TradePayafteruseInstallmentQueryRequest();
// 商户号
$request->setHuifuId("6666000108281250");

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
    // 原请求流水号
    $extendInfoMap["org_req_seq_id"]= "2024092516211148967";
    // 原请求日期
    $extendInfoMap["org_req_date"]= "20240925";
    // 原全局流水号
    // $extendInfoMap["org_hf_seq_id"]= "";
    return $extendInfoMap;
}


