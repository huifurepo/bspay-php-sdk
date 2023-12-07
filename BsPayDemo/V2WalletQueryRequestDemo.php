<?php

/**
 * 钱包用户查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletQueryRequest;

// 2.组装请求参数
$request = new V2WalletQueryRequest();
// 系统号
// $request->setSysId("test");
// 产品号
// $request->setProductId("test");
// 加签结果
// $request->setSign("test");
// 数据
// $request->setData("test");

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
    return $extendInfoMap;
}


