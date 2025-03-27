<?php

/**
 * 用户补贴 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletTradeRechargeTransferRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletTradeRechargeTransferRequest;

// 2.组装请求参数
$request = new V2WalletTradeRechargeTransferRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 出款方商户号
$request->setHuifuId("6666000107309462");
// 收款方用户号
$request->setUserHuifuId("6666000187364826");
// 转账金额
$request->setTransAmt("0.01");

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
    // 出款方账户
    $extendInfoMap["acct_id"]= "F00598600";
    // 转账描述
    $extendInfoMap["description"]= "用户补贴";
    // 备注
    $extendInfoMap["remark"]= "备注";
    return $extendInfoMap;
}


