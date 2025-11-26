<?php

/**
 * 全渠道资金付款到账户退款查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2EfpAcctpaymentRefundQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2EfpAcctpaymentRefundQueryRequest;

// 2.组装请求参数
$request = new V2EfpAcctpaymentRefundQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付商户号
$request->setHuifuId("6666000123123123");
// 退款交易请求流水号
$request->setOrgReqSeqId("2021091708126665002");
// 退款交易请求日期
$request->setOrgReqDate("20221022");

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


