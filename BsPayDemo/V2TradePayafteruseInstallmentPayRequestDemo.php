<?php

/**
 * 分期扣款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePayafteruseInstallmentPayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePayafteruseInstallmentPayRequest;

// 2.组装请求参数
$request = new V2TradePayafteruseInstallmentPayRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 客户号
$request->setHuifuId("6666000108281250");
// 交易金额
$request->setTransAmt("0.01");
// 商品描述
$request->setGoodsDesc("聚合反扫消费");
// 风控信息
$request->setRiskCheckData(getRiskCheckData());
// 交易有效期
$request->setTimeExpire("");
// 支付宝扩展参数集合
$request->setAlipayData(getAlipayData());

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
    // 入账账户号
    $extendInfoMap["acct_id"]= "C02682415";
    // 交易备注
    $extendInfoMap["remark"]= "";
    // 是否延迟交易
    // $extendInfoMap["delay_acct_flag"]= "";
    // 分账串
    // $extendInfoMap["acct_split_bunch"]= getAcctSplitBunch();
    // 设备信息
    $extendInfoMap["terminal_device_info"]= getTerminalDeviceInfo();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    return $extendInfoMap;
}

function getAcctInfos() {
    $dto = array();
    // 分账金额
    // $dto["div_amt"] = "test";
    // 分账接收方商户号
    // $dto["huifu_id"] = "test";
    // 分账接收方账户号
    // $dto["acct_id"] = "";
    // 百分比分账标志
    // $dto["percentage_flag"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAcctSplitBunch() {
    $dto = array();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";
    // 分账明细
    // $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskCheckData() {
    $dto = array();
    // IP地址
    // $dto["ip_addr"] = "test";
    // 经度
    $dto["longitude"] = "1";
    // 纬度
    $dto["latitude"] = "2";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getTerminalDeviceInfo() {
    $dto = array();
    // 商户设备类型
    $dto["mer_device_type"] = "01";
    // 商户终端实时经纬度信息
    $dto["location"] = "+32.10520/+118.80593";
    // 商户交易设备IP
    $dto["mer_device_ip"] = "10.11.12.13";
    // 设备类型
    $dto["device_type"] = "1";
    // 交易设备IP
    $dto["device_ip"] = "10.10.0.1";
    // 交易设备MAC
    $dto["device_mac"] = "F0E1D2C3B4A5";
    // 交易设备GPS
    $dto["device_gps"] = "20.346790";
    // 交易设备IMEI
    $dto["device_imei"] = "660035730311000126101";
    // 交易设备IMSI
    $dto["device_imsi"] = "460030912121001";
    // 交易设备ICCID
    $dto["device_icc_id"] = "660035730311000126101";
    // 交易设备WIFIMAC
    $dto["device_wifi_mac"] = "968778695A4B";
    // 交易设备GPS
    $dto["device_gps"] = "20.346790";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getGoodsDetail() {
    $dto = array();
    // 商品的编号
    // $dto["goods_id"] = "test";
    // 商品名称
    // $dto["goods_name"] = "test";
    // 商品数量
    // $dto["quantity"] = "test";
    // 商品单价
    // $dto["price"] = "test";
    // 商品类目
    // $dto["goods_category"] = "";
    // 商品描述信息
    // $dto["body"] = "";
    // 商品的展示地址
    // $dto["show_url"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getExtendParams() {
    $dto = array();
    // 业务主单号
    $dto["trade_component_order_id"] = "2024101001502300000002570023887054";
    // 分期履约单号
    $dto["tc_installment_order_id"] = "2024101001502301900002570004797346";
    // 系统商编号
    // $dto["sys_service_provider_id"] = "";

    return $dto;
}

function getAlipayData() {
    $dto = array();
    // 业务扩展参数
    $dto["extend_params"] = getExtendParams();
    // 支付宝的店铺编号
    $dto["alipay_store_id"] = "";
    // 商户操作员编号
    // $dto["operator_id"] = "";
    // 商户业务信息
    // $dto["ali_business_params"] = "";
    // 订单包含的商品列表信息
    // $dto["goods_detail"] = getGoodsDetail();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


