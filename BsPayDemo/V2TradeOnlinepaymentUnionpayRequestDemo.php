<?php

/**
 * 银联统一在线收银台 - 示例
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
$request->setHuifuId("6666000109133323");
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 订单金额
$request->setTransAmt("0.11");
// 商品描述
$request->setOrderDesc("通用性商品1");
// 安全信息
$request->setRiskCheckData(get24cac05aE51448a1960b54ff953dcaf2());
// 三方支付数据jsonObject；pay_scene为云闪付公众号与云闪付小程序时必填
// $request->setThirdPayData(get7945798a32654321Bea45a70676268d8());

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
    // $extendInfoMap["pay_card_type"]= "";
    // 订单失效时间
    $extendInfoMap["time_expire"]= "";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= get4629873c1e2342f689ccE0172d96371f();
    // 前端跳转地址
    $extendInfoMap["front_url"]= "https://www.service.com/getresp";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://www.service.com/getresp";
    // 备注
    $extendInfoMap["remark"]= "merPriv11";
    // 支付场景
    // $extendInfoMap["pay_scene"]= "";
    // 签约令牌号
    // $extendInfoMap["sign_token_no"]= "";
    // 延时标记
    $extendInfoMap["delay_acct_flag"]= "Y";
    return $extendInfoMap;
}

function get10d0f278Ee0e4dedB75b4d7f64376944() {
    $dto = array();
    // 分账金额
    // $dto["div_amt"] = "";
    // 分账接收方ID
    // $dto["huifu_id"] = "";
    // 账户号
    // $dto["acct_id"] = "";
    // 分账百分比%
    // $dto["percentage_div"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get4629873c1e2342f689ccE0172d96371f() {
    $dto = array();
    // 分账明细
    // $dto["acct_infos"] = get10d0f278Ee0e4dedB75b4d7f64376944();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get24cac05aE51448a1960b54ff953dcaf2() {
    $dto = array();
    // 基站地址
    $dto["base_station"] = "7";
    // ip地址
    $dto["ip_addr"] = "172.28.52.52";
    // 纬度
    $dto["latitude"] = "4";
    // 经度
    $dto["longitude"] = "3";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get7945798a32654321Bea45a70676268d8() {
    $dto = array();
    // 小程序id
    // $dto["app_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


