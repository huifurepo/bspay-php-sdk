<?php

/**
 * 修改归集配置 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeSettleCollectionRuleModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeSettleCollectionRuleModifyRequest;

// 2.组装请求参数
$request = new V2TradeSettleCollectionRuleModifyRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 转出方商户号
$request->setOutHuifuId("6666000152758213");
// 转出方账户号
$request->setOutAcctId("F03142591");

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
    // 转出方账户留存金额
    $extendInfoMap["remained_amt"]= "0.00";
    // 是否关闭
    $extendInfoMap["close"]= "";
    return $extendInfoMap;
}


