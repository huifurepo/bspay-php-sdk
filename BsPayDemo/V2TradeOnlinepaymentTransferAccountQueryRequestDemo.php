<?php

/**
 * 银行大额资金流水查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentTransferAccountQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentTransferAccountQueryRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentTransferAccountQueryRequest();
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
    // 订单模式
    // $extendInfoMap["order_mode"]= "";
    // 原请求流水号
    $extendInfoMap["org_req_seq_id"]= "20211659949882";
    // 原请求日期
    $extendInfoMap["org_req_date"]= "20220808";
    // 银行卡号
    $extendInfoMap["bank_card_no"]= "Xmjm1RB4AAOaFYQ+PgjBlpugXbd8VAYAGB3J2zrbLfC42Bh5xiB47OOV1EdXyGpBq4H8je7mB/MlyEEs6O8PX6aoI4QHumr8VglrLM6uzbVNCIc3S5RPSmi2M+9+EdIQ6nlWd5+XQ7RJXX5Uvnegn74XzQBcN1d4gd04buwKbLpUPV3tWd1qjQwEE8w4gwEtH3L5AP75Mynz+wHFrUKJF3BTiW2/zJlcq5GJomOl06GEW52AZkXwn6U2suP3a0ySd0Rxbf1yQ1lj3SP56NeeEzuBaFLQWB7mEqJfZF3pE9MHNfi6tR1xwLdcxt98bdIqlteKdNAmgfQzcS13UcwH+w==";
    // 付款方名称
    $extendInfoMap["certificate_name"]= "沈显龙";
    // 入账标识
    $extendInfoMap["in_acct_flag"]= "YDNI2NDJIKKPAFGQ";
    // 交易开始日期
    $extendInfoMap["trans_start_date"]= "20220801";
    // 交易结束日期
    $extendInfoMap["trans_end_date"]= "20220808";
    // 实际打款日期
    // $extendInfoMap["remit_date"]= "";
    // 每页条数
    // $extendInfoMap["page_size"]= "";
    // 分页页码
    // $extendInfoMap["page_no"]= "";
    return $extendInfoMap;
}


