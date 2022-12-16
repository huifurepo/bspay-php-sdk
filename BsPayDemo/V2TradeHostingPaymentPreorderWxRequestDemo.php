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
$request->setHuifuId("6666000111546360");
// 交易金额
$request->setTransAmt("0.10");
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
    $extendInfoMap["delay_acct_flag"]= "N";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= getAcctSplitBunchRucan();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://callback.service.com/xx";
    // 交易失效时间
    // $extendInfoMap["time_expire"]= "";
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

function getMiniappDataRucan() {
    $dto = array();
    // 应用ID
    $dto["seq_id"] = "系统应用ID";
    // 私有信息
    // $dto["private_info"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAcctSplitBunchRucan() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getAcctInfosRucan();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


