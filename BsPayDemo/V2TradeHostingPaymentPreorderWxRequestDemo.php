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
$request->setMiniappData(get737ab298Ac7441a4B40d94f941a33d23());

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
    $extendInfoMap["delay_acct_flag"]= "Y";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= get71bc87bc65514310Bab5D0d4ff6d9ea8();
    // 交易失效时间
    // $extendInfoMap["time_expire"]= "";
    // 业务信息
    // $extendInfoMap["biz_info"]= get08fd888f92c14b3e8aff0de211321c21();
    // 交易异步通知地址
    $extendInfoMap["notify_url"]= "https://callback.service.com/xx";
    // 回调地址
    // $extendInfoMap["callback_url"]= "";
    // 微信参数集合
    // $extendInfoMap["wx_data"]= getA43f30ebEacf493487a428b621ab6ec2();
    // 设备信息
    // $extendInfoMap["terminal_device_data"]= get805346c769af45b6BdbbA3bf12da0139();
    return $extendInfoMap;
}

function getBc44ff54B1ba4e1cB851Efe026a43136() {
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

function get71bc87bc65514310Bab5D0d4ff6d9ea8() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getBc44ff54B1ba4e1cB851Efe026a43136();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get737ab298Ac7441a4B40d94f941a33d23() {
    $dto = array();
    // 是否生成scheme_code
    $dto["need_scheme"] = "Y";
    // 应用ID
    $dto["seq_id"] = "APP_2022100912694428";
    // 私有信息
    $dto["private_info"] = "oppsHosting://";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get7a353d7d71344cbb8cc93c3925a3fbfc() {
    $dto = array();
    // 指定支付者
    // $dto["limit_payer"] = "";
    // 微信实名验证
    // $dto["real_name_flag"] = "";

    return $dto;
}

function getE0675c990cbf47798edd228757177ed9() {
    $dto = array();
    // 姓名
    // $dto["name"] = "";
    // 证件类型
    // $dto["cert_type"] = "";
    // 证件号
    // $dto["cert_no"] = "";

    return $dto;
}

function get08fd888f92c14b3e8aff0de211321c21() {
    $dto = array();
    // 付款人验证（微信）
    // $dto["payer_check_wx"] = get7a353d7d71344cbb8cc93c3925a3fbfc();
    // 个人付款人信息
    // $dto["person_payer"] = getE0675c990cbf47798edd228757177ed9();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getDc0d384a8f994a5b8c66B9250d8ea39f() {
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

function get4d20343543214c0b991d47544dbdc644() {
    $dto = array();
    // 单品列表
    // $dto["goods_detail"] = getDc0d384a8f994a5b8c66B9250d8ea39f();
    // 订单原价(元)
    // $dto["cost_price"] = "";
    // 商品小票ID
    // $dto["receipt_id"] = "";

    return $dto;
}

function getBc45c4071ff64ceeAcc9505af590f711() {
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

function get0c82992fF3914502A4ab3787f61d22c4() {
    $dto = array();
    // 门店信息
    // $dto["store_info"] = getBc45c4071ff64ceeAcc9505af590f711();

    return $dto;
}

function getA43f30ebEacf493487a428b621ab6ec2() {
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
    // $dto["detail"] = get4d20343543214c0b991d47544dbdc644();
    // 设备号
    // $dto["device_info"] = "";
    // 订单优惠标记
    // $dto["goods_tag"] = "";
    // 实名支付
    // $dto["identity"] = "";
    // 开发票入口开放标识
    // $dto["receipt"] = "";
    // 场景信息
    // $dto["scene_info"] = get0c82992fF3914502A4ab3787f61d22c4();
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

function get805346c769af45b6BdbbA3bf12da0139() {
    $dto = array();
    // 汇付机具号
    // $dto["devs_id"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


