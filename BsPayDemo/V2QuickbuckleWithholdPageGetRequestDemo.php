<?php

/**
 * 代扣绑卡页面版 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2QuickbuckleWithholdPageGetRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2QuickbuckleWithholdPageGetRequest;

// 2.组装请求参数
$request = new V2QuickbuckleWithholdPageGetRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 汇付Id
$request->setHuifuId("6666000103422897");
// 订单号
$request->setOrderId("SAS20230807102136898274149");
// 订单日期
$request->setOrderDate("20230807");

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
    // 页面有效期
    $extendInfoMap["expire_time"]= "20";
    // 页面跳转地址
    $extendInfoMap["return_url"]= "https://api.huifu.com";
    // 客户用户号
    $extendInfoMap["out_cust_id"]= "Q837467382819";
    // 用户汇付号
    $extendInfoMap["user_huifu_id"]= "6666000107386236";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://api.huifu.com";
    // 设备信息域
    $extendInfoMap["trx_device_info"]= getTrxDeviceInfo();
    // 风控信息
    $extendInfoMap["risk_info"]= getRiskInfo();
    return $extendInfoMap;
}

function getTrxDeviceInfo() {
    $dto = array();
    // 银行预留手机号
    $dto["trx_mobile_num"] = "13428722321";
    // 设备类型
    $dto["trx_device_type"] = "1";
    // 交易设备IP
    $dto["trx_device_ip"] = "192.168.1.1";
    // 交易设备MAC
    $dto["trx_device_mac"] = "10.10.0.1";
    // 交易设备IMEI
    $dto["trx_device_imei"] = "imei";
    // 交易设备IMSI
    $dto["trx_device_imsi"] = "imsi";
    // 交易设备ICCID
    $dto["trx_device_icc_id"] = "icc";
    // 交易设备WIFIMAC
    $dto["trx_device_wfifi_mac"] = "wfifi";
    // 交易设备GPS
    $dto["trx_device_gps"] = "gps";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskInfo() {
    $dto = array();
    // IP类型
    $dto["ip_type"] = "04";
    // IP值
    $dto["source_ip"] = "1.1.1.1";
    // 设备标识
    $dto["device_id"] = "";
    // 设备类型
    $dto["device_type"] = "";
    // 银行预留手机号
    $dto["mobile"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


