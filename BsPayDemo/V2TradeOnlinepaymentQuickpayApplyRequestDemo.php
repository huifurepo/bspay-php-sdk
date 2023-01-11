<?php

/**
 * 快捷支付申请 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentQuickpayApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentQuickpayApplyRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentQuickpayApplyRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000119640000");
// 订单金额
$request->setTransAmt("1980.00");
// 绑卡id
$request->setCardBindId("10032850000");
// 异步通知地址
$request->setNotifyUrl("http://tianyi.demo.test.cn/core/extend/BsPaySdk/notify_quick.php");
// 用户客户号
$request->setUserHuifuId("6666000121370000");
// 安全信息
$request->setRiskCheckData(getRiskCheckData());
// 设备数据
$request->setTerminalDeviceData(getTerminalDeviceData());
// 银行扩展字段
$request->setExtendPayData(getExtendPayData());

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
    // 营销补贴信息
    // $extendInfoMap["combinedpay_data"]= getCombinedpayData();
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= getAcctSplitBunchRucan();
    // 是否延迟交易
    // $extendInfoMap["delay_acct_flag"]= "";
    return $extendInfoMap;
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

function getTerminalDeviceData() {
    $dto = array();
    // 交易设备ip
    $dto["device_ip"] = "106.33.180.238";
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
    $dto["ip_addr"] = "106.33.180.238";
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
    // 分账金额
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
    // 业务种类
    // $dto["biz_tp"] = "test";
    // 商品简称
    // $dto["goods_short_name"] = "test";
    // 网关支付受理渠道
    $dto["gw_chnnl_tp"] = "99";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAcctSplitBunchRucan() {
    $dto = array();
    // 分账信息列表
    // $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


