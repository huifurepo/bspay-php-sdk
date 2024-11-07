<?php

/**
 * 快捷短信发送 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3TradeOnlinepaymentQuickpaySmssendRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3TradeOnlinepaymentQuickpaySmssendRequest;

// 2.组装请求参数
$request = new V3TradeOnlinepaymentQuickpaySmssendRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 用户客户号
$request->setUserHuifuId("6666000149909053");
// 绑卡id
$request->setCardBindId("10049847200");
// 订单金额
$request->setTransAmt("10.00");
// 异步通知地址
$request->setNotifyUrl("http://tianyi.demo.test.cn/core/extend/BsPaySdk/notify_quick.php");
// 网联数据
// $request->setNuccData(getNuccData());
// 设备数据
$request->setTerminalDeviceData(getTerminalDeviceData());
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
    // 订单类型
    // $extendInfoMap["order_type"]= "";
    // 备注
    // $extendInfoMap["remark"]= "";
    // 订单失效时间
    // $extendInfoMap["time_expire"]= "";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= getAcctSplitBunchRucan();
    // 是否延迟交易
    // $extendInfoMap["delay_acct_flag"]= "";
    // 账户号
    // $extendInfoMap["acct_id"]= "";
    // 手续费扣款标志
    // $extendInfoMap["fee_flag"]= "";
    // 备注
    // $extendInfoMap["remark"]= "";
    // 补贴支付信息
    // $extendInfoMap["combinedpay_data"]= getCombinedpayData();
    return $extendInfoMap;
}

function getAcctInfos() {
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

function getAcctSplitBunchRucan() {
    $dto = array();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";
    // 分账信息列表
    // $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getNuccData() {
    $dto = array();
    // 商品简称
    // $dto["goods_short_name"] = "test";
    // 网关支付受理渠道
    // $dto["gw_chnnl_tp"] = "test";
    // 业务种类
    // $dto["biz_tp"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getTerminalDeviceData() {
    $dto = array();
    // 设备类型
    $dto["device_type"] = "1";
    // 交易设备ip
    $dto["device_ip"] = "106.33.180.238";
    // 交易设备mac
    // $dto["device_mac"] = "";
    // 交易设备imei
    // $dto["device_imei"] = "";
    // 交易设备imsi
    // $dto["device_imsi"] = "";
    // 交易设备iccid
    // $dto["device_icc_id"] = "";
    // 交易设备wifimac
    // $dto["device_wifi_mac"] = "";
    // 交易设备gps
    // $dto["device_gps"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskCheckData() {
    $dto = array();
    // ip地址
    $dto["ip_addr"] = "106.33.180.238";
    // 基站地址
    // $dto["base_station"] = "";
    // 纬度
    // $dto["latitude"] = "";
    // 经度
    // $dto["longitude"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCombinedpayData() {
    $dto = array();
    // 补贴方汇付编号
    // $dto["huifu_id"] = "test";
    // 补贴方类型
    // $dto["user_type"] = "test";
    // 补贴方账户号
    // $dto["acct_id"] = "test";
    // 补贴金额
    // $dto["amount"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


