<?php

/**
 * 交易确认退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentDelaytransConfirmrefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentDelaytransConfirmrefundRequest;

// 2.组装请求参数
$request = new V2TradePaymentDelaytransConfirmrefundRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 原交易请求日期
$request->setOrgReqDate("20240513");
// 原交易请求流水号
$request->setOrgReqSeqId("20240513105825239x0lp7ldbus4sji");

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
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= get04d3f49d20fe496f8d152c880fb07b78();
    // 是否垫资退款
    // $extendInfoMap["loan_flag"]= "";
    // 垫资承担者
    // $extendInfoMap["loan_undertaker"]= "";
    // 垫资账户类型
    // $extendInfoMap["loan_acct_type"]= "";
    // 备注
    // $extendInfoMap["remark"]= "";
    return $extendInfoMap;
}

function getF889ccf24ed3483fA4c053df49b5783f() {
    $dto = array();
    // 分账接收方ID
    $dto["huifu_id"] = "6666000109133323";
    // 分账金额(元)
    $dto["div_amt"] = "0.01";
    // 垫资金额(元)
    // $dto["part_loan_amt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get04d3f49d20fe496f8d152c880fb07b78() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getF889ccf24ed3483fA4c053df49b5783f();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


