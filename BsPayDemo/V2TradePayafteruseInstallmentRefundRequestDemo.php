<?php

/**
 * 分期交易退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePayafteruseInstallmentRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePayafteruseInstallmentRefundRequest;

// 2.组装请求参数
$request = new V2TradePayafteruseInstallmentRefundRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000108281250");
// 申请退款金额
$request->setOrdAmt("0.01");
// 原请求日期
$request->setOrgReqDate("20241010");

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
    // 分账串
    // $extendInfoMap["acct_split_bunch"]= get1313ce8b81ce4f5493a623949b89ffd3();
    // 原请求流水号
    $extendInfoMap["org_req_seq_id"]= "20241010test10000111qccrr";
    // 原全局流水号
    // $extendInfoMap["org_hf_seq_id"]= "";
    // 交易备注
    // $extendInfoMap["remark"]= "";
    // 异步通知地址
    // $extendInfoMap["notify_url"]= "";
    return $extendInfoMap;
}

function get5864fd7678e24596B3ce38dba15bb024() {
    $dto = array();
    // 分账金额
    // $dto["div_amt"] = "test";
    // 分账接收方商户号
    // $dto["huifu_id"] = "test";
    // 分账接收方账户号
    // $dto["acct_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get1313ce8b81ce4f5493a623949b89ffd3() {
    $dto = array();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";
    // 分账明细
    // $dto["acct_infos"] = get5864fd7678e24596B3ce38dba15bb024();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


