<?php

/**
 * 商户业务开通修改 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBusiModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantBusiModifyRequest;

// 2.组装请求参数
$request = new V2MerchantBusiModifyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000103668046");

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
    // 经营简称
    $extendInfoMap["short_name"]= "";
    // 税务登记证
    $extendInfoMap["tax_reg_pic"]= "";
    // 公司照片一
    $extendInfoMap["comp_pic1"]= "";
    // 公司照片二
    $extendInfoMap["comp_pic2"]= "";
    // 公司照片三
    $extendInfoMap["comp_pic3"]= "";
    // 法人身份证反面
    $extendInfoMap["legal_cert_back_pic"]= "";
    // 法人身份证正面
    $extendInfoMap["legal_cert_front_pic"]= "";
    // 营业执照图片
    $extendInfoMap["license_pic"]= "";
    // 组织机构代码证
    $extendInfoMap["org_code_pic"]= "";
    // 商务协议
    $extendInfoMap["ba_pic"]= "";
    // 开户许可证
    $extendInfoMap["reg_acct_pic"]= "";
    // 结算卡反面
    $extendInfoMap["settle_card_back_pic"]= "";
    // 结算卡正面
    $extendInfoMap["settle_card_front_pic"]= "";
    // 结算人身份证反面
    $extendInfoMap["settle_cert_back_pic"]= "";
    // 结算人身份证正面
    $extendInfoMap["settle_cert_front_pic"]= "";
    // 授权委托书
    $extendInfoMap["auth_enturst_pic"]= "[http://192.168.85.157:30031/sspm/testVirgo](http://192.168.85.157:30031/sspm/testVirgo)";
    // 协议信息实体
    $extendInfoMap["agreement_info"]= getAgreementInfo();
    // 是否交易手续费外扣
    $extendInfoMap["out_fee_flag"]= "2";
    // 交易手续费外扣汇付ID
    $extendInfoMap["out_fee_huifuid"]= "";
    // 交易手续费外扣时的账户类型
    $extendInfoMap["out_fee_acct_type"]= "";
    // 是否开通网银
    $extendInfoMap["online_flag"]= "";
    // 是否开通快捷
    $extendInfoMap["quick_flag"]= "";
    // 是否开通代扣
    $extendInfoMap["withhold_flag"]= "";
    // 延迟入账开关
    $extendInfoMap["delay_flag"]= "Y";
    // 开通支付宝预授权
    $extendInfoMap["alipay_pre_auth_flag"]= "Y";
    // 开通微信预授权
    // $extendInfoMap["wechatpay_pre_auth_flag"]= "";
    // 商户业务类型
    // $extendInfoMap["mer_bus_type"]= "";
    // 线上费率配置
    // $extendInfoMap["online_fee_conf_list"]= getOnlineFeeConfList();
    // 支付宝配置对象
    $extendInfoMap["ali_conf_list"]= getAliConfList();
    // 微信配置对象
    $extendInfoMap["wx_conf_list"]= getWxConfList();
    // 银联二维码配置对象
    $extendInfoMap["union_conf_list"]= getUnionConfList();
    // 银行卡支付配置信息
    $extendInfoMap["bank_card_conf"]= getBankCardConf();
    // 余额支付配置对象
    $extendInfoMap["balance_pay_config"]= getBalancePayConfig();
    // 营销补贴
    $extendInfoMap["combine_pay_config"]= getCombinePayConfig();
    // 线上手续费承担方配置
    // $extendInfoMap["online_pay_fee_conf_list"]= getOnlinePayFeeConfList();
    // 银行大额转账对象
    // $extendInfoMap["bank_big_amt_pay_config"]= getBankBigAmtPayConfig();
    // 微信直连配置对象
    // $extendInfoMap["wx_zl_conf"]= getWxZlConf();
    // 异步消息接收地址
    $extendInfoMap["async_return_url"]= "[http://www.baidu55.com](http://www.baidu55.com/)";
    // 业务开通结果异步消息接收地址
    $extendInfoMap["busi_async_return_url"]= "";
    // 交易异步应答地址
    $extendInfoMap["recon_resp_addr"]= "[http://192.168.85.157:30031/sspm/testVirgo](http://192.168.85.157:30031/sspm/testVirgo)";
    // 平台收款资金归集配置
    // $extendInfoMap["out_order_funds_config"]= getOutOrderFundsConfig();
    return $extendInfoMap;
}

function getAgreementInfo() {
    $dto = array();
    // 协议类型
    $dto["agreement_type"] = "0";
    // 协议开始日期
    $dto["agree_begin_date"] = "20200325";
    // 协议结束日期
    $dto["agree_end_date"] = "20400325";
    // 协议模板号
    $dto["agreement_model"] = "202106070100000380";
    // 协议模板名称
    $dto["agreement_name"] = "电子协议签约模板";
    // 协议号
    $dto["agreement_no"] = "202106070100000380";
    // 签约日期
    $dto["sign_date"] = "20200325";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getOnlineFeeConfList() {
    $dto = array();
    // 业务类型
    // $dto["fee_type"] = "test";
    // 银行编码
    // $dto["bank_id"] = "test";
    // 借贷标志
    // $dto["dc_flag"] = "test";
    // 费率状态
    // $dto["stat_flag"] = "test";
    // 手续费（固定/元）
    // $dto["fix_amt"] = "";
    // 费率（百分比/%）
    // $dto["fee_rate"] = "";
    // 银行名称
    // $dto["bank_name"] = "";
    // 银行中文简称
    // $dto["bank_short_chn"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAliConfList() {
    $dto = array();
    // 手续费（%）
    $dto["fee_rate"] = "3.15";
    // 支付场景
    $dto["pay_scene"] = "1";
    // 商户经营类目
    $dto["mcc"] = "2016062900190337";
    // 子渠道号
    $dto["pay_channel_id"] = "10000001";
    // 拟申请的间联商户等级
    $dto["indirect_level"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getWxConfList() {
    $dto = array();
    // 手续费（%）
    $dto["fee_rate"] = "2.15";
    // 支付场景
    $dto["pay_scene"] = "10";
    // ~~商户经营类目~~
    // $dto["~~mcc~~"] = "";
    // 费率规则ID
    $dto["fee_rule_id"] = "765";
    // 子渠道号
    $dto["pay_channel_id"] = "JP00001";
    // 申请服务
    $dto["service_codes"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getUnionConfList() {
    $dto = array();
    // 银联二维码1000以上借记卡费率
    $dto["debit_fee_rate_up"] = "6";
    // 银联二维码1000以下借记卡费率
    $dto["debit_fee_rate_down"] = "2.55";
    // 银联二维码1000以下贷记卡费率
    $dto["credit_fee_rate_down"] = "1";
    // 银联二维码1000以上贷记卡费率
    $dto["credit_fee_rate_up"] = "6.566";
    // 银行业务手续费类型
    $dto["charge_cate_code"] = "";
    // 银联二维码1000以上借记卡费率封顶值
    $dto["debit_fee_limit_up"] = "641";
    // 银联二维码1000以下借记卡费率封顶值
    $dto["debit_fee_limit_down"] = "11.3";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBankCardConf() {
    $dto = array();
    // 借记卡手续费（%）
    $dto["debit_fee_rate"] = "3";
    // 贷记卡手续费（%）
    $dto["credit_fee_rate"] = "6";
    // 银行业务手续费类型
    $dto["charge_cate_code"] = "02";
    // 借记卡封顶值
    $dto["debit_fee_limit"] = "5";
    // 云闪付借记卡手续费1000以上（%）
    $dto["cloud_debit_fee_rate_up"] = "7";
    // 云闪付借记卡封顶1000以上(元)
    $dto["cloud_debit_fee_limit_up"] = "8.922";
    // 云闪付贷记卡手续费1000以上（%）
    $dto["cloud_credit_fee_rate_up"] = "4.86";
    // 云闪付借记卡手续费1000以下（%）
    $dto["cloud_debit_fee_rate_down"] = "0";
    // 云闪付借记卡封顶1000以下(元)
    $dto["cloud_debit_fee_limit_down"] = "10";
    // 云闪付贷记卡手续费1000以下（%）
    $dto["cloud_credit_fee_rate_down"] = "2";
    // 是否开通小额双免
    $dto["is_open_small_flag"] = "0";
    // 小额双免单笔限额(元)
    $dto["small_free_amt"] = "500";
    // 小额双免手续费（%）
    $dto["small_fee_amt"] = "1";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBalancePayConfig() {
    $dto = array();
    // 支付手续费(%)
    $dto["fee_rate"] = "2";
    // 支付固定手续费(元)
    $dto["fee_fix_amt"] = "1";
    // 费率开关
    $dto["switch_state"] = "1";
    // 交易手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCombinePayConfig() {
    $dto = array();
    // 开通状态
    $dto["switch_state"] = "0";
    // 支付手续费(%)
    $dto["fee_rate"] = "10";
    // 支付固定手续费(元)
    $dto["fee_fix_amt"] = "5";
    // 交易手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getOnlinePayFeeConfList() {
    $dto = array();
    // 业务类型
    // $dto["pay_type"] = "";
    // 交易手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBankBigAmtPayConfig() {
    $dto = array();
    // 开关状态
    // $dto["switch_state"] = "";
    // 大额调账标识申请类型
    // $dto["biz_type"] = "";
    // 费率（百分比/%）
    // $dto["fee_rate"] = "";
    // 交易手续费（固定/元）
    // $dto["fee_fix_amt"] = "";
    // 手续费外扣标记
    // $dto["out_fee_flag"] = "";
    // 手续费外扣时的汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 外扣手续费费承担账户号
    // $dto["out_fee_acct_id"] = "";
    // 银行大额转账单笔额度
    // $dto["big_amt_limit_per_time"] = "";
    // 银行大额转账单日额度
    // $dto["big_amt_limit_per_day"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getWxZlPayConfList() {
    $dto = array();
    // 申请服务
    // $dto["service_code"] = "test";
    // 功能服务appid
    // $dto["sub_app_id"] = "test";
    // 功能开关
    // $dto["switch_state"] = "test";
    // 功能费率(%)
    // $dto["fee_rate"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getWxZlConf() {
    $dto = array();
    // 微信子商户号
    // $dto["sub_mch_id"] = "test";
    // 配置集合
    // $dto["wx_zl_pay_conf_list"] = getWxZlPayConfList();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getOutOrderFundsConfig() {
    $dto = array();
    // 开通状态
    // $dto["switch_state"] = "test";
    // 自动入账开关
    // $dto["out_order_auto_acct_flag"] = "test";
    // 支付手续费(%)
    // $dto["fee_rate"] = "";
    // 支付固定手续费(元)
    // $dto["fee_fix_amt"] = "";
    // 交易手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 交易手续费外扣标记
    // $dto["out_fee_flag"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


