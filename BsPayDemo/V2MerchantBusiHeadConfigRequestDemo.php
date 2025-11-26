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
    // $extendInfoMap["ali_conf_list"]= get668d7c2dBab344f98d8c33c60b6e86ad();
    // 微信配置对象
    // $extendInfoMap["wx_conf_list"]= get9a4d0d24741e4b78B891501ef524b9a8();
    // 银联二维码配置对象
    // $extendInfoMap["union_conf_list"]= getA450f441Eda3470e89dbE3a900acf70f();
    // 银联卡配置对象
    // $extendInfoMap["bank_card_config"]= getA1c90b6e4ec24902Bff7Efda73828934();
    // 分账配置对象
    // $extendInfoMap["split_config"]= get1fac0b0f65034295B2ecD19723fb9a4d();
    // 微信直连配置对象
    // $extendInfoMap["wx_zl_conf_list"]= get486010c444c1454eB24cF6f79052635b();
    // 支付宝直连配置对象
    // $extendInfoMap["ali_zl_conf"]= get22a83a2d02524716Ad0484f35714570b();
    // 线上配置对象
    // $extendInfoMap["online_fee_conf_list"]= get8e066fb56e434253Bee06434bf4189b7();
    // 余额支付配置对象
    // $extendInfoMap["balance_pay_config"]= get175559260b00427591f8Ddffa93c30d1();
    // 补贴支付配置对象
    // $extendInfoMap["combine_pay_config"]= get27866e83213b4344A1bd4fef613fae92();
    // 银行大额转账配置对象
    // $extendInfoMap["bank_big_amt_pay_config"]= getC84085ca651043308578Bbacf5483f12();
    // 全域资金管理配置对象（华通银行）
    // $extendInfoMap["out_order_funds_config"]= get8157769435dd4cb893caFbf9727a50d3();
    // 全域资金管理配置(XW银行)
    // $extendInfoMap["out_order_funds_new_net_config"]= getC07f3d37B92442c1A07f8d0903eac9ee();
    // 结算配置对象
    // $extendInfoMap["settle_config_list"]= get63e1a90396504a4592a5A896b9bd213f();
    // 取现配置对象
    // $extendInfoMap["cash_config_list"]= getE895a36e52eb4477Ba8d8c3bd48b354a();
    // 外扣配置对象
    // $extendInfoMap["out_fee_config"]= get4d041faa65424b149f248b3fcdba2bfe();
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
    // $extendInfoMap["large_amt_pay_config_list"]= get4a7da631Cce5438b97f366d1ae8daf7c();
    // 全域资金管理配置(苏商)
    // $extendInfoMap["out_order_funds_su_shang_config"]= get1d2e212eE7644dcb895e8b3f957c8145();
    // 托管支付开关
    // $extendInfoMap["half_pay_host_flag"]= "";
    // 全域资金费用配置对象
    // $extendInfoMap["out_order_funds_fee_list"]= get0f3a6b82D33c433190c02a34d1f66776();
    // 本地生活生活配置对象
    // $extendInfoMap["lla_withhold_config"]= getE29d5bd315e94756A4edA0b033711bf2();
    return $extendInfoMap;
}

function get668d7c2dBab344f98d8c33c60b6e86ad() {
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

function get9a4d0d24741e4b78B891501ef524b9a8() {
    $dto = array();
    // 支付场景
    // $dto["pay_scene"] = "test";
    // 手续费
    // $dto["fee_rate"] = "test";
    // 允许开通该场景业务
    // $dto["open_flag"] = "test";
    // 最低收取手续费（元）
    // $dto["fee_min_amt"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getA450f441Eda3470e89dbE3a900acf70f() {
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

function getA1c90b6e4ec24902Bff7Efda73828934() {
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

function get1fac0b0f65034295B2ecD19723fb9a4d() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 允许开通分账业务
    // $dto["open_flag"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get486010c444c1454eB24cF6f79052635b() {
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

function get22a83a2d02524716Ad0484f35714570b() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 允许开通支付宝直连业务
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get8e066fb56e434253Bee06434bf4189b7() {
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

function get175559260b00427591f8Ddffa93c30d1() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 允许开通余额支付业务
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get27866e83213b4344A1bd4fef613fae92() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 允许开通补贴支付业务
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getC84085ca651043308578Bbacf5483f12() {
    $dto = array();
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 固定手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 允许开通大额转账业务
    // $dto["open_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get8157769435dd4cb893caFbf9727a50d3() {
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

function getC07f3d37B92442c1A07f8d0903eac9ee() {
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

function get63e1a90396504a4592a5A896b9bd213f() {
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

function getE895a36e52eb4477Ba8d8c3bd48b354a() {
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

function get4d041faa65424b149f248b3fcdba2bfe() {
    $dto = array();
    // 支持结算手续费外扣
    // $dto["settle_out_fee_flag"] = "test";
    // 支持交易手续费外扣
    // $dto["trans_fee_out_flag"] = "test";
    // 支持取现手续费外扣
    // $dto["cash_out_fee_flag"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get4a7da631Cce5438b97f366d1ae8daf7c() {
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

function get1d2e212eE7644dcb895e8b3f957c8145() {
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

function get0f3a6b82D33c433190c02a34d1f66776() {
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

function getE29d5bd315e94756A4edA0b033711bf2() {
    $dto = array();
    // 本地生活开关
    // $dto["llaWithholdFlag"] = "test";
    // 佣金收取手续费率
    // $dto["fee_rate"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}


