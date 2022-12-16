<?php

/**
 * 手机WAP支付 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentWappayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentWappayRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentWappayRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000103124174");
// 交易金额
$request->setTransAmt("300.01");
// 网联扩展数据
$request->setExtendPayData(getExtendPayData());
// 安全信息
$request->setRiskCheckData(getRiskCheckData());
// 设备信息
$request->setTerminalDeviceData(getTerminalDeviceData());
// 页面跳转地址
$request->setFrontUrl("http://www.baidu.com");
// 异步通知地址
$request->setNotifyUrl("virgo://http://192.168.25.213:30030/sspc/onlineAsync");

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
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= getAcctSplitBunchRucan();
    // 银行卡号
    $extendInfoMap["bank_card_no"]= "6222021102043040313";
    // 延时标记
    $extendInfoMap["delay_acct_flag"]= "N";
    // 交易有效期
    $extendInfoMap["time_expire"]= "20220406210038";
    // 分期期数
    $extendInfoMap["instalments_num"]= "03";
    // 页面失败跳转地址
    $extendInfoMap["front_fail_url"]= "http://www.baidu.com";
    // 备注
    $extendInfoMap["remark"]= "";
    return $extendInfoMap;
}

function getTerminalDeviceData() {
    $dto = array();
    // 交易设备ip
    $dto["device_ip"] = "127.0.0.1";
    // 设备类型
    $dto["device_type"] = "1";
    // 交易设备gps
    // $dto["device_gps"] = "";
    // 交易设备iccid
    // $dto["device_icc_id"] = "";
    // 交易设备imei
    // $dto["device_imei"] = "";
    // 交易设备imsi
    // $dto["device_imsi"] = "";
    // 交易设备mac
    // $dto["device_mac"] = "";
    // 交易设备wifimac
    // $dto["device_wifi_mac"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskCheckData() {
    $dto = array();
    // ip地址
    $dto["ip_addr"] = "111";
    // 基站地址
    // $dto["base_atation"] = "";
    // 纬度
    // $dto["latitude"] = "";
    // 经度
    // $dto["longitude"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAcctInfos() {
    $dto = array();
    // 支付金额
    // $dto["div_amt"] = "";
    // 被分账方ID
    // $dto["huifu_id"] = "";
    // 账户号
    // $dto["acct_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getExtendPayData() {
    $dto = array();
    // 商品简称
    $dto["goods_short_name"] = "一般商品";
    // 网关支付受理渠道
    $dto["gw_chnnl_tp"] = "01";
    // 业务种类
    $dto["biz_tp"] = "123456";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAcctSplitBunchRucan() {
    $dto = array();
    // 分账信息列表
    $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

