<?php

/**
 * 应用场景 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3TradePaymentJspayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3TradePaymentJspayRequest;

// 2.组装请求参数
$request = new V3TradePaymentJspayRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 商品描述
$request->setGoodsDesc("hibs自动化-通用版验证");
// 交易类型
$request->setTradeType("A_NATIVE");
// 交易金额
$request->setTransAmt("0.10");

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
    // 账户号
    // $extendInfoMap["acct_id"]= "";
    // 交易有效期
    $extendInfoMap["time_expire"]= "20250518235959";
    // 微信参数集合
    $extendInfoMap["wx_data"]= get168591ab37ca4acb897b19582b0f73ba();
    // 支付宝参数集合
    $extendInfoMap["alipay_data"]= getDc341529804741c19fd28b3f6e9b3cce();
    // 银联参数集合
    $extendInfoMap["unionpay_data"]= get8522599bC4cd433686a4000295dc2c07();
    // 数字人民币参数集合
    // $extendInfoMap["dc_data"]= get4cbfb50f28374e99A5f17b6680a8ba8f();
    // 是否延迟交易
    $extendInfoMap["delay_acct_flag"]= "N";
    // 手续费扣款标志
    // $extendInfoMap["fee_flag"]= "";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= getA8c3340fD7ad4be88eb3Bbd621899bc5();
    // 传入分账遇到优惠的处理规则
    $extendInfoMap["term_div_coupon_type"]= "0";
    // 补贴支付信息
    // $extendInfoMap["combinedpay_data"]= getA7ba95817bd540a9Be240bfc181ed1a5();
    // 禁用信用卡标记
    $extendInfoMap["limit_pay_type"]= "NO_CREDIT";
    // 商户贴息标记
    $extendInfoMap["fq_mer_discount_flag"]= "N";
    // 渠道号
    $extendInfoMap["channel_no"]= "";
    // 场景类型
    $extendInfoMap["pay_scene"]= "02";
    // 备注
    $extendInfoMap["remark"]= "string";
    // 安全信息
    $extendInfoMap["risk_check_data"]= get5c4e203a5bd643ff9afc6140d6b2f5ea();
    // 设备信息
    $extendInfoMap["terminal_device_data"]= get5269ec51D37a4b589f4a453164d6ff69();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    // 手续费补贴信息
    // $extendInfoMap["trans_fee_allowance_info"]= getC2b2fc1aAfc843de93249614a637160e();
    return $extendInfoMap;
}

function getA6692ac734494b20B965689d289e5a8f() {
    $dto = array();
    // 商品编码
    $dto["goods_id"] = "6934572310301";
    // 商品名称
    $dto["goods_name"] = "太龙双黄连口服液";
    // 商品单价(元)
    $dto["price"] = "43.00";
    // 商品数量
    $dto["quantity"] = "1";
    // 微信侧商品编码
    $dto["wxpay_goods_id"] = "12235413214070356458058";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getEed882af96b94d96Be9d9477597fa560() {
    $dto = array();
    // 单品列表
    $dto["goods_detail"] = getA6692ac734494b20B965689d289e5a8f();
    // 订单原价(元)
    $dto["cost_price"] = "43.00";
    // 商品小票ID
    $dto["receipt_id"] = "20220628132043853798";

    return $dto;
}

function get8064df7d13ba456e9a8fEe1d24079a32() {
    $dto = array();
    // 门店id
    // $dto["id"] = "";
    // 门店名称
    // $dto["name"] = "";
    // 门店行政区划码
    // $dto["area_code"] = "";
    // 门店详细地址
    // $dto["address"] = "";

    return $dto;
}

function get63f140f7Ac5d4679863fB5864e917437() {
    $dto = array();
    // 门店信息
    // $dto["store_info"] = get8064df7d13ba456e9a8fEe1d24079a32();

    return $dto;
}

function get168591ab37ca4acb897b19582b0f73ba() {
    $dto = array();
    // 子商户应用ID
    $dto["sub_appid"] = "wxdfe9a5d141f96685";
    // 子商户用户标识
    $dto["sub_openid"] = "o8jhotzittQSetZ-N0Yj4Hz91Rqc";
    // 附加数据
    // $dto["attach"] = "";
    // 商品描述
    // $dto["body"] = "";
    // 商品详情
    $dto["detail"] = getEed882af96b94d96Be9d9477597fa560();
    // 设备号
    // $dto["device_info"] = "";
    // 订单优惠标记
    // $dto["goods_tag"] = "";
    // 实名支付
    // $dto["identity"] = "";
    // 开发票入口开放标识
    // $dto["receipt"] = "";
    // 场景信息
    $dto["scene_info"] = get63f140f7Ac5d4679863fB5864e917437();
    // 终端ip
    // $dto["spbill_create_ip"] = "";
    // 单品优惠标识
    // $dto["promotion_flag"] = "";
    // 新增商品ID
    // $dto["product_id"] = "";
    // 指定支付者
    // $dto["limit_payer"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get0043975b029b4742B772C57a26a21315() {
    $dto = array();
    // 卡类型
    $dto["card_type"] = "";
    // 支付宝点餐场景类型
    $dto["food_order_type"] = "qr_order";
    // 花呗分期数
    $dto["hb_fq_num"] = "";
    // 花呗卖家手续费百分比
    $dto["hb_fq_seller_percent"] = "";
    // 行业数据回流信息
    $dto["industry_reflux_info"] = "string";
    // 信用卡分期资产方式
    // $dto["fq_channels"] = "";
    // 停车场id
    $dto["parking_id"] = "123wsx";
    // 系统商编号
    $dto["sys_service_provider_id"] = "1111111";

    return $dto;
}

function get9e61e87128dc44189fbf0bc088f40e87() {
    $dto = array();
    // 商品的编号
    $dto["goods_id"] = "12312321";
    // 商品名称
    $dto["goods_name"] = "汇付";
    // 商品单价(元)
    $dto["price"] = "43.00";
    // 商品数量
    $dto["quantity"] = "20";
    // 商品描述信息
    $dto["body"] = "";
    // 商品类目树
    $dto["categories_tree"] = "string";
    // 商品的展示地址
    $dto["show_url"] = "";
    // 商品类目
    $dto["goods_category"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get7d5032cbFa164b0bBdb43293328713f0() {
    $dto = array();
    // 姓名
    // $dto["name"] = "";
    // 手机号
    // $dto["mobile"] = "";
    // 证件类型
    // $dto["cert_type"] = "";
    // 证件号
    // $dto["cert_no"] = "";
    // 允许的最小买家年龄
    // $dto["min_age"] = "";
    // 是否强制校验付款人身份信息
    // $dto["fix_buyer"] = "";
    // 是否强制校验身份信息
    // $dto["need_check_info"] = "";

    return $dto;
}

function getDc341529804741c19fd28b3f6e9b3cce() {
    $dto = array();
    // 支付宝的店铺编号
    $dto["alipay_store_id"] = "";
    // 买家的支付宝唯一用户号
    $dto["buyer_id"] = "208870269990XXXX";
    // 买家支付宝账号
    $dto["buyer_logon_id"] = "string";
    // 业务扩展参数
    $dto["extend_params"] = get0043975b029b4742B772C57a26a21315();
    // 订单包含的商品列表信息
    $dto["goods_detail"] = get9e61e87128dc44189fbf0bc088f40e87();
    // 商户原始订单号
    $dto["merchant_order_no"] = "string";
    // 商户操作员编号
    $dto["operator_id"] = "123213213";
    // 销售产品码
    $dto["product_code"] = "string";
    // 卖家支付宝用户号
    $dto["seller_id"] = "string";
    // 商户门店编号
    $dto["store_id"] = "";
    // 外部指定买家
    // $dto["ext_user_info"] = get7d5032cbFa164b0bBdb43293328713f0();
    // 订单标题
    // $dto["subject"] = "";
    // 商家门店名称
    // $dto["store_name"] = "";
    // 小程序应用的appid
    // $dto["op_app_id"] = "";
    // 商户业务信息
    // $dto["ali_business_params"] = "";
    // 订单描述
    // $dto["body"] = "";
    // 优惠明细参数
    // $dto["ali_promo_params"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get072bd230957b4e2396b28e36668d387c() {
    $dto = array();
    // 商户类别
    // $dto["mer_cat_code"] = "";
    // 二级商户代码
    // $dto["sub_id"] = "";
    // 二级商户名称
    // $dto["sub_name"] = "";
    // 终端号
    // $dto["term_id"] = "";

    return $dto;
}

function get8522599bC4cd433686a4000295dc2c07() {
    $dto = array();
    // 二维码
    // $dto["qr_code"] = "";
    // 收款方附加数据
    // $dto["addn_data"] = "";
    // 地区信息
    // $dto["area_info"] = "";
    // 持卡人ip
    // $dto["customer_ip"] = "";
    // 前台通知地址
    // $dto["front_url"] = "";
    // 订单描述
    // $dto["order_desc"] = "";
    // 收款方附言
    // $dto["payee_comments"] = "";
    // 收款方信息
    // $dto["payee_info"] = get072bd230957b4e2396b28e36668d387c();
    // 银联分配的服务商机构标识码
    // $dto["pnr_ins_id_cd"] = "";
    // 请求方自定义域
    // $dto["req_reserved"] = "";
    // 终端信息
    // $dto["term_info"] = "";
    // 银联用户标识
    // $dto["user_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get4cbfb50f28374e99A5f17b6680a8ba8f() {
    $dto = array();
    // 数字货币银行编号
    // $dto["digital_bank_no"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getD0e70a3e2d99441fAba463c07a0b85bc() {
    $dto = array();
    // 分账接收方ID
    $dto["huifu_id"] = "6666000109133323";
    // 分账金额
    $dto["div_amt"] = "0.10";
    // 账户号
    // $dto["acct_id"] = "";
    // 分账百分比%
    // $dto["percentage_div"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getA8c3340fD7ad4be88eb3Bbd621899bc5() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getD0e70a3e2d99441fAba463c07a0b85bc();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getA7ba95817bd540a9Be240bfc181ed1a5() {
    $dto = array();
    // 补贴方汇付商户号
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

function get5c4e203a5bd643ff9afc6140d6b2f5ea() {
    $dto = array();
    // ip地址
    $dto["ip_addr"] = "180.167.105.130";
    // 基站地址
    $dto["base_station"] = "192.168.1.1";
    // 纬度
    $dto["latitude"] = "33.3";
    // 经度
    $dto["longitude"] = "33.3";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get5269ec51D37a4b589f4a453164d6ff69() {
    $dto = array();
    // 商户设备类型
    // $dto["mer_device_type"] = "test";
    // 汇付机具号
    $dto["devs_id"] = "SPINTP357338300264411";
    // 设备类型
    $dto["device_type"] = "1";
    // 交易设备IP
    $dto["device_ip"] = "10.10.0.1";
    // 交易设备MAC
    $dto["device_mac"] = "";
    // 交易设备IMEI
    $dto["device_imei"] = "";
    // 交易设备IMSI
    $dto["device_imsi"] = "";
    // 交易设备ICCID
    $dto["device_icc_id"] = "";
    // 交易设备WIFIMAC
    $dto["device_wifi_mac"] = "";
    // 交易设备GPS
    $dto["device_gps"] = "192.168.0.0";
    // 商户终端应用程序版本
    // $dto["app_version"] = "";
    // SIM卡卡号
    // $dto["icc_id"] = "";
    // 商户终端实时经纬度信息
    // $dto["location"] = "";
    // 商户交易设备IP
    // $dto["mer_device_ip"] = "";
    // 移动国家代码
    // $dto["mobile_country_cd"] = "";
    // 移动网络号码
    // $dto["mobile_net_num"] = "";
    // 商户终端入网认证编号
    // $dto["network_license"] = "";
    // 商户终端序列号
    // $dto["serial_num"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getC2b2fc1aAfc843de93249614a637160e() {
    $dto = array();
    // 补贴手续费金额
    // $dto["allowance_fee_amt"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


