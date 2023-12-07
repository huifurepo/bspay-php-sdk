<?php

/**
 * 支付宝小程序预下单接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeHostingPaymentPreorderAliRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeHostingPaymentPreorderAliRequest;

// 2.组装请求参数
$request = new V2TradeHostingPaymentPreorderAliRequest();
// 商户号
$request->setHuifuId("6666000111546360");
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 预下单类型
$request->setPreOrderType("2");
// 交易金额
$request->setTransAmt("0.10");
// 商品描述
$request->setGoodsDesc("app跳支付宝消费");
// app扩展参数集合
$request->setAppData(getAppData());

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
    // 收银台ID
    $extendInfoMap["checkout_id"]= "";
    // 是否延迟交易
    $extendInfoMap["delay_acct_flag"]= "N";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= getAcctSplitBunchRucan();
    // 交易失效时间
    // $extendInfoMap["time_expire"]= "";
    // 业务信息
    // $extendInfoMap["biz_info"]= getBizInfo();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://callback.service.com/xx";
    return $extendInfoMap;
}

function getAcctInfosRucan() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "0.08";
    // 被分账方ID
    $dto["huifu_id"] = "6666000111546360";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAcctSplitBunchRucan() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getAcctInfosRucan();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAppData() {
    $dto = array();
    // 小程序返回码
    $dto["app_schema"] = "app跳转链接";
    // 私有信息
    // $dto["private_info"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getPayerCheckAli() {
    $dto = array();
    // 是否提供校验身份信息
    // $dto["need_check_info"] = "";
    // 允许的最小买家年龄
    // $dto["min_age"] = "";
    // 是否强制校验付款人身份信息
    // $dto["fix_buyer"] = "";

    return $dto;
}

function getPersonPayer() {
    $dto = array();
    // 姓名
    // $dto["name"] = "";
    // 证件类型
    // $dto["cert_type"] = "";
    // 证件号
    // $dto["cert_no"] = "";
    // 手机号
    // $dto["mobile"] = "";

    return $dto;
}

function getBizInfo() {
    $dto = array();
    // 付款人验证（支付宝）
    // $dto["payer_check_ali"] = getPayerCheckAli();
    // 个人付款人信息
    // $dto["person_payer"] = getPersonPayer();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


