<?php

/**
 * 银行大额未入账流水列表查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentTransferBankblotterQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentTransferBankblotterQueryRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentTransferBankblotterQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000003100615");

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
    // 原请求流水号
    $extendInfoMap["org_req_seq_id"]= "2021091708126665001";
    // 原请求日期
    $extendInfoMap["org_req_date"]= "20231215";
    // 实际付款方银行卡号
    // $extendInfoMap["bank_card_no"]= "";
    // 实际付款方姓名
    $extendInfoMap["certificate_name"]= "沈显龙";
    // 实际付款日期
    // $extendInfoMap["trans_date"]= "";
    // 交易金额
    // $extendInfoMap["trans_amt"]= "";
    // 收款方账号
    // $extendInfoMap["payee_acct_no"]= "";
    return $extendInfoMap;
}


