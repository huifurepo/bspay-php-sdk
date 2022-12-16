<?php

/**
 * 银联统一在线收银台接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentUnionpayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentUnionpayRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentUnionpayRequest();
// 商户号
$request->setHuifuId("6666000108854952");
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 订单金额
$request->setTransAmt("0.11");
// 商品描述
$request->setOrderDesc("通用性商品1");
// 安全信息
$request->setRiskCheckData(getRiskCheckData());

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
    // 卡号锁定标识
    $extendInfoMap["card_number_lock"]= "";
    // 直通模式的银行标识
    $extendInfoMap["ebank_en_abbr"]= "";
    // 交易银行卡卡号
    $extendInfoMap["pay_card_no"]= "";
    // 支付卡类型
    $extendInfoMap["pay_card_type"]= "04";
    // 订单失效时间
    $extendInfoMap["time_expire"]= "";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= getAcctSplitBunchRucan();
    // 前端跳转地址
    $extendInfoMap["front_url"]= "https://www.service.com/getresp";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://www.service.com/getresp";
    // 备注
    $extendInfoMap["remark"]= "merPriv11";
    return $extendInfoMap;
}

function getRiskCheckData() {
    $dto = array();
    // 基站地址
    $dto["base_station"] = "7";
    // ip地址
    // $dto["ip_addr"] = "";
    // 纬度
    $dto["latitude"] = "4";
    // 经度
    $dto["longitude"] = "3";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAcctInfos() {
    $dto = array();
    // 分账金额
    // $dto["div_amt"] = "";
    // 商户号
    // $dto["huifu_id"] = "";
    // 账户号
    // $dto["acct_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAcctSplitBunchRucan() {
    $dto = array();
    // 分账明细
    // $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


