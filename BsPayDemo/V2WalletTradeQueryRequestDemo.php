<?php

/**
 * 钱包交易查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletTradeQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletTradeQueryRequest;

// 2.组装请求参数
$request = new V2WalletTradeQueryRequest();
// 商户号
$request->setHuifuId("6666000135653240");
// 原交易请求日期
$request->setOrgReqDate("20230803");
// 原交易请求流水号
$request->setOrgReqSeqId("2023080325123001");
// 交易类型
$request->setTransType("WALLET_PAY");

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
    return $extendInfoMap;
}


