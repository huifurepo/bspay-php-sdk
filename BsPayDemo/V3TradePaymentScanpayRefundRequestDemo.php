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
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3TradePaymentScanpayRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3TradePaymentScanpayRefundRequest;

// 2.组装请求参数
$request = new V3TradePaymentScanpayRefundRequest();
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
    // $extendInfoMap["acct_split_bunch"]= get7294aba8487147a6942a0c5357968a5e();
    // 微信拓展参数集合
    // $extendInfoMap["wx_data"]= getAf5f54be79934c3f8c49529fcd061464();
    // 数字货币拓展参数集合
    // $extendInfoMap["digital_currency_data"]= get0be12df03c854954B32dB324413a3ca9();
    // 抖音拓展参数集合
    // $extendInfoMap["dy_data"]= getE8deca19C21d4308852c1deaa67386cc();
    // 补贴支付信息
    // $extendInfoMap["combinedpay_data"]= get5d91c24bC8714ba88d8f2342b12a244e();
    // 补贴支付手续费承担方信息
    // $extendInfoMap["combinedpay_data_fee_info"]= get69aca13a8d924fff9289195c39d7c217();
    // 备注
    // $extendInfoMap["remark"]= "";
    // 是否垫资退款
    // $extendInfoMap["loan_flag"]= "";
    // 垫资承担者
    // $extendInfoMap["loan_undertaker"]= "";
    // 垫资账户类型
    // $extendInfoMap["loan_acct_type"]= "";
    // 安全信息
    // $extendInfoMap["risk_check_data"]= getEd401e5fF79e4950A6d6E51ee136d90b();
    // 设备信息
    // $extendInfoMap["terminal_device_data"]= get2e071436C376427c9a072f8523dd4f68();
    // 异步通知地址
    // $extendInfoMap["notify_url"]= "";
    // 银联参数集合
    // $extendInfoMap["unionpay_data"]= getA326a52eD1484c1189d19381b9cb9480();
    return $extendInfoMap;
}

function get8de68f64D0884cc48053932ce32bd311() {
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

function get7294aba8487147a6942a0c5357968a5e() {
    $dto = array();
    // 分账信息列表
    // $dto["acct_infos"] = get8de68f64D0884cc48053932ce32bd311();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get61dda879F4d64bc6Be9638de1fbc0ee4() {
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

function getC8fec9ebCa74483a8bcaF50d4379205a() {
    $dto = array();
    // 商品详情列表
    // $dto["goods_detail"] = get61dda879F4d64bc6Be9638de1fbc0ee4();

    return $dto;
}

function getAf5f54be79934c3f8c49529fcd061464() {
    $dto = array();
    // 退款商品详情
    // $dto["detail"] = getC8fec9ebCa74483a8bcaF50d4379205a();
    // 退款原因
    // $dto["refund_desc"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get0be12df03c854954B32dB324413a3ca9() {
    $dto = array();
    // 退款原因
    // $dto["refund_desc"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getE8deca19C21d4308852c1deaa67386cc() {
    $dto = array();
    // 退款原因
    // $dto["refund_desc"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get5d91c24bC8714ba88d8f2342b12a244e() {
    $dto = array();
    // 汇付商户号
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

function get69aca13a8d924fff9289195c39d7c217() {
    $dto = array();
    // 补贴支付手续费承担方汇付编号
    // $dto["huifu_id"] = "";
    // 补贴支付手续费承担方账户号
    // $dto["acct_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getEd401e5fF79e4950A6d6E51ee136d90b() {
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

function get2e071436C376427c9a072f8523dd4f68() {
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

function getA326a52eD1484c1189d19381b9cb9480() {
    $dto = array();
    // 收款方附加数据
    // $dto["addn_data"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


