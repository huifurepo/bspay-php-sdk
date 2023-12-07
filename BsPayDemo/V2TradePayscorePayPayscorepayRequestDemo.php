<?php

/**
 * 支付分扣款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePayscorePayPayscorepayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePayscorePayPayscorepayRequest;

// 2.组装请求参数
$request = new V2TradePayscorePayPayscorepayRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000141569791");
// 扣款登记创建请求流水号deduct_req_seq_id与deduct_hf_seq_id二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2022012614120615001&lt;/font&gt;
$request->setDeductReqSeqId("1726841301594394626");
// 扣款登记返回的汇付全局流水号deduct_req_seq_id与deduct_hf_seq_id二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00470topo1A211015160805P090ac132fef00000&lt;/font&gt;
// $request->setDeductHfSeqId("test");
// 微信扣款单号
$request->setOutTradeNo("03212311224952047516172");
// 商品描述
$request->setGoodsDesc("bp充电");
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
    // 聚合反扫微信参数集合
    // $extendInfoMap["wx_data"]= getWxData();
    // 是否延迟交易
    // $extendInfoMap["delay_acct_flag"]= "";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= getAcctSplitBunch();
    // 设备信息
    // $extendInfoMap["terminal_device_info"]= getTerminalDeviceInfo();
    // 交易备注
    // $extendInfoMap["remark"]= "";
    // 商户回调地址
    // $extendInfoMap["notify_url"]= "";
    return $extendInfoMap;
}

function getWxData() {
    $dto = array();
    // 子商户用户标识
    // $dto["sub_openid"] = "test";
    // 子商户公众账号id
    // $dto["sub_appid"] = "";
    // 用户标识
    // $dto["openid"] = "";
    // 设备号
    // $dto["device_info"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAcctInfos() {
    $dto = array();
    // 分账金额
    // $dto["div_amt"] = "test";
    // 分账商户号
    // $dto["huifu_id"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAcctSplitBunch() {
    $dto = array();
    // 分账明细
    // $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskCheckData() {
    $dto = array();
    // ip地址
    $dto["ip_address"] = "127.0.0.1";
    // 基站地址
    // $dto["base_station"] = "";
    // 纬度
    // $dto["latitude"] = "";
    // 经度
    // $dto["longitude"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getTerminalDeviceInfo() {
    $dto = array();
    // 设备类型
    // $dto["device_type"] = "";
    // 交易设备IP
    // $dto["device_ip"] = "";
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
    // 商户终端应用程序版
    // $dto["app_version"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


