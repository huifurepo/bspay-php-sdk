<?php

/**
 * 开通下级商户权限配置接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBusiHeadConfigRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantBusiHeadConfigRequest;

// 2.组装请求参数
$request = new V2MerchantBusiHeadConfigRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000108854952");
// 产品编号
// $request->setProductId("test");
// 直属渠道号
// $request->setUpperHuifuId("test");

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
    // 支付宝配置对象
    // $extendInfoMap["ali_conf_list"]= getC3fb10abB1574fccB4ac05ce22132c9f();
    // 微信配置对象
    // $extendInfoMap["wx_conf_list"]= get23d47db26d8b40afB90cDbcd3527f635();
    // 银联二维码配置对象
    // $extendInfoMap["union_conf_list"]= get825e1614A27c4d96912a449c44eef4f8();
    // 银联卡配置对象
    // $extendInfoMap["bank_card_config"]= getC4408ba53a44446e993891e079ce1cdc();
    // 分账配置对象
    // $extendInfoMap["split_config"]= get7a066e96C9d848199ef2848ec5b94c43();
    // 微信直连配置对象
    // $extendInfoMap["wx_zl_conf_list"]= get8a3f57a264ad41c38d03D3fda54e4f83();
    // 支付宝直连配置对象
    // $extendInfoMap["ali_zl_conf"]= get9d4e895319574b218b509a34c136d2d4();
    // 线上配置对象
    // $extendInfoMap["online_fee_conf_list"]= getA654153dD57a405cA7a642cdf031e92b();
    // 余额支付配置对象
    // $extendInfoMap["balance_pay_config"]= getAfe0169118314844B215Af96621b40cd();
    // 补贴支付配置对象
    // $extendInfoMap["combine_pay_config"]= get493065ad05b640b686b5E6df734cac5e();
    // 银行大额转账配置对象
    // $extendInfoMap["bank_big_amt_pay_config"]= get422894b9D89b49d393c03883e37e13af();
    // 全域资金管理配置对象（华通银行）
    // $extendInfoMap["out_order_funds_config"]= get75cf466f95be4ea89307E9a447e71517();
    // 全域资金管理配置(XW银行)
    // $extendInfoMap["out_order_funds_new_net_config"]= getB59a764410d4433b9aff5dd7d56115cf();
    // 结算配置对象
    // $extendInfoMap["settle_config_list"]= get23da3c1fE80c43b3B3154f8d29d0b30d();
    // 取现配置对象
    // $extendInfoMap["cash_config_list"]= get9399ea071e7846b4A2587f735578c3b0();
    // 外扣配置对象
    // $extendInfoMap["out_fee_config"]= get48a1bc76Cedc4ca6B1e5B1cbbc41df0d();
    // 允许开通支付宝预授权
    // $extendInfoMap["alipay_pre_auth_flag"]= "";
    // 允许开通微信预授权
    // $extendInfoMap["wechatpay_pre_auth_flag"]= "";
    // 允许开通商户定时结算
    // $extendInfoMap["mer_timing_settle_flag"]= "";
    // 允许开通商户优先结算
    // $extendInfoMap["mer_prior_settle_flag"]= "";
    // 允许使用上级商户经营信息
    // $extendInfoMap["use_upper_mer_auth_flag"]= "";
    // 允许使用上级商户号发起AT交易
    // $extendInfoMap["use_upper_mer_at_trans_flag"]= "";
    // 大额支付配置
    // $extendInfoMap["large_amt_pay_config_list"]= get5a42c69d46c34709Aa443e06c33b0d17();
    // 全域资金管理配置(苏商)
    // $extendInfoMap["out_order_funds_su_shang_config"]= getEb869c091c134b43Bd8e526b1bb7c227();
    // 托管支付开关
    // $extendInfoMap["half_pay_host_flag"]= "";
    // 全域资金费用配置对象
    // $extendInfoMap["out_order_funds_fee_list"]= get85b90d43Ebea4bfa81674c3dadaf4952();
    // 本地生活生活配置对象
    // $extendInfoMap["lla_withhold_config"]= getC79c35b1B7cb4ed79966Be78d4807ad5();
    // 是否开通账单支付
    // $extendInfoMap["bill_payment_flag"]= "";
    return $extendInfoMap;
}

function getC3fb10abB1574fccB4ac05ce22132c9f() {
    $dto = array();
    // 支付场景
    // $dto["pay_scene"] = "test";
    // 手续费
    // $dto["fee_rate"] = "test";
    // 允许开通该业务
    // $dto["open_flag"] = "test";
    // 最低收取手续费（元）
    // $dto["fee_min_amt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get23d47db26d8b40afB90cDbcd3527f635() {
    $dto = array();
    // 支付场景
    // $dto["pay_scene"] = "test";
    // 手续费
    // $dto["fee_rate"] = "test";
    // 允许开通该场景业务
    // $dto["open_flag"] = "test";
    // 最低收取手续费（元）
    // $dto["fee_min_amt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get825e1614A27c4d96912a449c44eef4f8() {
    $dto = array();
    // 借记卡手续费1000以上(%)
    // $dto["debit_fee_rate_up"] = "test";
    // 银联二维码业务贷记卡手续费1000以上(%)
    // $dto["credit_fee_rate_up"] = "test";
    // 借记卡手续费1000以下(%)
    // $dto["debit_fee_rate_down"] = "test";
    // 银联二维码业务贷记卡手续费1000以下(%)
    // $dto["credit_fee_rate_down"] = "test";
    // 允许开通银联二维码业务
    // $dto["open_flag"] = "test";
    // 银联业务手续费类型
    // $dto["charge_cate_code"] = "";
    // 借记卡封顶1000以上（元）
    // $dto["debit_fee_limit_up"] = "";
    // 借记卡封顶1000以下（元）
    // $dto["debit_fee_limit_down"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getC4408ba53a44446e993891e079ce1cdc() {
    $dto = array();
    // 借记卡手续费（%）
    // $dto["debit_fee_rate"] = "test";
    // 贷记卡手续费（%）
    // $dto["credit_fee_rate"] = "test";
    // 允许开通银行卡业务
    // $dto["open_flag"] = "test";
    // 借记卡封顶值
    // $dto["debit_fee_limit"] = "";
    // 银联手机闪付借记卡手续费1000以上（%）
    // $dto["cloud_debit_fee_rate_up"] = "";
    // 银联手机闪付借记卡封顶1000以上（元）
    // $dto["cloud_debit_fee_limit_up"] = "";
    // 银联手机闪付贷记卡手续费1000以上（%）
    // $dto["cloud_credit_fee_rate_up"] = "";
    // 银联手机闪付借记卡手续费1000以下（%）
    // $dto["cloud_debit_fee_rate_down"] = "";
    // 银联手机闪付借记卡封顶1000以下（元）
    // $dto["cloud_debit_fee_limit_down"] = "";
    // 银联手机闪付贷记卡手续费1000以下（%）
    // $dto["cloud_credit_fee_rate_down"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get7a066e96C9d848199ef2848ec5b94c43() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 允许开通分账业务
    // $dto["open_flag"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get8a3f57a264ad41c38d03D3fda54e4f83() {
    $dto = array();
    // 支付场景
    // $dto["pay_scene"] = "test";
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 允许开通微信直连业务
    // $dto["open_flag"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get9d4e895319574b218b509a34c136d2d4() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 允许开通支付宝直连业务
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getA654153dD57a405cA7a642cdf031e92b() {
    $dto = array();
    // 业务类型
    // $dto["bus_type"] = "test";
    // 借贷记标识
    // $dto["dc_flag"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 银行号
    // $dto["bank_code"] = "test";
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 允许开通线上支付业务
    // $dto["open_flag"] = "test";
    // 手续费最小值（元）
    // $dto["fee_min_amt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAfe0169118314844B215Af96621b40cd() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 允许开通余额支付业务
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get493065ad05b640b686b5E6df734cac5e() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 允许开通补贴支付业务
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get422894b9D89b49d393c03883e37e13af() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 允许开通大额转账业务
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get75cf466f95be4ea89307E9a447e71517() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 开户手续费（元）
    // $dto["open_fee_fix_amt"] = "test";
    // 保底手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 允许开通全域资金业务（华通）
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getB59a764410d4433b9aff5dd7d56115cf() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 保底手续费(元)
    // $dto["fee_min_amt"] = "test";
    // 对公固定手续费(元)
    // $dto["public_fee_fix_amt"] = "test";
    // 对私固定手续费(元)
    // $dto["private_fee_fix_amt"] = "test";
    // 允许开通全域资金业务(XW)
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get23da3c1fE80c43b3B3154f8d29d0b30d() {
    $dto = array();
    // 业务类型
    // $dto["bus_type"] = "test";
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 允许开通结算配置
    // $dto["open_flag"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get9399ea071e7846b4A2587f735578c3b0() {
    $dto = array();
    // 业务类型
    // $dto["bus_type"] = "test";
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 允许开通取现配置
    // $dto["open_flag"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get48a1bc76Cedc4ca6B1e5B1cbbc41df0d() {
    $dto = array();
    // 支持结算手续费外扣
    // $dto["settle_out_fee_flag"] = "test";
    // 支持交易手续费外扣
    // $dto["trans_fee_out_flag"] = "test";
    // 支持取现手续费外扣
    // $dto["cash_out_fee_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get5a42c69d46c34709Aa443e06c33b0d17() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 允许开通大额转账业务
    // $dto["open_flag"] = "test";
    // 大额支付业务模式
    // $dto["business_model"] = "test";
    // 允许用户入账
    // $dto["allow_user_deposit_flag"] = "";
    // 银行卡绑定支付权限
    // $dto["mer_same_card_recharge_flag"] = "";
    // 备付金固定账号模式自动退款
    // $dto["provisions_auto_refund_flag"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getEb869c091c134b43Bd8e526b1bb7c227() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 保底手续费(元)
    // $dto["fee_min_amt"] = "test";
    // 对公固定手续费(元)
    // $dto["public_fee_fix_amt"] = "test";
    // 对私固定手续费(元)
    // $dto["private_fee_fix_amt"] = "test";
    // 允许开通全域资金业务(苏商)
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get85b90d43Ebea4bfa81674c3dadaf4952() {
    $dto = array();
    // 业务类型
    // $dto["bus_type"] = "test";
    // 手续费（百分比/%）
    // $dto["fee_rate"] = "test";
    // 手续费（固定/元）
    // $dto["fee_fix_amt"] = "test";
    // 是否允许开通
    // $dto["open_flag"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getC79c35b1B7cb4ed79966Be78d4807ad5() {
    $dto = array();
    // 本地生活开关
    // $dto["llaWithholdFlag"] = "test";
    // 佣金收取手续费率
    // $dto["fee_rate"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}


