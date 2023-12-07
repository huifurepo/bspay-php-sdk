<?php

/**
 * 微信小程序预下单接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeHostingPaymentPreorderWxRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeHostingPaymentPreorderWxRequest;

// 2.组装请求参数
$request = new V2TradeHostingPaymentPreorderWxRequest();
// 预下单类型
$request->setPreOrderType("3");
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000003100616");
// 交易金额
$request->setTransAmt("0.13");
// 商品描述
$request->setGoodsDesc("app跳微信消费");
// 微信小程序扩展参数集合
$request->setMiniappData(getMiniappDataRucan());

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
    $extendInfoMap["delay_acct_flag"]= "Y";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= getAcctSplitBunchRucan();
    // 交易失效时间
    $extendInfoMap["time_expire"]= "20231127233423";
    // 业务信息
    // $extendInfoMap["biz_info"]= getBizInfo();
    // 交易异步通知地址
    $extendInfoMap["notify_url"]= "https://callback.service.com/xx";
    return $extendInfoMap;
}

function getAcctInfosRucan() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "0.01";
    // 被分账方ID
    $dto["huifu_id"] = "6666000003100616";

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

function getMiniappDataRucan() {
    $dto = array();
    // 是否生成scheme_code
    $dto["need_scheme"] = "Y";
    // 应用ID
    $dto["seq_id"] = "APP_2022033147154783";
    // 私有信息
    $dto["private_info"] = "oppsHosting://";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getPayCheckWx() {
    $dto = array();
    // 指定支付者
    // $dto["limit_payer"] = "";
    // 微信实名验证
    // $dto["real_name_flag"] = "";

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

    return $dto;
}

function getBizInfo() {
    $dto = array();
    // 付款人验证（微信）
    // $dto["payer_check_wx"] = getPayCheckWx();
    // 个人付款人信息
    // $dto["person_payer"] = getPersonPayer();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


