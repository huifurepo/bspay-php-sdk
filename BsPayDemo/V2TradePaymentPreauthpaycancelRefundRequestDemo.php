<?php

/**
 * 微信支付宝预授权完成撤销 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentPreauthpaycancelRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentPreauthpaycancelRefundRequest;

// 2.组装请求参数
$request = new V2TradePaymentPreauthpaycancelRefundRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 客户号
$request->setHuifuId("6666000108854952");
// 原预授权完成交易请求日期
$request->setOrgReqDate("20221031");
// 完成撤销金额
$request->setOrdAmt("0.02");
// 风控信息
$request->setRiskCheckInfo(getB6b94958D58f402dA1271d898ffe2200());

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
    $extendInfoMap["out_ord_Id"]= "";
    // 原预授权完成交易请求流水号
    $extendInfoMap["org_req_seq_id"]= "20211667205111";
    // 交易发起时间
    $extendInfoMap["send_time"]= "312321321321";
    // 商品描述
    $extendInfoMap["good_desc"]= "商户描述商户描述商户描述商户描述商户描述";
    // 是否人工介入
    $extendInfoMap["is_manual_process"]= "Y";
    // 备注
    $extendInfoMap["remark"]= "商户描述商户描述商户描述商户描述商户描述";
    // 汇付机具号
    $extendInfoMap["devs_id"]= "SPINTP366061800405501";
    // 商户操作员号
    // $extendInfoMap["mer_oper_id"]= "";
    // 批次号
    // $extendInfoMap["batch_id"]= "";
    // 扩展域
    // $extendInfoMap["mer_priv"]= "";
    // 设备信息
    $extendInfoMap["terminal_device_info"]= getB4cf3131629a41389d2285e0202d1062();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    return $extendInfoMap;
}

function getB6b94958D58f402dA1271d898ffe2200() {
    $dto = array();
    // 基站地址
    $dto["base_station"] = "192.168.1.1";
    // ip地址
    $dto["ip_addr"] = "192.168.1.1";
    // 纬度
    $dto["latitude"] = "33.3";
    // 经度
    $dto["longitude"] = "33.3";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getB4cf3131629a41389d2285e0202d1062() {
    $dto = array();
    // 交易设备GPS
    $dto["device_gps"] = "192.168.0.0";
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
    $dto["devs_id"] = "SPINTP366061800405501";
    // 操作员号
    $dto["mer_oper_id"] = "";
    // 逻辑终端号
    $dto["pnr_dev_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


