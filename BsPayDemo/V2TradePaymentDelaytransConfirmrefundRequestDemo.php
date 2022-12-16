<?php

/**
 * 交易确认退款接口 - 示例
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
$request->setHuifuId("6666000103423237");
// 原交易请求日期
$request->setOrgReqDate("20221108");
// 原交易请求流水号
$request->setOrgReqSeqId("20221108349713659620211667908395");

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
    $extendInfoMap["acct_split_bunch"]= getAcctSplitBunch();
    // 是否垫资退款
    // $extendInfoMap["loan_flag"]= "";
    // 垫资承担者
    // $extendInfoMap["loan_undertaker"]= "";
    // 垫资账户类型
    // $extendInfoMap["loan_acct_type"]= "";
    return $extendInfoMap;
}

function getAcctSplitBunch() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAcctInfos() {
    $dto = array();
    // 被分账方ID
    $dto["huifu_id"] = "6666000003109208";
    // 分账金额
    $dto["div_amt"] = "0.01";
    // 垫资金额
    // $dto["part_loan_amt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}


