<?php

/**
 * 余额支付 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeAcctpaymentPayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeAcctpaymentPayRequest;

// 2.组装请求参数
$request = new V2TradeAcctpaymentPayRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 出款方商户号
$request->setOutHuifuId("6666000018344461");
// 支付金额
$request->setOrdAmt("0.01");
// 分账对象
$request->setAcctSplitBunch(getAcctSplitBunch());
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
    // ~~发起方商户号~~
    // $extendInfoMap["~~huifu_id~~"]= "";
    // 商品描述
    // $extendInfoMap["good_desc"]= "";
    // 备注
    // $extendInfoMap["remark"]= "";
    // 是否延迟交易
    // $extendInfoMap["delay_acct_flag"]= "";
    // 设备信息
    $extendInfoMap["terminal_device_data"]= getTerminalDeviceData();
    // 出款方账户号
    // $extendInfoMap["out_acct_id"]= "";
    return $extendInfoMap;
}

function getTerminalDeviceData() {
    $dto = array();
    // 设备类型
    $dto["device_type"] = "1";
    // 交易设备IP
    $dto["device_ip"] = "10.10.0.1";
    // 交易设备MAC
    // $dto["device_mac"] = "";
    // 交易设备GPS
    // $dto["device_gps"] = "";
    // 交易设备IMEI
    // $dto["device_imei"] = "";
    // 交易设备IMSI
    // $dto["device_imsi"] = "";
    // 交易设备ICCID
    // $dto["device_icc_id"] = "";
    // 交易设备WIFIMAC
    // $dto["device_wifi_mac"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAcctSplitBunch() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskCheckData() {
    $dto = array();
    // 转账原因
    $dto["transfer_type"] = "04";
    // 产品子类
    $dto["sub_product"] = "1";
    // 纬度
    // $dto["latitude"] = "";
    // 经度
    // $dto["longitude"] = "";
    // 基站地址
    // $dto["base_atation"] = "";
    // IP地址
    // $dto["ip_addr"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAcctInfos() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "0.01";
    // 被分账方ID
    $dto["huifu_id"] = "6666000018344461";
    // 被分账方账户号
    // $dto["acct_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}


