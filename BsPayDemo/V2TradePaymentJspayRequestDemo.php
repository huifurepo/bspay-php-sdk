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
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentJspayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentJspayRequest;

// 2.组装请求参数
$request = new V2TradePaymentJspayRequest();
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
    $extendInfoMap["wx_data"]= getAcbff81eE9ef41289bd54096647dad75();
    // 支付宝参数集合
    $extendInfoMap["alipay_data"]= getFd7118c6B4bb4a03A25c7f4eea7ae339();
    // 银联参数集合
    $extendInfoMap["unionpay_data"]= get908085048eeb4837B8314cf30fd404c6();
    // 数字人民币参数集合
    // $extendInfoMap["dc_data"]= getF8a74f0d15a54270B28e2391cbc288b8();
    // 是否延迟交易
    $extendInfoMap["delay_acct_flag"]= "N";
    // 手续费扣款标志
    // $extendInfoMap["fee_flag"]= "";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= get1cbad0d0194f466eA4bc7429966abe06();
    // 传入分账遇到优惠的处理规则
    $extendInfoMap["term_div_coupon_type"]= "0";
    // 补贴支付信息
    // $extendInfoMap["combinedpay_data"]= get087359c3D9804dd994438767df790fa7();
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
    $extendInfoMap["risk_check_data"]= get94cfe7c522aa4356B34a5d47b78c5743();
    // 设备信息
    $extendInfoMap["terminal_device_data"]= getC72ffc7c41bc4eceBe0c24250f3f8ec5();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    // 手续费补贴信息
    // $extendInfoMap["trans_fee_allowance_info"]= get32e65e09941b465a9cd3A96dd70ae8ab();
    return $extendInfoMap;
}

function get3305ae9354c6452fBab3D09c152d7062() {
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

function get1fa9af96Eba94177B4da6d367e8d8289() {
    $dto = array();
    // 单品列表
    $dto["goods_detail"] = get3305ae9354c6452fBab3D09c152d7062();
    // 订单原价(元)
    $dto["cost_price"] = "43.00";
    // 商品小票ID
    $dto["receipt_id"] = "20220628132043853798";

    return $dto;
}

function getFe07bc3799ee4294B5093f47f227c664() {
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

function getE355d7b2Fb2c4d67Be51321803d69230() {
    $dto = array();
    // 门店信息
    // $dto["store_info"] = getFe07bc3799ee4294B5093f47f227c664();

    return $dto;
}

function getAcbff81eE9ef41289bd54096647dad75() {
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
    $dto["detail"] = get1fa9af96Eba94177B4da6d367e8d8289();
    // 设备号
    // $dto["device_info"] = "";
    // 订单优惠标记
    // $dto["goods_tag"] = "";
    // 实名支付
    // $dto["identity"] = "";
    // 开发票入口开放标识
    // $dto["receipt"] = "";
    // 场景信息
    $dto["scene_info"] = getE355d7b2Fb2c4d67Be51321803d69230();
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

function get432baf0d47344639950d4e3e21e8dd5f() {
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

function get8ad0bba62962498cA463295be56fdcbf() {
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

function getC0d38bab110b48fdBc70Bb29891acf7d() {
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

function getFd7118c6B4bb4a03A25c7f4eea7ae339() {
    $dto = array();
    // 买家的支付宝唯一用户号
    $dto["buyer_id"] = "2088702699908257";
    // 支付宝的店铺编号
    $dto["alipay_store_id"] = "";
    // 买家支付宝账号
    $dto["buyer_logon_id"] = "string";
    // 业务扩展参数
    $dto["extend_params"] = get432baf0d47344639950d4e3e21e8dd5f();
    // 订单包含的商品列表信息
    $dto["goods_detail"] = get8ad0bba62962498cA463295be56fdcbf();
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
    // $dto["ext_user_info"] = getC0d38bab110b48fdBc70Bb29891acf7d();
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

function getF3d6b3307b4a4c9c86cdBeafd5cf3ba0() {
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

function get908085048eeb4837B8314cf30fd404c6() {
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
    // $dto["payee_info"] = getF3d6b3307b4a4c9c86cdBeafd5cf3ba0();
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

function getF8a74f0d15a54270B28e2391cbc288b8() {
    $dto = array();
    // 数字货币银行编号
    // $dto["digital_bank_no"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get8419921e27934b65A56fCc25dc3d0512() {
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

function get1cbad0d0194f466eA4bc7429966abe06() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = get8419921e27934b65A56fCc25dc3d0512();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get087359c3D9804dd994438767df790fa7() {
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

function get94cfe7c522aa4356B34a5d47b78c5743() {
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

function getC72ffc7c41bc4eceBe0c24250f3f8ec5() {
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

function get32e65e09941b465a9cd3A96dd70ae8ab() {
    $dto = array();
    // 补贴手续费金额
    // $dto["allowance_fee_amt"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


