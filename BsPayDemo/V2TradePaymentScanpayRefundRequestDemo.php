<?php

/**
 * 扫码交易退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentScanpayRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentScanpayRefundRequest;

// 2.组装请求参数
$request = new V2TradePaymentScanpayRefundRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000108854952");
// 申请退款金额
$request->setOrdAmt("0.01");
// 原交易请求日期
$request->setOrgReqDate("20221107");

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
    $extendInfoMap["org_hf_seq_id"]= "002900TOP3B221107142320P992ac139c0c00000";
    // 原交易微信支付宝的商户单号
    // $extendInfoMap["org_party_order_id"]= "";
    // 原交易请求流水号
    // $extendInfoMap["org_req_seq_id"]= "";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= getDe44bbe09b23407c803428fb32ec77f2();
    // 聚合正扫微信拓展参数集合
    // $extendInfoMap["wx_data"]= get306ab7a74a214b9685bf9f8b803d0799();
    // 数字货币扩展参数集合
    // $extendInfoMap["digital_currency_data"]= get275b21c978344c1a8e42D801d27cc946();
    // 补贴支付信息
    // $extendInfoMap["combinedpay_data"]= get4c09223048e044e3885fC33b82bc6824();
    // 备注
    // $extendInfoMap["remark"]= "";
    // 是否垫资退款
    // $extendInfoMap["loan_flag"]= "";
    // 垫资承担者
    // $extendInfoMap["loan_undertaker"]= "";
    // 垫资账户类型
    // $extendInfoMap["loan_acct_type"]= "";
    // 安全信息
    // $extendInfoMap["risk_check_data"]= get57d1c866D0554233975688940a9456ee();
    // 设备信息
    // $extendInfoMap["terminal_device_data"]= get12d1a96eBb384ca6A52c497be48f399a();
    // 异步通知地址
    // $extendInfoMap["notify_url"]= "";
    // 银联参数集合
    // $extendInfoMap["unionpay_data"]= get0a1da7886929470c9e95Fb2789cec338();
    return $extendInfoMap;
}

function get6fd50ab7Ff504f34B69cCfd37afa62c6() {
    $dto = array();
    // 分账金额
    // $dto["div_amt"] = "test";
    // 分账接收方ID
    // $dto["huifu_id"] = "test";
    // 垫资金额
    // $dto["part_loan_amt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getDe44bbe09b23407c803428fb32ec77f2() {
    $dto = array();
    // 分账信息列表
    // $dto["acct_infos"] = get6fd50ab7Ff504f34B69cCfd37afa62c6();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAedeead20c724363A574D8b7611a331c() {
    $dto = array();
    // 商品编码
    // $dto["goods_id"] = "test";
    // 商品退款金额
    // $dto["refund_amt"] = "test";
    // 商品退款数量
    // $dto["refund_quantity"] = "test";
    // 商品单价
    // $dto["price"] = "test";
    // 微信支付商品编码
    // $dto["wxpay_goods_id"] = "";
    // 商品名称
    // $dto["goods_name"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getD8986f4e6d8c4855A8f06f1fd2afb044() {
    $dto = array();
    // 商品详情列表
    // $dto["goods_detail"] = getAedeead20c724363A574D8b7611a331c();

    return $dto;
}

function get306ab7a74a214b9685bf9f8b803d0799() {
    $dto = array();
    // 退款商品详情
    // $dto["detail"] = getD8986f4e6d8c4855A8f06f1fd2afb044();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get275b21c978344c1a8e42D801d27cc946() {
    $dto = array();
    // 退款原因
    // $dto["refund_desc"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get4c09223048e044e3885fC33b82bc6824() {
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

function get57d1c866D0554233975688940a9456ee() {
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

function get12d1a96eBb384ca6A52c497be48f399a() {
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

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get0a1da7886929470c9e95Fb2789cec338() {
    $dto = array();
    // 收款方附加数据
    // $dto["addn_data"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


