<?php

/**
 * 支付宝小程序预下单接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeHostingPaymentPreorderAliRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeHostingPaymentPreorderAliRequest;

// 2.组装请求参数
$request = new V2TradeHostingPaymentPreorderAliRequest();
// 商户号
$request->setHuifuId("6666000109133323");
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 预下单类型
$request->setPreOrderType("2");
// 交易金额
$request->setTransAmt("0.10");
// 商品描述
$request->setGoodsDesc("app跳支付宝消费");
// app扩展参数集合
$request->setAppData(getCe31627aDd824705B09780ee88a9e084());

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
    // $extendInfoMap["acct_id"]= "";
    // 收银台样式
    // $extendInfoMap["style_id"]= "";
    // 是否延迟交易
    $extendInfoMap["delay_acct_flag"]= "N";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= get1b7b64a1C7a144c0B84fBd0ae123cf63();
    // 交易失效时间
    // $extendInfoMap["time_expire"]= "";
    // 业务信息
    // $extendInfoMap["biz_info"]= getDdc03950817248c39344101228c4eab6();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://callback.service.com/xx";
    // 支付宝参数集合
    // $extendInfoMap["alipay_data"]= get9ddeca20F4e241a582f2C0cf7d4ae1a8();
    // 设备信息
    // $extendInfoMap["terminal_device_data"]= getBd0104ba79d84afa8f285b1a9b74c35c();
    return $extendInfoMap;
}

function get629db8b0664d43a085dd1d75ac87a8db() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "0.08";
    // 分账接收方ID
    $dto["huifu_id"] = "6666000109133323";
    // 收款汇付账户号
    // $dto["acct_id"] = "";
    // 分账百分比%
    // $dto["percentage_div"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get1b7b64a1C7a144c0B84fBd0ae123cf63() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = get629db8b0664d43a085dd1d75ac87a8db();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCe31627aDd824705B09780ee88a9e084() {
    $dto = array();
    // 小程序返回码
    $dto["app_schema"] = "app跳转链接";
    // 支付宝小程序ID
    // $dto["appid"] = "";
    // 私有信息
    // $dto["private_info"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCd069287Fd3d430b8676C8038b425e3b() {
    $dto = array();
    // 是否提供校验身份信息
    // $dto["need_check_info"] = "";
    // 允许的最小买家年龄
    // $dto["min_age"] = "";
    // 是否强制校验付款人身份信息
    // $dto["fix_buyer"] = "";

    return $dto;
}

function getD78ad79b34cb4faaA3ac1bc1dd15f29b() {
    $dto = array();
    // 姓名
    // $dto["name"] = "";
    // 证件类型
    // $dto["cert_type"] = "";
    // 证件号
    // $dto["cert_no"] = "";
    // 手机号
    // $dto["mobile"] = "";

    return $dto;
}

function getDdc03950817248c39344101228c4eab6() {
    $dto = array();
    // 付款人验证（支付宝）
    // $dto["payer_check_ali"] = getCd069287Fd3d430b8676C8038b425e3b();
    // 个人付款人信息
    // $dto["person_payer"] = getD78ad79b34cb4faaA3ac1bc1dd15f29b();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get50fa64077b9245e3Ad44A082ee269f28() {
    $dto = array();
    // 卡类型
    // $dto["card_type"] = "";
    // 支付宝点餐场景类型
    // $dto["food_order_type"] = "";
    // 花呗分期数
    // $dto["hb_fq_num"] = "";
    // 花呗卖家手续费百分比
    // $dto["hb_fq_seller_percent"] = "";
    // 行业数据回流信息
    // $dto["industry_reflux_info"] = "";
    // 信用卡分期资产方式
    // $dto["fq_channels"] = "";
    // 停车场id
    // $dto["parking_id"] = "";
    // 系统商编号
    // $dto["sys_service_provider_id"] = "";

    return $dto;
}

function get29d5146dEea34acd923a74cc48ebb0ca() {
    $dto = array();
    // 商品的编号
    // $dto["goods_id"] = "test";
    // 商品名称
    // $dto["goods_name"] = "test";
    // 商品单价(元)
    // $dto["price"] = "test";
    // 商品数量
    // $dto["quantity"] = "test";
    // 商品描述信息
    // $dto["body"] = "";
    // 商品类目树
    // $dto["categories_tree"] = "";
    // 商品类目
    // $dto["goods_category"] = "";
    // 商品的展示地址
    // $dto["show_url"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get9ddeca20F4e241a582f2C0cf7d4ae1a8() {
    $dto = array();
    // 支付宝的店铺编号
    // $dto["alipay_store_id"] = "";
    // 业务扩展参数
    // $dto["extend_params"] = get50fa64077b9245e3Ad44A082ee269f28();
    // 订单包含的商品列表信息
    // $dto["goods_detail"] = get29d5146dEea34acd923a74cc48ebb0ca();
    // 商户原始订单号
    // $dto["merchant_order_no"] = "";
    // 商户操作员编号
    // $dto["operator_id"] = "";
    // 产品码
    // $dto["product_code"] = "";
    // 卖家支付宝用户号
    // $dto["seller_id"] = "";
    // 商户门店编号
    // $dto["store_id"] = "";
    // 订单标题
    // $dto["subject"] = "";
    // 商家门店名称
    // $dto["store_name"] = "";
    // 商户业务信息
    // $dto["ali_business_params"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBd0104ba79d84afa8f285b1a9b74c35c() {
    $dto = array();
    // 汇付机具号
    // $dto["devs_id"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


