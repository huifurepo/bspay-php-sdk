<?php

/**
 * 网银支付 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentBankingFrontpayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentBankingFrontpayRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentBankingFrontpayRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000109133323");
// 订单金额
$request->setTransAmt("0.02");
// 商品描述
$request->setGoodsDesc("网银支付下单");
// 网联扩展数据
$request->setExtendPayData(get41a3882943be433986df896d5ad9bbc7());
// 设备信息
$request->setTerminalDeviceData(get6cbdad332b5f4dfe89d107e7e323b3ff());
// 安全信息
$request->setRiskCheckData(get8334e31082524280943eE90c27c8c86e());
// 异步通知地址
$request->setNotifyUrl("http://www.chinapnr.com");

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
    // 收款汇付账户号
    $extendInfoMap["acct_id"]= "";
    // 订单类型
    $extendInfoMap["order_type"]= "P";
    // 付款方银行编号
    $extendInfoMap["bank_id"]= "";
    // 卡类型
    $extendInfoMap["card_type"]= "D";
    // 备注
    $extendInfoMap["remark"]= "网银支付接口";
    // 订单失效时间
    $extendInfoMap["time_expire"]= "";
    // 网关支付类型
    $extendInfoMap["gate_type"]= "01";
    // 延时标记
    $extendInfoMap["delay_acct_flag"]= "N";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= get2e3d17e1485d440aA68a0dede46dd8b3();
    // 手续费扣款标志
    // $extendInfoMap["fee_flag"]= "";
    // 页面跳转地址
    $extendInfoMap["front_url"]= "http://www.chinapnr.com";
    return $extendInfoMap;
}

function getF5794a341ce740feB74dDfd50cfb54d0() {
    $dto = array();
    // 分账金额
    // $dto["div_amt"] = "";
    // 分账接收方ID
    // $dto["huifu_id"] = "";
    // 接收方账户号
    // $dto["acct_id"] = "";
    // 分账百分比%
    // $dto["percentage_div"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get2e3d17e1485d440aA68a0dede46dd8b3() {
    $dto = array();
    // 分账明细
    // $dto["acct_infos"] = getF5794a341ce740feB74dDfd50cfb54d0();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get41a3882943be433986df896d5ad9bbc7() {
    $dto = array();
    // 商品简称
    $dto["goods_short_name"] = "011111";
    // 网关支付受理渠道
    $dto["gw_chnnl_tp"] = "01";
    // 业务种类
    $dto["biz_tp"] = "123451";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get6cbdad332b5f4dfe89d107e7e323b3ff() {
    $dto = array();
    // 交易设备类型
    $dto["device_type"] = "1";
    // 交易设备IP
    $dto["device_ip"] = "127.0.0.1";
    // 交易设备MAC
    // $dto["device_mac"] = "";
    // 交易终端设备IMEI
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

function get8334e31082524280943eE90c27c8c86e() {
    $dto = array();
    // ip地址
    $dto["ip_addr"] = "1";
    // 基站地址
    $dto["base_station"] = "2";
    // 纬度
    $dto["latitude"] = "3";
    // 经度
    $dto["longitude"] = "4";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


