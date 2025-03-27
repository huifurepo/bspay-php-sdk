<?php

/**
 * 托管交易退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeHostingPaymentHtrefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeHostingPaymentHtrefundRequest;

// 2.组装请求参数
$request = new V2TradeHostingPaymentHtrefundRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000003100616");
// 申请退款金额
$request->setOrdAmt("0.01");
// 原交易请求日期
$request->setOrgReqDate("20240229");
// 安全信息线上交易退款必填，参见线上退款接口；jsonObject字符串
$request->setRiskCheckData(get195595a868964f2bB023E9566fcd0297());
// 设备信息线上交易退款必填，参见线上退款接口；jsonObject字符串
$request->setTerminalDeviceData(get8d8843c250f94e9b80a253d37ec6f80a());
// 大额转账支付账户信息数据jsonObject格式；银行大额转账支付交易退款申请时必填
// $request->setBankInfoData(getAa3a4591240343e2Bad5D6a0764f06dc());

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
    // 原交易全局流水号
    $extendInfoMap["org_hf_seq_id"]= "";
    // 原交易微信支付宝的商户单号
    $extendInfoMap["org_party_order_id"]= "";
    // 原交易请求流水号
    $extendInfoMap["org_req_seq_id"]= "202207099803123123199941";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= get4a68d378Cb6e41dfA9405a589b476160();
    // 备注
    // $extendInfoMap["remark"]= "";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    return $extendInfoMap;
}

function get33a52525B1614d3bBc18Ff7d935b2bca() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "0.12";
    // 分账接收方ID
    $dto["huifu_id"] = "6666000003100616";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get4a68d378Cb6e41dfA9405a589b476160() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = get33a52525B1614d3bBc18Ff7d935b2bca();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get195595a868964f2bB023E9566fcd0297() {
    $dto = array();
    // ip地址
    // $dto["ip_addr"] = "";
    // 基站地址
    // $dto["base_station"] = "";
    // 纬度
    // $dto["latitude"] = "";
    // 经度
    // $dto["longitude"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get8d8843c250f94e9b80a253d37ec6f80a() {
    $dto = array();
    // 设备类型
    $dto["device_type"] = "4";
    // 交易设备IP
    // $dto["device_ip"] = "";
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

function getAa3a4591240343e2Bad5D6a0764f06dc() {
    $dto = array();
    // 省份付款方为对公账户时必填，参见省市地区码；示例值：0013
    // $dto["province"] = "test";
    // 地区付款方为对公账户时必填，参见省市地区码；示例值：1301
    // $dto["area"] = "test";
    // 银行编号付款方为对公账户时必填，参考：银行编码； 示例值：01040000
    // $dto["bank_code"] = "test";
    // 联行号付款方为对公账户时必填，参见：银行支行编码； 示例值：102290026507
    // $dto["correspondent_code"] = "test";
    // 付款方账户类型
    // $dto["card_acct_type"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


