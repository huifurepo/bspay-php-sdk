<?php

/**
 * 批量交易状态查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeTransstatQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeTransstatQueryRequest;

// 2.组装请求参数
$request = new V2TradeTransstatQueryRequest();
// 商户号
// $request->setHuifuId("test");
// 页码
$request->setPageNo("1");
// 页大小
$request->setPageSize("4");
// 请求日期
// $request->setReqDate(date("Ymd"));

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
    // 请求订单
    $extendInfoMap["reqseqid_list"]= "[\"20221108104332293079\",\"20221108104817E93140\",\"20221108104800E93135\",\"20221108112153E93750\",\"20221108133737E96102\"]";
    return $extendInfoMap;
}


