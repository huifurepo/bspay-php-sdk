<?php

/**
 * 企业账单退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2BillEntRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2BillEntRefundRequest;

// 2.组装请求参数
$request = new V2BillEntRefundRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000003100615");
// 账单编号
$request->setBillNo("ZD2024082486318420");
// 退款金额
$request->setRefundAmt("0.01");

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
    // 备注
    $extendInfoMap["remark"]= "remark";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "";
    return $extendInfoMap;
}


