<?php

/**
 * 批量出金交易查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeBatchtranslogQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeBatchtranslogQueryRequest;

// 2.组装请求参数
$request = new V2TradeBatchtranslogQueryRequest();
// 商户号
$request->setHuifuId("6666000000041651");
// 开始日期
$request->setBeginDate("20230315");
// 结束日期
$request->setEndDate("20230316");

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
    // 交易类型
    $extendInfoMap["batch_trans_type"]= "";
    // 分页页码
    $extendInfoMap["page_num"]= "1";
    // 分页条数
    $extendInfoMap["page_size"]= "10";
    // 原支付全局流水号
    // $extendInfoMap["payment_hf_seq_id"]= "";
    return $extendInfoMap;
}


