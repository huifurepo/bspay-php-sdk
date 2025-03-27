<?php

/**
 * 账务流水查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeAcctpaymentAcctlogQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeAcctpaymentAcctlogQueryRequest;

// 2.组装请求参数
$request = new V2TradeAcctpaymentAcctlogQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 渠道/代理/商户/用户编号
$request->setHuifuId("6666000108854952");
// 账务日期
$request->setAcctDate("20220816");

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
    // 每页条数
    $extendInfoMap["page_size"]= "10";
    // 分页页码
    $extendInfoMap["page_num"]= "1";
    // 账户号
    // $extendInfoMap["acct_id"]= "";
    // 账户类型
    $extendInfoMap["acct_type"]= "01";
    return $extendInfoMap;
}


