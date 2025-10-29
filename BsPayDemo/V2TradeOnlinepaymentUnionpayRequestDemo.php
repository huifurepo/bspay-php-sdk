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
$request->setRiskCheckData(get72948c317e164ae79d4a93cef8895c95());
// 三方支付数据jsonObject&lt;br/&gt;pay_scene&#x3D;U_JSAPI或pay_scene&#x3D;U_MINIAPP时，必填
// $request->setThirdPayData(getE6adb6f3591a41ec9c6137c27ca2398d());

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
    // 手续费扣款标志
    // $extendInfoMap["fee_flag"]= "";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= get938f9796E5bd4f85A4cf2ce4a306837d();
    // 设备信息数据
    // $extendInfoMap["terminal_device_data"]= get86e6396a54f5492cB3b06678723bed4b();
    return $extendInfoMap;
}

function get0aa0431065074e9f92016d99005ce03e() {
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

function get938f9796E5bd4f85A4cf2ce4a306837d() {
    $dto = array();
    // 分账明细
    // $dto["acct_infos"] = get0aa0431065074e9f92016d99005ce03e();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get72948c317e164ae79d4a93cef8895c95() {
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

function getE6adb6f3591a41ec9c6137c27ca2398d() {
    $dto = array();
    // 小程序id
    // $dto["app_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get86e6396a54f5492cB3b06678723bed4b() {
    $dto = array();
    // 终端设备号
    // $dto["device_id"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


