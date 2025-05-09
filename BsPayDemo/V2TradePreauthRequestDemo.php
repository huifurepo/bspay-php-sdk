<?php

/**
 * 微信支付宝预授权 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePreauthRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePreauthRequest;

// 2.组装请求参数
$request = new V2TradePreauthRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000108854952");
// 交易金额
$request->setTransAmt("0.02");
// 商品描述
$request->setGoodsDesc("123213213");
// 支付授权码
$request->setAuthCode("280426995846228615");
// 安全信息
$request->setRiskCheckData(get88a48f6c221e4ff5B8006bf8874c4dd3());

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
    // 外部订单号
    $extendInfoMap["out_ord_id"]= "2021031722001427671459048436";
    // 交易发起时间
    $extendInfoMap["send_time"]= "12345678901234567";
    // 交易失效时间
    $extendInfoMap["time_expire"]= "20221130121212";
    // 禁用信用卡标记
    $extendInfoMap["limit_pay_type"]= "NO_CREDIT";
    // 场景类型
    $extendInfoMap["pay_scene"]= "02";
    // 渠道号
    $extendInfoMap["channel_no"]= "";
    // 传入分帐遇到优惠的处理规则
    $extendInfoMap["term_div_coupon_type"]= "1";
    // 支付宝扩展参数集合
    $extendInfoMap["alipay_data"]= get386c6c5f282c46f1A7232adc003f8634();
    // 微信扩展参数集合
    $extendInfoMap["wx_data"]= get7dd691ab53b04a40Bc4085a152d039a5();
    // 商户扩展域
    $extendInfoMap["mer_priv"]= "{\"callType\":\"01\",\"lc\":\"12345678901234567890123456789012123\",\"softVersion\":\"6.5.3\"}";
    // 备注
    $extendInfoMap["remark"]= "123213132132";
    // 授权号
    $extendInfoMap["auth_no"]= "608467";
    // 批次号
    $extendInfoMap["batch_id"]= "987654";
    // 商户操作员号
    $extendInfoMap["mer_oper_id"]= "12345678901234567890123456789012";
    // 输入密码提示
    // $extendInfoMap["password_trade"]= "";
    // 设备信息
    $extendInfoMap["terminal_device_data"]= get99f5455594464feeAa6a9f39230613f8();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    // 账户号
    // $extendInfoMap["acct_id"]= "";
    return $extendInfoMap;
}

function getFc5a9d0c6088469684325146af94fd15() {
    $dto = array();
    // 卡类型
    $dto["card_type"] = "";
    // 支付宝点餐场景类型
    $dto["food_order_type"] = "qr_order";
    // 花呗分期数
    $dto["hb_fq_num"] = "";
    // 手续费百分比
    $dto["hb_fq_seller_percent"] = "";
    // 行业数据回流信息
    $dto["industry_reflux_info"] = "";
    // 系统商编号
    $dto["sys_service_provider_id"] = "";

    return $dto;
}

function get334aa3af21e2449b9ef567aef6e832f3() {
    $dto = array();
    // 商品的编号
    $dto["goods_id"] = "12345678901234567890123456789012";
    // 商品名称
    $dto["goods_name"] = "111";
    // 商品单价
    $dto["price"] = "1.01";
    // 商品数量
    $dto["quantity"] = "1";
    // 商品描述信息
    $dto["body"] = "";
    // 商品类目树
    $dto["categories_tree"] = "";
    // 商品类目
    $dto["goods_category"] = "";
    // 商品的展示地址
    $dto["show_url"] = "321313";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get386c6c5f282c46f1A7232adc003f8634() {
    $dto = array();
    // 支付宝的店铺编号
    $dto["alipay_store_id"] = "";
    // 业务扩展参数
    $dto["extend_params"] = getFc5a9d0c6088469684325146af94fd15();
    // 订单包含的商品列表信息
    $dto["goods_detail"] = get334aa3af21e2449b9ef567aef6e832f3();
    // 商户操作员编号
    $dto["operator_id"] = "1234567890123456789012345678";
    // 商户门店编号
    $dto["store_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get1475c6ac101f41fcBb3e7240e5b8b639() {
    $dto = array();
    // 商品编码
    $dto["goods_id"] = "1232131";
    // 商品名称
    $dto["goods_name"] = "汇付天下";
    // 商品单价
    $dto["price"] = "0.50";
    // 商品数量
    $dto["quantity"] = 0;
    // 微信侧商品编码
    $dto["wxpay_goods_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get0a4d393026664aa68b07Be0921a28479() {
    $dto = array();
    // 单品列表
    $dto["goods_detail"] = get1475c6ac101f41fcBb3e7240e5b8b639();
    // 订单原价
    $dto["cost_price"] = "1";
    // 商品小票ID
    $dto["receipt_id"] = "";

    return $dto;
}

function get77b20125Baf94a3dA333C5fdeb7033d0() {
    $dto = array();
    // 门店详细地址
    $dto["address"] = "汇付天下桂林路";
    // 门店行政区划码
    $dto["area_code"] = "310";
    // 门店id
    $dto["id"] = "1232131";
    // 门店名称
    $dto["name"] = "测试";

    return $dto;
}

function get3f7b8679D63e470a90c9F1bda7adaa66() {
    $dto = array();
    // 门店信息
    $dto["store_info"] = get77b20125Baf94a3dA333C5fdeb7033d0();

    return $dto;
}

function get7dd691ab53b04a40Bc4085a152d039a5() {
    $dto = array();
    // 附加数据
    $dto["attach"] = "";
    // 商品详情
    $dto["detail"] = get0a4d393026664aa68b07Be0921a28479();
    // 设备号
    $dto["device_info"] = "";
    // 订单优惠标记
    $dto["goods_tag"] = "12321312";
    // 场景信息
    $dto["scene_info"] = get3f7b8679D63e470a90c9F1bda7adaa66();
    // 子商户公众账号ID
    $dto["sub_appid"] = "wx48abf94e085e98e1";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get88a48f6c221e4ff5B8006bf8874c4dd3() {
    $dto = array();
    // 基站地址
    $dto["base_station"] = "192.168.1.1";
    // ip地址
    $dto["ip_addr"] = "180.167.105.130";
    // 纬度
    $dto["latitude"] = "33.3";
    // 经度
    $dto["longitude"] = "33.3";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get99f5455594464feeAa6a9f39230613f8() {
    $dto = array();
    // 商户终端版本号
    $dto["app_version"] = "";
    // 交易设备GPS
    $dto["device_gps"] = "";
    // 交易设备ICCID
    $dto["device_icc_id"] = "";
    // 交易设备IMEI
    $dto["device_imei"] = "";
    // 交易设备IMSI
    $dto["device_imsi"] = "";
    // 交易设备IP
    $dto["device_ip"] = "10.10.0.1";
    // 交易设备MAC
    $dto["device_mac"] = "";
    // 设备类型
    $dto["device_type"] = "1";
    // 交易设备WIFIMAC
    $dto["device_wifi_mac"] = "";
    // 汇付机具号
    $dto["devs_id"] = "SPINTP366020000360401";
    // ICCID
    $dto["icc_id"] = "";
    // 商户终端实时经纬度信息
    $dto["location"] = "+32.10520/+118.80593";
    // 商户交易设备IP
    $dto["mer_device_ip"] = "";
    // 商户设备类型
    $dto["mer_device_type"] = "01";
    // 移动国家代码
    $dto["mobile_country_cd"] = "";
    // 移动网络号码
    $dto["mobile_net_num"] = "";
    // 商户终端入网认证编号
    $dto["network_license"] = "P3111";
    // 商户终端序列号
    $dto["serial_num"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


