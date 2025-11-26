<?php

/**
 * E账户账务明细查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentZxeAcctdetailQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentZxeAcctdetailQueryRequest;

// 2.组装请求参数
$request = new V2TradePaymentZxeAcctdetailQueryRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号/用户号
$request->setHuifuId("6666000107941250");
// 交易日期
$request->setTransDate("20231227");
// 交易类型
$request->setTransType("03");

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
    // 登记薄类型
    // $extendInfoMap["register_type"]= "";
    // 页码
    $extendInfoMap["page_num"]= "1";
    return $extendInfoMap;
}


