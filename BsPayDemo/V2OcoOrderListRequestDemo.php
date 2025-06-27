<?php

/**
 * 全渠道订单分账查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2OcoOrderListRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2OcoOrderListRequest;

// 2.组装请求参数
$request = new V2OcoOrderListRequest();
// 请求流水号
// $request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
// $request->setReqDate(date("Ymd"));
// 商户号
// $request->setHuifuId("test");
// 分账数据源
// $request->setBusiSource("test");
// 交易时间
// $request->setTransDate("test");
// 页码
// $request->setPageNum("test");
// 每页大小
// $request->setPageSize("test");

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


