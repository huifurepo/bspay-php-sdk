<?php

/**
 * 微信支付宝预授权撤销 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentPreauthcancelRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentPreauthcancelRefundRequest;

// 2.组装请求参数
$request = new V2TradePaymentPreauthcancelRefundRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 客户号
$request->setHuifuId("6666000108854952");
// 原交易请求日期
$request->setOrgReqDate("20221031");
// 撤销金额
$request->setOrdAmt("0.02");
// 风控信息
$request->setRiskCheckInfo(getBa2f25bc65d74cb3988e7e446466b598());

// 设置非必填字段
$extendInfoMap = getExtendInfos();
$request->setExtendInfo($extendInfoMap);

// 3. 发起API调用
$client = new BsPayClient();
$result = $client->postRequest($request);
$respData = $result->getRspDatas();
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
    // 原授权号
    $extendInfoMap["org_auth_no"]= "";
    // 原交易请求流水号
    $extendInfoMap["org_req_seq_id"]= "";
    // 原预授权全局流水号
    $extendInfoMap["pre_auth_hf_seq_id"]= "0029000topB221031162644P959c0a8305400000";
    // 批次号
    $extendInfoMap["batch_id"]= "";
    // 商品描述
    $extendInfoMap["good_desc"]= "";
    // 备注
    $extendInfoMap["remark"]= "";
    // 交易发起时间
    $extendInfoMap["send_time"]= "";
    // 是否人工介入
    $extendInfoMap["is_manual_process"]= "Y";
    // 汇付机具号
    $extendInfoMap["devs_id"]= "SPINTP366020000360401";
    // 商户操作员号
    // $extendInfoMap["mer_oper_id"]= "";
    // 扩展域
    // $extendInfoMap["mer_priv"]= "";
    // 设备信息
    $extendInfoMap["terminal_device_info"]= get79fb2f88C61b423e8bd8B4696ecef9d7();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    return $extendInfoMap;
}

function getBa2f25bc65d74cb3988e7e446466b598() {
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

function get79fb2f88C61b423e8bd8B4696ecef9d7() {
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


