<?php

/**
 * 钱包绑卡充值下单 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletTradeRechargeCardRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletTradeRechargeCardRequest;

// 2.组装请求参数
$request = new V2WalletTradeRechargeCardRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000003100615");
// 钱包用户ID
$request->setUserHuifuId("6666000108133109");
// 订单金额
$request->setTransAmt("10.00");
// 微信充值信息微信充值必填
// $request->setWxRechareInfo(get5aab43a511384703Aee9A17b6d476396());
// 支付宝充值信息支付宝充值必填
// $request->setAlipayRechargeInfo(get1a9a249fFf56429c8a73E7a93ef80c2b());

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
    // 订单失效时间
    $extendInfoMap["time_expire"]= "";
    // 备注
    $extendInfoMap["remark"]= "remark11";
    // 充值方式
    $extendInfoMap["recharge_type"]= "A01";
    // 绑定卡充值信息
    $extendInfoMap["bank_recharge_info"]= get0994fa46Ea53463295f1Db4d35a9e9ed();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "archer://C_TOPAT_NOTIFY";
    return $extendInfoMap;
}

function get718333af8b7c4fffAe5a25a0c20f8d7e() {
    $dto = array();
    // 业务种类编码
    $dto["biz_tp"] = "100099";
    // 商品简称
    $dto["goods_short_name"] = "个人电脑";
    // 支付页面类型
    $dto["gw_chnnl_tp"] = "02";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCecd9a03C90045d6881d47baf8ff4e54() {
    $dto = array();
    // 交易设备类型
    $dto["device_type"] = "3";
    // 交易设备IP
    $dto["device_ip"] = "172.31.31.145";
    // 交易设备MAC
    $dto["device_mac"] = "F0E1D2C3B4A5";
    // 交易终端设备IMEI
    $dto["device_imei"] = "460030912121001";
    // 交易设备IMSI
    $dto["device_imsi"] = "460030912121001";
    // 交易设备ICCID
    $dto["device_icc_id"] = "898600680113F0123014";
    // 交易设备WIFI MAC
    $dto["device_wifi_mac"] = "968778695A4B";
    // 交易设备经纬度
    $dto["device_gps"] = "20.346790,-4.654321";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getA619b5347d694307A1a8C1ef90627a60() {
    $dto = array();
    // 经度
    $dto["longitude"] = "2";
    // 纬度
    $dto["latitude"] = "1";
    // 基站地址
    $dto["base_station"] = "460001039217563";
    // IP地址
    $dto["ip_addr"] = "172.28.52.52";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get0994fa46Ea53463295f1Db4d35a9e9ed() {
    $dto = array();
    // 银行卡序列号
    $dto["token_no"] = "10000136685";
    // 跳转地址
    $dto["front_url"] = "http://www.baidu.com";
    // 网联扩展数据
    $dto["extend_pay_data"] = get718333af8b7c4fffAe5a25a0c20f8d7e();
    // 设备信息
    $dto["terminal_device_data"] = getCecd9a03C90045d6881d47baf8ff4e54();
    // 安全信息
    $dto["risk_check_data"] = getA619b5347d694307A1a8C1ef90627a60();
    // 密码页面类型
    $dto["request_type"] = "M";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get5aab43a511384703Aee9A17b6d476396() {
    $dto = array();
    // 交易类型
    // $dto["trade_type"] = "test";
    // 子商户公众账号ID
    // $dto["sub_appid"] = "";
    // 用户标识
    // $dto["openid"] = "";
    // 子商户用户标识
    // $dto["sub_openid"] = "";
    // 渠道号
    // $dto["channel_no"] = "";
    // 场景类型
    // $dto["pay_scene"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get1a9a249fFf56429c8a73E7a93ef80c2b() {
    $dto = array();
    // 交易类型
    // $dto["trade_type"] = "test";
    // 买家的支付宝唯一用户号
    // $dto["buyer_id"] = "test";
    // 支付宝的店铺编号
    // $dto["alipay_store_id"] = "";
    // 渠道号
    // $dto["channel_no"] = "";
    // 场景类型
    // $dto["pay_scene"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


