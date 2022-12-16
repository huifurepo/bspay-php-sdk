<?php

/**
 * 银行卡分期支持银行查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeBankinstallmentinfoQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeBankinstallmentinfoQueryRequest;

// 2.组装请求参数
$request = new V2TradeBankinstallmentinfoQueryRequest();
// 页码
$request->setPageNum("3");
// 每页条数
$request->setPageSize("1");
// 产品号
// $request->setProductId("test");

// 设置非必填字段
$extendInfoMap = getExtendInfos();
$request->setExtendInfo($extendInfoMap);

// 3. 发起API调用
$client = new BsPayClient();
$result = $client->postRequest($request, true);
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
    // 银行编码
    $extendInfoMap["bank_code"]= "";
    // 银行名称
    $extendInfoMap["bank_name"]= "";
    // 是否启用
    $extendInfoMap["bank_enable"]= "";
    return $extendInfoMap;
}


