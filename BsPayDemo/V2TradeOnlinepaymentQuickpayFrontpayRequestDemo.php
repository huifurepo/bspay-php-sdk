<?php

/**
 * 快捷支付页面版接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentQuickpayFrontpayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentQuickpayFrontpayRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentQuickpayFrontpayRequest();
// 业务请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000109812884");
// 订单金额
$request->setTransAmt("0.01");
// 银行扩展信息
$request->setExtendPayData(getExtendPayData());
// 设备信息
$request->setTerminalDeviceData(getTerminalDeviceData());
// 安全信息
$request->setRiskCheckData(getRiskCheckData());
// 异步通知地址
$request->setNotifyUrl("http://www.baidu.com");

// 设置非必填字段
$extendInfoMap = getExtendInfos();
$request->setExtendInfo($extendInfoMap);

// 3. 发起API调用
$client = new BsPayClient();
$result = $client->postRequest($request, true);
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
    // 用户客户号
    // $extendInfoMap["user_huifu_id"]= "";
    // 订单类型
    $extendInfoMap["order_type"]= "P";
    // 订单失效时间
    $extendInfoMap["time_expire"]= "";
    // 商品描述
    $extendInfoMap["goods_desc"]= "快捷支付接口";
    // 请求类型
    $extendInfoMap["request_type"]= "P";
    // 延时标记
    // $extendInfoMap["delay_acct_flag"]= "";
    // 分账串
    $extendInfoMap["acct_split_bunch"]= getAcctSplitBunchRucan();
    // 手续费扣款标志
    $extendInfoMap["fee_flag"]= "2";
    // 备注
    $extendInfoMap["remark"]= "remark快捷支付接口";
    // 页面跳转地址
    $extendInfoMap["front_url"]= "http://www.baidu.com";
    return $extendInfoMap;
}

function getAcctInfos() {
    $dto = array();
    // 被分账对象ID
    $dto["huifu_id"] = "6666000109812884";
    // 分账金额
    $dto["div_amt"] = "0.01";
    // 账户号
    // $dto["acct_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAcctSplitBunchRucan() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getExtendPayData() {
    $dto = array();
    // 商品简称
    $dto["goods_short_name"] = "01";
    // 业务种类
    $dto["biz_tp"] = "123451";
    // 网关支付受理渠道
    $dto["gw_chnnl_tp"] = "02";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getTerminalDeviceData() {
    $dto = array();
    // 设备类型
    $dto["device_type"] = "1";
    // 交易设备IP
    $dto["device_ip"] = "127.0.0.1";
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

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskCheckData() {
    $dto = array();
    // ip地址
    $dto["ip_addr"] = "127.0.0.1";
    // 基站地址
    // $dto["base_station"] = "";
    // 纬度
    // $dto["latitude"] = "";
    // 经度
    // $dto["longitude"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


