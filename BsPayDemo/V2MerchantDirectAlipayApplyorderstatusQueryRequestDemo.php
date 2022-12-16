<?php

/**
 * 支付宝直连-查询申请状态 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantDirectAlipayApplyorderstatusQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantDirectAlipayApplyorderstatusQueryRequest;

// 2.组装请求参数
$request = new V2MerchantDirectAlipayApplyorderstatusQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户汇付Id
$request->setHuifuId("6666000003079710");
// 开发者的应用ID
$request->setAppId("2019091967580486");

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
    // 事务编号
    $extendInfoMap["batch_no"]= "3123123";
    // 应用授权令牌
    $extendInfoMap["app_auth_token"]= "201912BBecafff3696694c6d889503949a6adD18";
    return $extendInfoMap;
}


