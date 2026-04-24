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
$request->setAppData(getC96db826Fda24b61Bcc530a8adbc4cfb());

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
    // 收款汇付账户号
    // $extendInfoMap["acct_id"]= "";
    // 是否延迟交易
    $extendInfoMap["delay_acct_flag"]= "N";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= get2def2471Fe4649fbBccc18742d346b09();
    // 交易失效时间
    // $extendInfoMap["time_expire"]= "";
    // 业务信息
    // $extendInfoMap["biz_info"]= getEe66efe3E861464f9faf5ce78e173a8a();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://callback.service.com/xx";
    // 支付宝参数集合
    // $extendInfoMap["alipay_data"]= get10f611c1F1454cc0Af01C1692018b071();
    // 设备信息
    // $extendInfoMap["terminal_device_data"]= get0d9f105271054da2A43024c1fa35c4c2();
    // 手续费场景标识
    // $extendInfoMap["fee_sign"]= "";
    return $extendInfoMap;
}

function get6a9ea90cAe334d5a86b0F3dd2bace8f7() {
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

function get2def2471Fe4649fbBccc18742d346b09() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = get6a9ea90cAe334d5a86b0F3dd2bace8f7();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getC96db826Fda24b61Bcc530a8adbc4cfb() {
    $dto = array();
    // 小程序返回码
    $dto["app_schema"] = "app跳转链接";
    // 支付宝小程序ID
    // $dto["appid"] = "";
    // 私有信息
    // $dto["private_info"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get2371199bEbb54f83893757f38e7cf99b() {
    $dto = array();
    // 是否提供校验身份信息
    // $dto["need_check_info"] = "";
    // 允许的最小买家年龄
    // $dto["min_age"] = "";
    // 是否强制校验付款人身份信息
    // $dto["fix_buyer"] = "";

    return $dto;
}

function get21dd44c191f34e7bB89a7fa757de87ab() {
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

function getEe66efe3E861464f9faf5ce78e173a8a() {
    $dto = array();
    // 付款人验证（支付宝）
    // $dto["payer_check_ali"] = get2371199bEbb54f83893757f38e7cf99b();
    // 个人付款人信息
    // $dto["person_payer"] = get21dd44c191f34e7bB89a7fa757de87ab();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCbe23c2bCa1948f6A9e20371deb7b43d() {
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

function get27f17710252b4be2B3f7Af2b74cfc6bf() {
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

function get10f611c1F1454cc0Af01C1692018b071() {
    $dto = array();
    // 支付宝的店铺编号
    // $dto["alipay_store_id"] = "";
    // 业务扩展参数
    // $dto["extend_params"] = getCbe23c2bCa1948f6A9e20371deb7b43d();
    // 订单包含的商品列表信息
    // $dto["goods_detail"] = get27f17710252b4be2B3f7Af2b74cfc6bf();
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

function get0d9f105271054da2A43024c1fa35c4c2() {
    $dto = array();
    // 汇付机具号
    // $dto["devs_id"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


