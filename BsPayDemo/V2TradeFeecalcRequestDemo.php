<?php

/**
 * 手续费试算 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeFeecalcRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeFeecalcRequest;

// 2.组装请求参数
$request = new V2TradeFeecalcRequest();
// 商户号
$request->setHuifuId("6666000116584429");
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 交易类型
$request->setTradeType("ENCASHMENT");
// 交易金额
$request->setTransAmt("1000.00");

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
    // 网银交易类型
    $extendInfoMap["online_trans_type"]= "";
    // 付款方银行编号
    $extendInfoMap["bank_id"]= "01020000";
    // 卡类型
    $extendInfoMap["card_type"]= "D";
    // 渠道号
    $extendInfoMap["channel_no"]= "10000001";
    // 数字货币银行编号
    $extendInfoMap["digital_bank_no"]= "01002";
    // 取现到账类型
    $extendInfoMap["encash_type"]= "T0";
    // 场景类型
    $extendInfoMap["pay_scene"]= "01";
    return $extendInfoMap;
}


