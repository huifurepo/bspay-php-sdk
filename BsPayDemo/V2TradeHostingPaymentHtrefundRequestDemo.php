<?php

/**
 * 统一收银台交易退款 - 示例
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
$request->setRiskCheckData(get23e26cf0945b48fa956a9cf1d9de0bc2());
// 设备信息线上交易退款必填，参见线上退款接口；jsonObject字符串
$request->setTerminalDeviceData(get2a00d4edBc624d72A543F7981bbb91a4());
// 大额转账支付账户信息数据jsonObject格式；银行大额转账支付交易退款申请时必填
// $request->setBankInfoData(get8715a51e6c3f4b4c8220F0c99a839c2e());

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
    // 原交易全局流水号
    $extendInfoMap["org_hf_seq_id"]= "";
    // 原交易微信支付宝的商户单号
    $extendInfoMap["org_party_order_id"]= "";
    // 原交易请求流水号
    $extendInfoMap["org_req_seq_id"]= "202207099803123123199941";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= get49056c85Ad904b4fB10e9184a2a9ef46();
    // 备注
    // $extendInfoMap["remark"]= "";
    // 是否垫资退款
    // $extendInfoMap["loan_flag"]= "";
    // 垫资承担者
    // $extendInfoMap["loan_undertaker"]= "";
    // 垫资账户类型
    // $extendInfoMap["loan_acct_type"]= "";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    // 抖音拓展参数集合
    // $extendInfoMap["dy_data"]= get5557f4f4Ccc04255820eEe2ef2fae63c();
    // 子单退款信息列表
    // $extendInfoMap["sub_orders_request"]= get71c30c76C15b427eB5f138660e74cae2();
    return $extendInfoMap;
}

function get8c84d690642f48ce8b4c5b44e6f1441c() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "0.12";
    // 分账接收方ID
    $dto["huifu_id"] = "6666000003100616";
    // 垫资金额
    // $dto["part_loan_amt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get49056c85Ad904b4fB10e9184a2a9ef46() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = get8c84d690642f48ce8b4c5b44e6f1441c();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get23e26cf0945b48fa956a9cf1d9de0bc2() {
    $dto = array();
    // ip地址
    $dto["ip_addr"] = "127.0.0.1";
    // 基站地址
    // $dto["base_station"] = "";
    // 纬度
    // $dto["latitude"] = "";
    // 经度
    // $dto["longitude"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get2a00d4edBc624d72A543F7981bbb91a4() {
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

function get8715a51e6c3f4b4c8220F0c99a839c2e() {
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

function get5557f4f4Ccc04255820eEe2ef2fae63c() {
    $dto = array();
    // 退款原因
    // $dto["refund_desc"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get8fc59e80664a4493B9a0796467c8a91a() {
    $dto = array();
    // 分账金额
    // $dto["div_amt"] = "test";
    // 分账接收方ID
    // $dto["huifu_id"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getE42dd76d256b4a4595b43b74f719c75c() {
    $dto = array();
    // 分账信息列表
    // $dto["acct_infos"] = get8fc59e80664a4493B9a0796467c8a91a();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get71c30c76C15b427eB5f138660e74cae2() {
    $dto = array();
    // 子单请求日期
    // $dto["sub_req_date"] = "test";
    // 子单请求流水号
    // $dto["sub_req_seq_id"] = "test";
    // 子单商户号
    // $dto["sub_huifu_id"] = "test";
    // 子单申请退款金额
    // $dto["sub_ord_amt"] = "test";
    // 原子单交易请求日期
    // $dto["org_sub_req_date"] = "test";
    // 原子单交易全局流水号
    // $dto["org_sub_hf_seq_id"] = "";
    // 原子单交易请求流水号
    // $dto["org_sub_req_seq_id"] = "";
    // 分账对象
    // $dto["acct_split_bunch"] = getE42dd76d256b4a4595b43b74f719c75c();
    // 子单备注
    // $dto["sub_remark"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


