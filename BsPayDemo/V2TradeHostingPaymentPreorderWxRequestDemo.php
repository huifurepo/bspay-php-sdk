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
$request->setMiniappData(getFb8d217747794a7a8b44B97d1707840b());

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
    // 是否拆单支付
    // $extendInfoMap["split_pay_flag"]= "";
    // 拆单支付参数集合
    // $extendInfoMap["split_pay_data"]= get33b93d702a424823A9c104c962b0a4d3();
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= get41a5e8fcA0a0401aA6f2279cf764b391();
    // 统一收银台扩展参数集合
    // $extendInfoMap["hosting_data"]= get74d0313eFbd74bf49eef5f0e71adaf93();
    // 交易失效时间
    // $extendInfoMap["time_expire"]= "";
    // 业务信息
    // $extendInfoMap["biz_info"]= getB15a1cee66424b8dA524Fb3dcc211aa9();
    // 交易异步通知地址
    $extendInfoMap["notify_url"]= "https://callback.service.com/xx";
    // 微信参数集合
    // $extendInfoMap["wx_data"]= get3b4a86c0Fb9546d298f37ea8e161c2a0();
    // 设备信息
    // $extendInfoMap["terminal_device_data"]= getEc9037987819440fB638B05a05de8932();
    // 手续费场景标识
    // $extendInfoMap["fee_sign"]= "";
    // 是否交易手续费分摊
    // $extendInfoMap["fee_split_flag"]= "";
    return $extendInfoMap;
}

function get33b93d702a424823A9c104c962b0a4d3() {
    $dto = array();
    // 商户贴息标记
    // $dto["fq_mer_discount_flag"] = "";
    // 商户业务信息
    // $dto["ali_business_params"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get94fb584696764557940b87b68de6e256() {
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

function get41a5e8fcA0a0401aA6f2279cf764b391() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = get94fb584696764557940b87b68de6e256();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get74d0313eFbd74bf49eef5f0e71adaf93() {
    $dto = array();
    // 项目号
    // $dto["project_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getFb8d217747794a7a8b44B97d1707840b() {
    $dto = array();
    // 是否生成scheme_code
    $dto["need_scheme"] = "Y";
    // 应用ID
    $dto["seq_id"] = "APP_2022100912694428";
    // 私有信息
    $dto["private_info"] = "oppsHosting://";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get9e5c93bb1c864987907cB96cc9c1bdbc() {
    $dto = array();
    // 指定支付者
    // $dto["limit_payer"] = "";
    // 微信实名验证
    // $dto["real_name_flag"] = "";

    return $dto;
}

function get1584a9c420a6463dA01010944ee35fd9() {
    $dto = array();
    // 姓名
    // $dto["name"] = "";
    // 证件类型
    // $dto["cert_type"] = "";
    // 证件号
    // $dto["cert_no"] = "";

    return $dto;
}

function getB15a1cee66424b8dA524Fb3dcc211aa9() {
    $dto = array();
    // 付款人验证（微信）
    // $dto["payer_check_wx"] = get9e5c93bb1c864987907cB96cc9c1bdbc();
    // 个人付款人信息
    // $dto["person_payer"] = get1584a9c420a6463dA01010944ee35fd9();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getC17acafc5b524dfbB569D428985d86ea() {
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

function getD8eff6a7D39741bb81a38ef29fdb841f() {
    $dto = array();
    // 单品列表
    // $dto["goods_detail"] = getC17acafc5b524dfbB569D428985d86ea();
    // 订单原价(元)
    // $dto["cost_price"] = "";
    // 商品小票ID
    // $dto["receipt_id"] = "";

    return $dto;
}

function getFf2bd73bFe6b4e9eAe5553471ba84021() {
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

function get620d86e01a934650A7e99dccba659467() {
    $dto = array();
    // 门店信息
    // $dto["store_info"] = getFf2bd73bFe6b4e9eAe5553471ba84021();

    return $dto;
}

function get3b4a86c0Fb9546d298f37ea8e161c2a0() {
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
    // $dto["detail"] = getD8eff6a7D39741bb81a38ef29fdb841f();
    // 设备号
    // $dto["device_info"] = "";
    // 订单优惠标记
    // $dto["goods_tag"] = "";
    // 实名支付
    // $dto["identity"] = "";
    // 开发票入口开放标识
    // $dto["receipt"] = "";
    // 场景信息
    // $dto["scene_info"] = get620d86e01a934650A7e99dccba659467();
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

function getEc9037987819440fB638B05a05de8932() {
    $dto = array();
    // 汇付机具号
    // $dto["devs_id"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


