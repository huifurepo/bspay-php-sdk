<?php

/**
 * 钱包关单 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletTradeOrderCloseRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletTradeOrderCloseRequest;

// 2.组装请求参数
$request = new V2WalletTradeOrderCloseRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000108134725");
// 原交易全局流水号org_hf_seq_id，org_req_seq_id二选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00470topo1A221019132207P068ac1362af00000&lt;/font&gt;
$request->setOrgHfSeqId("01060000000240402102610P904ac1f123400000");
// 原交易请求流水号org_hf_seq_id，org_req_seq_id二选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：rQ2021121311173944134649875651&lt;/font&gt;
// $request->setOrgReqSeqId("test");
// 原交易请求日期
$request->setOrgReqDate("20240402");

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


