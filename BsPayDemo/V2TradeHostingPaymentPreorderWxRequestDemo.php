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
$request->setMiniappData(getD9703d52B92d48238f2f8efaffc683a8());

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
    // $extendInfoMap["split_pay_data"]= getA9b4116c348246a09256Cb92ff1468a1();
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= getB56e94c601784737Bd351f6915482693();
    // 统一收银台扩展参数集合
    // $extendInfoMap["hosting_data"]= get1e3a25fa77f145358744D9607c3d5c6d();
    // 交易失效时间
    // $extendInfoMap["time_expire"]= "";
    // 业务信息
    // $extendInfoMap["biz_info"]= get2b8f9b9dDd5e4bbd8ebb3b814144f1c8();
    // 交易异步通知地址
    $extendInfoMap["notify_url"]= "https://callback.service.com/xx";
    // 微信参数集合
    // $extendInfoMap["wx_data"]= getA5c774deD00546ab866d5fe1d69040e5();
    // 设备信息
    // $extendInfoMap["terminal_device_data"]= getA090526f7e75421a9c50E1cf7710783d();
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

function getA9b4116c348246a09256Cb92ff1468a1() {
    $dto = array();
    // 商户贴息标记
    // $dto["fq_mer_discount_flag"] = "";
    // 商户业务信息
    // $dto["ali_business_params"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get148c81120b084d9fBd7f36f2c211ff9b() {
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

function getB56e94c601784737Bd351f6915482693() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = get148c81120b084d9fBd7f36f2c211ff9b();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get1e3a25fa77f145358744D9607c3d5c6d() {
    $dto = array();
    // 项目号
    // $dto["project_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getD9703d52B92d48238f2f8efaffc683a8() {
    $dto = array();
    // 是否生成scheme_code
    $dto["need_scheme"] = "Y";
    // 应用ID
    $dto["seq_id"] = "APP_2022100912694428";
    // 私有信息
    $dto["private_info"] = "oppsHosting://";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get1c48675d4a224883A357C3cbbfa7b30f() {
    $dto = array();
    // 指定支付者
    // $dto["limit_payer"] = "";
    // 微信实名验证
    // $dto["real_name_flag"] = "";

    return $dto;
}

function getFcc910e32d31434eBa686cdfe1c93169() {
    $dto = array();
    // 姓名
    // $dto["name"] = "";
    // 证件类型
    // $dto["cert_type"] = "";
    // 证件号
    // $dto["cert_no"] = "";

    return $dto;
}

function get2b8f9b9dDd5e4bbd8ebb3b814144f1c8() {
    $dto = array();
    // 付款人验证（微信）
    // $dto["payer_check_wx"] = get1c48675d4a224883A357C3cbbfa7b30f();
    // 个人付款人信息
    // $dto["person_payer"] = getFcc910e32d31434eBa686cdfe1c93169();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getFd43fd8f56b04805994c660c8ab819f6() {
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

function get008abb5d9f31431aA8531bc2d077d9cf() {
    $dto = array();
    // 单品列表
    // $dto["goods_detail"] = getFd43fd8f56b04805994c660c8ab819f6();
    // 订单原价(元)
    // $dto["cost_price"] = "";
    // 商品小票ID
    // $dto["receipt_id"] = "";

    return $dto;
}

function get984fc4b21ed145b396b00461b6b1f98d() {
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

function get749cbf43F8bd452688d19b44ecf68848() {
    $dto = array();
    // 门店信息
    // $dto["store_info"] = get984fc4b21ed145b396b00461b6b1f98d();

    return $dto;
}

function getA5c774deD00546ab866d5fe1d69040e5() {
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
    // $dto["detail"] = get008abb5d9f31431aA8531bc2d077d9cf();
    // 设备号
    // $dto["device_info"] = "";
    // 订单优惠标记
    // $dto["goods_tag"] = "";
    // 实名支付
    // $dto["identity"] = "";
    // 开发票入口开放标识
    // $dto["receipt"] = "";
    // 场景信息
    // $dto["scene_info"] = get749cbf43F8bd452688d19b44ecf68848();
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

function getA090526f7e75421a9c50E1cf7710783d() {
    $dto = array();
    // 汇付机具号
    // $dto["devs_id"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


