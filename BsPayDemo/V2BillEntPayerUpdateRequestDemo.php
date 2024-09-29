<?php

/**
 * 修改付款人信息 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2BillEntPayerUpdateRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2BillEntPayerUpdateRequest;

// 2.组装请求参数
$request = new V2BillEntPayerUpdateRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000003100615");
// 付款人
$request->setPayerId("P2024082786373612");
// 付款人名称
$request->setPayerName("史凡");

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
    // 付款人邮箱地址
    $extendInfoMap["payer_email"]= "1111@163.com";
    // 付款人手机号码
    $extendInfoMap["payer_mobile_no"]= "17611111111";
    return $extendInfoMap;
}


