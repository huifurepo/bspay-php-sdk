<?php

/**
 * 汇付入账查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentTransferRemittanceorderRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentTransferRemittanceorderRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentTransferRemittanceorderRequest();
// 商户号
$request->setHuifuId("6666000003100615");
// 原请求开始日期
$request->setOrgReqStartDate("20230110");
// 原请求结束日期
$request->setOrgReqEndDate("20230110");

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
    $extendInfoMap["org_req_seq_id"]= "20230110155433defaultit655128593";
    // 原请求日期
    $extendInfoMap["org_req_date"]= "20230110";
    // 原汇付通道流水号
    $extendInfoMap["org_remittance_order_id"]= "20230110155433defaultit655128591";
    // 每页条数
    $extendInfoMap["page_size"]= "1";
    // 分页页码
    $extendInfoMap["page_no"]= "1";
    // 入账批次号
    // $extendInfoMap["org_batch_no"]= "";
    return $extendInfoMap;
}


