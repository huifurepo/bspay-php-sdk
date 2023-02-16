<?php

/**
 * 微信支付宝预授权完成 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePreauthpayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePreauthpayRequest;

// 2.组装请求参数
$request = new V2TradePreauthpayRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000108854952");
// 原交易请求日期
$request->setOrgReqDate("20221031");
// 交易金额
$request->setTransAmt("0.02");
// 商品描述
$request->setGoodsDesc("1234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567");
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
    // 外部订单号
    $extendInfoMap["out_ord_id"]= "12345678901234567890123456789012";
    // 原授权号
    $extendInfoMap["org_auth_no"]= "";
    // 原预授权交易请求流水号
    $extendInfoMap["org_req_seq_id"]= "";
    // 预授权汇付全局流水号
    $extendInfoMap["pre_auth_hf_seq_id"]= "0029000topB221031163126P798c0a8305400000";
    // 交易发起时间
    $extendInfoMap["send_time"]= "12345678901234567";
    // 是否立即入账
    $extendInfoMap["is_settled"]= "1";
    // 备注
    $extendInfoMap["remark"]= "123451111";
    // 批次号
    // $extendInfoMap["batch_id"]= "";
    // 商户操作员号
    // $extendInfoMap["mer_oper_id"]= "";
    // 扩展域
    // $extendInfoMap["mer_priv"]= "";
    // 设备信息
    $extendInfoMap["terminal_device_data"]= getTerminalDeviceData();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    return $extendInfoMap;
}

function getRiskCheckData() {
    $dto = array();
    // 基站地址
    $dto["base_station"] = "192.168.1.1";
    // ip地址
    $dto["ip_addr"] = "180.167.105.130";
    // 纬度
    $dto["latitude"] = "33.3";
    // 经度
    $dto["longitude"] = "33.3";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getTerminalDeviceData() {
    $dto = array();
    // 商户终端序列号
    $dto["app_version"] = "";
    // 交易设备GPS
    $dto["device_gps"] = "";
    // 交易设备ICCID
    $dto["device_icc_id"] = "";
    // 交易设备IMEI
    $dto["device_imei"] = "";
    // 交易设备IMSI
    $dto["device_imsi"] = "";
    // 交易设备IP
    $dto["device_ip"] = "10.10.0.1";
    // 交易设备MAC
    $dto["device_mac"] = "";
    // 设备类型
    $dto["device_type"] = "1";
    // 交易设备WIFIMAC
    $dto["device_wifi_mac"] = "";
    // 汇付机具号
    $dto["devs_id"] = "";
    // ICCID
    $dto["icc_id"] = "";
    // 商户终端实时经纬度信息
    $dto["location"] = "+32.10520/+118.80593";
    // 商户交易设备IP
    $dto["mer_device_ip"] = "";
    // 商户设备类型
    $dto["mer_device_type"] = "01";
    // 移动国家代码
    $dto["mobile_country_cd"] = "";
    // 移动网络号码
    $dto["mobile_net_num"] = "";
    // 商户终端入网认证编号
    $dto["network_license"] = "P3111";
    // 商户终端序列号
    $dto["serial_num"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


