<?php

/**
 * 钱包提现下单 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletTradeWithdrawalRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletTradeWithdrawalRequest;

// 2.组装请求参数
$request = new V2WalletTradeWithdrawalRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000135653240");
// 钱包用户ID
$request->setUserHuifuId("6666000136655020");
// 银行卡序列号
$request->setTokenNo("10043478052");
// 提现金额
// $request->setTransAmt("test");
// 跳转地址
$request->setFrontUrl("http://www.huifu.com");
// 异步通知地址
$request->setNotifyUrl("https://");
// 到账日期类型
$request->setIntoAcctDateType("D0");

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
    // 密码页面类型
    $extendInfoMap["request_type"]= "M";
    // 备注
    $extendInfoMap["remark"]= "remark11";
    return $extendInfoMap;
}


