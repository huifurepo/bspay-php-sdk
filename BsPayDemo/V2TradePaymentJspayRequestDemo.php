<?php

/**
 * 聚合正扫接口 - 示例
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
$request->setHuifuId("6666000108854952");
// 交易类型
$request->setTradeType("A_NATIVE");
// 交易金额
$request->setTransAmt("0.10");
// 商品描述
$request->setGoodsDesc("hibs自动化-通用版验证");

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
    // 交易有效期
    $extendInfoMap["time_expire"]= "20230418235959";
    // 禁用信用卡标记
    $extendInfoMap["limit_pay_type"]= "NO_CREDIT";
    // 是否延迟交易
    $extendInfoMap["delay_acct_flag"]= "N";
    // 渠道号
    $extendInfoMap["channel_no"]= "";
    // 手续费扣款标志
    // $extendInfoMap["fee_flag"]= "";
    // 营销补贴信息
    // $extendInfoMap["combinedpay_data"]= getCombinedpayData();
    // 场景类型
    $extendInfoMap["pay_scene"]= "02";
    // 安全信息
    $extendInfoMap["risk_check_data"]= getRiskCheckData();
    // 设备信息
    $extendInfoMap["terminal_device_data"]= getTerminalDeviceData();
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= getAcctSplitBunch();
    // 传入分帐遇到优惠的处理规则
    $extendInfoMap["term_div_coupon_type"]= "0";
    // 聚合正扫微信拓展参数集合
    // $extendInfoMap["wx_data"]= getWxData();
    // 支付宝扩展参数集合
    $extendInfoMap["alipay_data"]= getAlipayData();
    // 银联参数集合
    // $extendInfoMap["unionpay_data"]= getUnionpayData();
    // 数字人民币参数集合
    // $extendInfoMap["dc_data"]= getDcData();
    // 商户贴息标记
    $extendInfoMap["fq_mer_discount_flag"]= "N";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    // 备注
    $extendInfoMap["remark"]= "string";
    return $extendInfoMap;
}

function getPayeeInfo() {
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

function getGoodsDetail() {
    $dto = array();
    // 商品的编号
    $dto["goods_id"] = "12312321";
    // 商品名称(元)
    $dto["goods_name"] = "阿里";
    // 商品单价
    $dto["price"] = "0.01";
    // 商品数量
    $dto["quantity"] = "20";
    // 商品描述信息
    $dto["body"] = "";
    // 商品类目树
    $dto["categories_tree"] = "string";
    // 商品类目
    $dto["goods_category"] = "";
    // 商品的展示地址
    $dto["show_url"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getStoreInfo() {
    $dto = array();
    // 门店id
    // $dto["id"] = "";
    // 门店名称
    // $dto["name"] = "";
    // 门店行政区划码
    // $dto["area_code"] = "";
    // 门店详细地址
    // $dto["address"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getCombinedpayData() {
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

function getAcctInfosRucan() {
    $dto = array();
    // 分账金额
    // $dto["div_amt"] = "test";
    // 被分账方ID
    // $dto["huifu_id"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getTerminalDeviceData() {
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
    // SIM 卡卡号
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

function getAcctSplitBunch() {
    $dto = array();
    // 分账明细
    // $dto["acct_infos"] = getAcctInfosRucan();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskCheckData() {
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

function getUnionpayData() {
    $dto = array();
    // 收款方附加数据
    // $dto["acq_addn_data"] = "";
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
    // $dto["payee_info"] = getPayeeInfo();
    // 银联分配的服务商机构标识码
    // $dto["pnr_ins_id_cd"] = "";
    // 请求方自定义域
    // $dto["req_reserved"] = "";
    // 终端信息
    // $dto["term_info"] = "";
    // 云闪付用户标识
    // $dto["user_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getDcData() {
    $dto = array();
    // 数字货币银行编号
    // $dto["digital_bank_no"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getSceneInfo() {
    $dto = array();
    // 门店信息
    // $dto["store_info"] = getStoreInfo();

    return $dto;
}

function getWxData() {
    $dto = array();
    // 子商户公众账号id
    // $dto["sub_appid"] = "";
    // 用户标识
    // $dto["openid"] = "";
    // 子商户用户标识
    // $dto["sub_openid"] = "";
    // 附加数据
    // $dto["attach"] = "";
    // 商品描述
    // $dto["body"] = "";
    // 商品详情
    // $dto["detail"] = getDetail();
    // 设备号
    // $dto["device_info"] = "";
    // 订单优惠标记
    // $dto["goods_tag"] = "";
    // 实名支付
    // $dto["identity"] = "";
    // 开发票入口开放标识
    // $dto["receipt"] = "";
    // 场景信息
    // $dto["scene_info"] = getSceneInfo();
    // 终端ip
    // $dto["spbill_create_ip"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getExtendParams() {
    $dto = array();
    // 卡类型
    $dto["card_type"] = "";
    // 支付宝点餐场景类型
    $dto["food_order_type"] = "qr_order";
    // 花呗分期数
    $dto["hb_fq_num"] = "";
    // 花呗卖家承担的手续费百分比
    $dto["hb_fq_seller_percent"] = "";
    // 行业数据回流信息
    $dto["industry_reflux_info"] = "string";
    // 停车场id
    $dto["parking_id"] = "123wsx";
    // 系统商编号
    $dto["sys_service_provider_id"] = "1111111";

    return $dto;
}

function getAlipayData() {
    $dto = array();
    // 买家的支付宝唯一用户号
    $dto["buyer_id"] = "2088502835860454";
    // 支付宝的店铺编号
    $dto["alipay_store_id"] = "";
    // 买家支付宝账号
    $dto["buyer_logon_id"] = "string";
    // 业务扩展参数
    $dto["extend_params"] = getExtendParams();
    // 订单包含的商品列表信息
    $dto["goods_detail"] = getGoodsDetail();
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

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getDetail() {
    $dto = array();
    // 单品列表
    // $dto["goods_detail"] = getGoodsDetailWxRucan();
    // 订单原价(元)
    // $dto["cost_price"] = "";
    // 商品小票ID
    // $dto["receipt_id"] = "";

    return $dto;
}

function getGoodsDetailWxRucan() {
    $dto = array();
    // 商品编码
    // $dto["goods_id"] = "";
    // 商品名称
    // $dto["goods_name"] = "";
    // 商品单价(元)
    // $dto["price"] = "";
    // 商品数量
    // $dto["quantity"] = "";
    // 微信侧商品编码
    // $dto["wxpay_goods_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}


