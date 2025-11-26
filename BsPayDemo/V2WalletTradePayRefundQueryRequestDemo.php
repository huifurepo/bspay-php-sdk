<?php

/**
 * 钱包支付退款查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletTradePayRefundQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletTradePayRefundQueryRequest;

// 2.组装请求参数
$request = new V2WalletTradePayRefundQueryRequest();
// 原退款交易请求日期
$request->setOrgReqDate("20230816");
// 原退款交易请求流水号
// $request->setOrgReqSeqId("test");

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
    // 钱包用户id
    $extendInfoMap["user_huifu_id"]= "6666000136655020";
    // 原退款交易全局流水号
    $extendInfoMap["org_hf_seq_id"]= "003100TOP1A230816150903P990ac139c0600000";
    return $extendInfoMap;
}


