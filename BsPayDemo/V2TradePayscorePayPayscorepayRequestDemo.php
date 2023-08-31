<?php

/**
 * 支付分扣款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePayscorePayPayscorepayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePayscorePayPayscorepayRequest;

// 2.组装请求参数
$request = new V2TradePayscorePayPayscorepayRequest();
// 微信扣款单号
// $request->setOutTradeNo("test");
// 商品描述
// $request->setGoodsDesc("test");
// 商户号
$request->setHuifuId("6666000108854952");
// 安全信息
// $request->setRiskCheckData("test");

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
    // $extendInfoMap["acct_split_bunch"]= getAcctSplitBunch();
    // 扣款登记返回的汇付全局流水号
    // $extendInfoMap["deduct_hf_seq_id"]= "";
    // 扣款登记创建请求流水号
    // $extendInfoMap["deduct_req_seq_id"]= "";
    // 是否延迟交易
    // $extendInfoMap["delay_acct_flag"]= "";
    // 商户回调地址
    // $extendInfoMap["notify_url"]= "";
    // 交易备注
    // $extendInfoMap["remark"]= "";
    // 请求日期
    $extendInfoMap["req_date"]= date("Ymd");
    // 请求流水号
    $extendInfoMap["req_seq_id"]= date("YmdHis").mt_rand();
    // 设备信息
    // $extendInfoMap["terminal_device_info"]= getTerminalDeviceInfo();
    // 聚合反扫微信参数集合
    // $extendInfoMap["wx_data"]= getWxData();
    return $extendInfoMap;
}

function getAcctInfos() {
    $dto = array();
    // 分账金额
    // $dto["div_amt"] = "test";
    // 分账商户号
    // $dto["huifu_id"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAcctSplitBunch() {
    $dto = array();
    // 分账明细
    // $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getTerminalDeviceInfo() {
    $dto = array();
    // 设备类型
    // $dto["device_type"] = "";
    // 交易设备IP
    // $dto["device_ip"] = "";
    // 交易设备MAC
    // $dto["device_mac"] = "";
    // 交易设备IMEI
    // $dto["device_imei"] = "";
    // 交易设备IMSI
    // $dto["device_imsi"] = "";
    // 交易设备ICCID
    // $dto["device_icc_id"] = "";
    // 交易设备WIFIMAC
    // $dto["device_wifi_mac"] = "";
    // 交易设备GPS
    // $dto["device_gps"] = "";
    // 商户终端应用程序版
    // $dto["app_version"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getWxData() {
    $dto = array();
    // 子商户公众账号id
    // $dto["sub_appid"] = "";
    // 用户标识
    // $dto["openid"] = "";
    // 子商户用户标识
    // $dto["sub_openid"] = "";
    // 设备号
    // $dto["device_info"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


