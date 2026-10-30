<?php

/**
 * 微信小程序预下单接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeHostingPaymentPreorderWxRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeHostingPaymentPreorderWxRequest;

// 2.组装请求参数
$request = new V2TradeHostingPaymentPreorderWxRequest();
// 预下单类型
$request->setPreOrderType("3");
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 交易金额
$request->setTransAmt("0.13");
// 商品描述
$request->setGoodsDesc("app跳微信消费");
// 微信小程序扩展参数集合
$request->setMiniappData(get3af138f408f64a088f39A98432ac9e49());

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
    $extendInfoMap["delay_acct_flag"]= "Y";
    // 是否合单支付
    // $extendInfoMap["merge_pay_flag"]= "";
    // 子单信息列表
    // $extendInfoMap["sub_orders_request"]= get9143825f4e4c4d89A43a9b7761ced267();
    // 是否拆单支付
    // $extendInfoMap["split_pay_flag"]= "";
    // 拆单支付参数集合
    // $extendInfoMap["split_pay_data"]= get3aed07d204df4d00Bad4A1b45ed2ae5c();
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= get1a27caaf4d0f4d43Bcca1b32c877da44();
    // 统一收银台扩展参数集合
    // $extendInfoMap["hosting_data"]= get072275545b724f46809255f85a93bc26();
    // 交易失效时间
    // $extendInfoMap["time_expire"]= "";
    // 业务信息
    // $extendInfoMap["biz_info"]= getB9a20bfd2a8c4dc3Af5278ecf486ea99();
    // 交易异步通知地址
    $extendInfoMap["notify_url"]= "https://callback.service.com/xx";
    // 微信参数集合
    // $extendInfoMap["wx_data"]= getD4b9debf592144be846eB7eb65b13804();
    // 设备信息
    // $extendInfoMap["terminal_device_data"]= get69889c1cC4cf4c948329Ab0313a35373();
    // 手续费场景标识
    // $extendInfoMap["fee_sign"]= "";
    // 是否交易手续费分摊
    // $extendInfoMap["fee_split_flag"]= "";
    // 手续费扣款标志
    // $extendInfoMap["fee_flag"]= "";
    // 渠道号
    // $extendInfoMap["channel_no"]= "";
    // 场景类型
    // $extendInfoMap["pay_scene"]= "";
    return $extendInfoMap;
}

function get9143825f4e4c4d89A43a9b7761ced267() {
    $dto = array();
    // 子单请求流水号
    // $dto["sub_req_seq_id"] = "test";
    // 子单商户号
    // $dto["sub_huifu_id"] = "test";
    // 子单交易金额
    // $dto["sub_trans_amt"] = "test";
    // 子单账户号
    // $dto["sub_acct_id"] = "";
    // 是否延迟交易
    // $dto["delay_acct_flag"] = "";
    // 子单备注
    // $dto["sub_remark"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get3aed07d204df4d00Bad4A1b45ed2ae5c() {
    $dto = array();
    // 商户贴息标记
    // $dto["fq_mer_discount_flag"] = "";
    // 商户业务信息
    // $dto["ali_business_params"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get9b9a6c95A13f4c6b9fd69a2f41f9d2c3() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "0.01";
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

function get1a27caaf4d0f4d43Bcca1b32c877da44() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = get9b9a6c95A13f4c6b9fd69a2f41f9d2c3();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get072275545b724f46809255f85a93bc26() {
    $dto = array();
    // 项目号
    // $dto["project_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get3af138f408f64a088f39A98432ac9e49() {
    $dto = array();
    // 是否生成scheme_code
    $dto["need_scheme"] = "Y";
    // 应用ID
    $dto["seq_id"] = "APP_2022100912694428";
    // 私有信息
    $dto["private_info"] = "oppsHosting://";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get663201c25e1b4c678b0c241434e58ad0() {
    $dto = array();
    // 指定支付者
    // $dto["limit_payer"] = "";
    // 微信实名验证
    // $dto["real_name_flag"] = "";

    return $dto;
}

function get7b416ac5A2624f95Bb779a1ae47c3c22() {
    $dto = array();
    // 姓名
    // $dto["name"] = "";
    // 证件类型
    // $dto["cert_type"] = "";
    // 证件号
    // $dto["cert_no"] = "";

    return $dto;
}

function getB9a20bfd2a8c4dc3Af5278ecf486ea99() {
    $dto = array();
    // 付款人验证（微信）
    // $dto["payer_check_wx"] = get663201c25e1b4c678b0c241434e58ad0();
    // 个人付款人信息
    // $dto["person_payer"] = get7b416ac5A2624f95Bb779a1ae47c3c22();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get38f2595f939e450dA5693c68155dc8a6() {
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

function getE5b7f3ebE834421fBa1a4347d5559700() {
    $dto = array();
    // 单品列表
    // $dto["goods_detail"] = get38f2595f939e450dA5693c68155dc8a6();
    // 订单原价(元)
    // $dto["cost_price"] = "";
    // 商品小票ID
    // $dto["receipt_id"] = "";

    return $dto;
}

function getD16c2f5aB29142e3B8a04ead1c6e5af8() {
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

function getC04e503eE2fe4166Aa9b0a5dd323b83f() {
    $dto = array();
    // 门店信息
    // $dto["store_info"] = getD16c2f5aB29142e3B8a04ead1c6e5af8();

    return $dto;
}

function getD4b9debf592144be846eB7eb65b13804() {
    $dto = array();
    // 子商户应用ID
    // $dto["sub_appid"] = "";
    // 子商户用户标识
    // $dto["sub_openid"] = "";
    // 附加数据
    // $dto["attach"] = "";
    // 商品描述
    // $dto["body"] = "";
    // 商品详情
    // $dto["detail"] = getE5b7f3ebE834421fBa1a4347d5559700();
    // 设备号
    // $dto["device_info"] = "";
    // 订单优惠标记
    // $dto["goods_tag"] = "";
    // 实名支付
    // $dto["identity"] = "";
    // 开发票入口开放标识
    // $dto["receipt"] = "";
    // 场景信息
    // $dto["scene_info"] = getC04e503eE2fe4166Aa9b0a5dd323b83f();
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

function get69889c1cC4cf4c948329Ab0313a35373() {
    $dto = array();
    // 汇付机具号
    // $dto["devs_id"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


