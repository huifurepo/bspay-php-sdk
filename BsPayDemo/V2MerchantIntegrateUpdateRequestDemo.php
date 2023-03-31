<?php

/**
 * 商户统一变更接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantIntegrateUpdateRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantIntegrateUpdateRequest;

// 2.组装请求参数
$request = new V2MerchantIntegrateUpdateRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付ID
$request->setHuifuId("6666000105240784");
// 渠道商汇付ID
$request->setUpperHuifuId("6666000105215341");
// 业务处理类型
$request->setDealType("1");

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
    // 商户基本信息
    $extendInfoMap["basic_info"]= getBasicInfo();
    // 卡信息配置实体
    // $extendInfoMap["card_info"]= getCardInfo();
    // 协议信息实体
    // $extendInfoMap["agreement_info"]= getAgreementInfo();
    // 营销补贴
    // $extendInfoMap["combine_pay_config"]= getCombinePayConfig();
    // 取现配置列表
    // $extendInfoMap["cash_config"]= getCashConfig();
    // 结算配置实体
    // $extendInfoMap["settle_config"]= getSettleConfig();
    // 业务开关对象
    // $extendInfoMap["biz_conf"]= getBizConf();
    // 微信配置对象
    // $extendInfoMap["wx_conf_list"]= getWxConfList();
    // 实名认证信息
    // $extendInfoMap["wx_realname_info"]= getWxRealnameInfo();
    // 支付宝配置对象
    // $extendInfoMap["ali_conf_list"]= getAliConfList();
    // 银联小微入驻信息实体
    // $extendInfoMap["union_micro_info"]= getUnionMicroInfo();
    // 银联二维码配置
    // $extendInfoMap["union_conf_list"]= getUnionConfList();
    // 银行卡业务配置实体
    // $extendInfoMap["bank_card_conf"]= getBankCardConf();
    // 余额支付配置实体
    // $extendInfoMap["balance_pay_config"]= getBalancePayConfig();
    // 花呗分期费率配置实体
    // $extendInfoMap["hb_fq_fee_config"]= getHbFqFeeConfig();
    // 商户业务类型
    // $extendInfoMap["mer_bus_type"]= "";
    // 线上费率配置
    // $extendInfoMap["online_fee_conf_list"]= getOnlineFeeConfList();
    // 线上手续费承担方配置
    // $extendInfoMap["online_pay_fee_conf_list"]= getOnlinePayFeeConfList();
    // 文件列表
    // $extendInfoMap["file_info"]= getFileInfo();
    // 异步消息接收地址(审核)
    $extendInfoMap["async_return_url"]= "";
    // 业务开通结果异步消息接收地址
    $extendInfoMap["busi_async_return_url"]= "";
    // 交易异步应答地址
    $extendInfoMap["recon_resp_addr"]= "";
    return $extendInfoMap;
}

function getLegalInfo() {
    $dto = array();
    // 法人姓名
    // $dto["legal_name"] = "test";
    // 法人证件类型
    // $dto["legal_cert_type"] = "test";
    // 法人证件号码
    // $dto["legal_cert_no"] = "test";
    // 法人证件有效期类型
    // $dto["legal_cert_validity_type"] = "test";
    // 法人证件有效期开始日期
    // $dto["legal_cert_begin_date"] = "test";
    // 法人证件有效期截止日期
    // $dto["legal_cert_end_date"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getContactInfo() {
    $dto = array();
    // 联系人姓名
    // $dto["contact_name"] = "test";
    // 联系人手机号
    // $dto["contact_mobile_no"] = "test";
    // 联系人电子邮箱
    // $dto["contact_email"] = "test";
    // 联系人身份证号
    // $dto["contact_cert_no"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getSignUserInfo() {
    $dto = array();
    // 签约人类型
    // $dto["type"] = "test";
    // 姓名
    // $dto["sign_name"] = "";
    // 手机号
    // $dto["sign_mobile_no"] = "";
    // 身份证
    // $dto["sign_cert_no"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBasicInfo() {
    $dto = array();
    // 经营简称
    $dto["short_name"] = "张三";
    // 小票名称
    $dto["receipt_name"] = "";
    // 商户英文名称
    $dto["mer_en_name"] = "";
    // 所属行业
    $dto["mcc"] = "";
    // 营业执照类型
    $dto["license_type"] = "";
    // 营业执照有效期开始日期
    $dto["license_begin_date"] = "";
    // 营业执照有效期截止日期
    $dto["license_end_date"] = "";
    // 营业执照有效期类型
    $dto["license_validity_type"] = "";
    // 注册详细地址
    $dto["reg_detail"] = "";
    // 注册省
    $dto["reg_prov_id"] = "";
    // 注册市
    $dto["reg_area_id"] = "";
    // 注册区
    $dto["reg_district_id"] = "";
    // 经营详细地址
    $dto["detail_addr"] = "";
    // 经营省
    $dto["prov_id"] = "";
    // 经营市
    $dto["area_id"] = "";
    // 经营区
    $dto["district_id"] = "";
    // 客服电话
    $dto["service_phone"] = "";
    // 商户主页URL
    $dto["mer_url"] = "";
    // 商户ICP备案编号
    $dto["mer_icp"] = "";
    // 开户许可证核准号
    $dto["open_licence_no"] = "";
    // 法人信息
    // $dto["legal_info"] = getLegalInfo();
    // 联系人信息
    // $dto["contact_info"] = getContactInfo();
    // 签约人
    // $dto["sign_user_info"] = getSignUserInfo();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCardInfo() {
    $dto = array();
    // 结算类型
    // $dto["card_type"] = "test";
    // 银行所在省参考银行省份编码；参考[地区码](https://paas.huifu.com/partners/api/#/csfl/api_csfl_dqbm)，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：310000&lt;/font&gt;；如修改省市要级联修改&lt;br/&gt;当card_type&#x3D;0时非必填， 当card_type&#x3D;1或2时必填
    // $dto["prov_id"] = "test";
    // 银行所在市参考省市区编码；参考[地区码](https://paas.huifu.com/partners/api/#/csfl/api_csfl_dqbm)，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：310100 &lt;/font&gt;；如修改省市要级联修改&lt;br/&gt;当card_type&#x3D;0时非必填， 当card_type&#x3D;1或2时必填
    // $dto["area_id"] = "test";
    // 结算账户名
    // $dto["card_name"] = "test";
    // 结算账号
    // $dto["card_no"] = "test";
    // 银行编码
    // $dto["bank_code"] = "";
    // 联行号
    // $dto["branch_code"] = "";
    // 支行名称
    // $dto["branch_name"] = "";
    // 持卡人证件有效期类型
    // $dto["cert_validity_type"] = "";
    // 持卡人证件有效期（起始）
    // $dto["cert_begin_date"] = "";
    // 持卡人证件有效期（截止）
    // $dto["cert_end_date"] = "";
    // 持卡人证件号码
    // $dto["cert_no"] = "";
    // 持卡人证件类型
    // $dto["cert_type"] = "";
    // 银行卡绑定手机号
    // $dto["mp"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAgreementInfo() {
    $dto = array();
    // 协议类型
    // $dto["agreement_type"] = "test";
    // 协议号
    // $dto["agreement_no"] = "";
    // 协议模板号
    // $dto["agreement_model"] = "";
    // 协议模板名称
    // $dto["agreement_name"] = "";
    // 签约日期
    // $dto["sign_date"] = "";
    // 协议开始日期
    // $dto["agree_begin_date"] = "";
    // 协议结束日期
    // $dto["agree_end_date"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCombinePayConfig() {
    $dto = array();
    // 支付手续费(%)
    // $dto["fee_rate"] = "";
    // 支付固定手续费(元)
    // $dto["fee_fix_amt"] = "";
    // 交易手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCashConfig() {
    $dto = array();
    // 是否开通取现
    // $dto["switch_state"] = "test";
    // 业务类型
    // $dto["cash_type"] = "test";
    // 取现手续费率（%）fix_amt与fee_rate至少填写一项，单位%，需保留小数点后两位，取值范围[0.00,100.00]，不收费请填写0.00；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.05&lt;/font&gt;&lt;br/&gt;注：如果fix_amt与fee_rate都填写了则手续费&#x3D;fix_amt+支付金额*fee_rate
    // $dto["fee_rate"] = "test";
    // 提现手续费（固定/元）
    // $dto["fix_amt"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";
    // 手续费承担方
    // $dto["out_fee_huifu_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getSettleConfig() {
    $dto = array();
    // 结算周期
    // $dto["settle_cycle"] = "test";
    // 节假日结算手续费率
    // $dto["fixed_ratio"] = "";
    // 起结金额
    // $dto["min_amt"] = "";
    // 结算手续费外扣时的账户类型
    // $dto["out_settle_acct_type"] = "";
    // 结算手续费外扣时的汇付ID
    // $dto["out_settle_huifuid"] = "";
    // 手续费外扣标记
    // $dto["out_settle_flag"] = "";
    // 留存金额
    // $dto["remained_amt"] = "";
    // 结算摘要
    // $dto["settle_abstract"] = "";
    // 结算批次号
    // $dto["settle_batch_no"] = "";
    // 结算方式
    // $dto["settle_pattern"] = "";
    // 是否优先到账
    // $dto["is_priority_receipt"] = "";
    // 自定义结算处理时间
    // $dto["settle_time"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBizConf() {
    $dto = array();
    // 延迟入账开关
    // $dto["delay_flag"] = "";
    // 商户开通强制延迟标记
    // $dto["forced_delay_flag"] = "";
    // 是否开通网银
    // $dto["online_flag"] = "";
    // 是否开通快捷
    // $dto["quick_flag"] = "";
    // 是否开通代扣
    // $dto["withhold_flag"] = "";
    // 是否开通微信预授权
    // $dto["wechatpay_pre_auth_flag"] = "";
    // 是否开通支付宝预授权
    // $dto["alipay_pre_auth_flag"] = "";
    // 是否开通营销补贴
    // $dto["combine_pay_flag"] = "";
    // 是否开通余额支付
    // $dto["balance_pay_flag"] = "";
    // 是否开通结算
    // $dto["settle_flag"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getWxConfList() {
    $dto = array();
    // 支付场景
    // $dto["pay_scene"] = "test";
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // ~~商户经营类目~~
    // $dto["~~mcc~~"] = "";
    // 子渠道号
    // $dto["pay_channel_id"] = "";
    // 费率规则id
    // $dto["fee_rule_id"] = "";
    // 公众号支付Appid
    // $dto["wx_woa_app_id"] = "";
    // 微信公众号授权目录
    // $dto["wx_woa_path"] = "";
    // 微信小程序APPID
    // $dto["wx_applet_app_id"] = "";
    // 微信公众号APPID对应的秘钥
    // $dto["wx_woa_secret"] = "";
    // 微信小程序APPID对应的秘钥
    // $dto["wx_applet_secret"] = "";
    // 申请服务 
    // $dto["service_codes"] = "";
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

function getUboInfo() {
    $dto = array();
    // 证件类型
    // $dto["ubo_id_doc_type"] = "test";
    // 证件正面照片
    // $dto["ubo_id_doc_copy"] = "test";
    // 证件姓名
    // $dto["ubo_id_doc_name"] = "test";
    // 证件号码
    // $dto["ubo_id_doc_number"] = "test";
    // 证件居住地址
    // $dto["ubo_id_doc_address"] = "test";
    // 证件有效期开始时间
    // $dto["ubo_period_begin"] = "test";
    // 证件有效期结束时间
    // $dto["ubo_period_end"] = "test";
    // 证件反面照片
    // $dto["ubo_id_doc_copy_back"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getWxRealnameInfo() {
    $dto = array();
    // 支付场景
    // $dto["pay_scene"] = "test";
    // 联系人姓名
    // $dto["name"] = "test";
    // 联系人手机号
    // $dto["mobile"] = "test";
    // 联系人证件号码
    // $dto["contact_id_card_number"] = "test";
    // 实名认证类型
    // $dto["realname_info_type"] = "";
    // 子渠道号
    // $dto["pay_channel_id"] = "";
    // 联系人类型
    // $dto["contact_type"] = "";
    // 联系人证件类型
    // $dto["contact_id_doc_type"] = "";
    // 联系人证件有效期开始时间
    // $dto["contact_period_begin_date"] = "";
    // 联系人证件有效期结束时间
    // $dto["contact_period_end_date"] = "";
    // 证书类型
    // $dto["cert_type"] = "";
    // 证书编号
    // $dto["cert_number"] = "";
    // 经营者/法人是否为受益人
    // $dto["owner"] = "";
    // 法人证件居住地址
    // $dto["legal_identification_address"] = "";
    // 小微经营类型
    // $dto["micro_biz_type"] = "";
    // 门店名称
    // $dto["store_name"] = "";
    // 门店省市编码
    // $dto["store_address_code"] = "";
    // 门店地址
    // $dto["store_address"] = "";
    // 特殊行业Id
    // $dto["category_id"] = "";
    // 是否金融机构
    // $dto["finance_institution_flag"] = "";
    // 金融机构类型
    // $dto["finance_type"] = "";
    // 受益人信息
    // $dto["ubo_info_list"] = getUboInfo();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getAliConfList() {
    $dto = array();
    // 支付场景
    // $dto["pay_scene"] = "test";
    // 手续费（%）
    // $dto["fee_rate"] = "test";
    // 商户经营类目
    // $dto["mcc"] = "";
    // 子渠道号
    // $dto["pay_channel_id"] = "";
    // 拟申请的间联商户等级
    // $dto["indirect_level"] = "";
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

function getUnionMicroInfo() {
    $dto = array();
    // 银联商户类别
    // $dto["mchnt_type"] = "test";
    // 商户经度
    // $dto["mer_lng"] = "test";
    // 商户纬度
    // $dto["mer_lat"] = "test";
    // 店铺名称
    // $dto["shop_name"] = "test";
    // 商户经营类目
    // $dto["mcc"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getUnionConfList() {
    $dto = array();
    // 借记卡手续费1000以上（%）
    // $dto["debit_fee_rate_up"] = "test";
    // 银联二维码业务贷记卡手续费1000以上（%）
    // $dto["credit_fee_rate_up"] = "test";
    // 借记卡手续费1000以下（%）
    // $dto["debit_fee_rate_down"] = "test";
    // 银联二维码业务贷记卡手续费1000以下（%）
    // $dto["credit_fee_rate_down"] = "test";
    // 银联业务手续费类型
    // $dto["charge_cate_code"] = "";
    // 借记卡封顶1000以上（元）
    // $dto["debit_fee_limit_up"] = "";
    // 借记卡封顶1000以下（元）
    // $dto["debit_fee_limit_down"] = "";
    // 商户经营类目
    // $dto["mcc"] = "";
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

function getBankCardConf() {
    $dto = array();
    // 借记卡手续费（%）
    // $dto["debit_fee_rate"] = "test";
    // 贷记卡手续费（%）
    // $dto["credit_fee_rate"] = "test";
    // 商户经营类目
    // $dto["mcc"] = "test";
    // 银行业务手续费类型
    // $dto["charge_cate_code"] = "";
    // 借记卡封顶值
    // $dto["debit_fee_limit"] = "";
    // 云闪付借记卡手续费1000以上（%）
    // $dto["cloud_debit_fee_rate_up"] = "";
    // 云闪付借记卡封顶1000以上(元)
    // $dto["cloud_debit_fee_limit_up"] = "";
    // 云闪付贷记卡手续费1000以上（%）
    // $dto["cloud_credit_fee_rate_up"] = "";
    // 云闪付借记卡手续费1000以下（%）
    // $dto["cloud_debit_fee_rate_down"] = "";
    // 云闪付借记卡封顶1000以下(元)
    // $dto["cloud_debit_fee_limit_down"] = "";
    // 云闪付贷记卡手续费1000以下（%）
    // $dto["cloud_credit_fee_rate_down"] = "";
    // 是否开通小额双免
    // $dto["is_open_small_flag"] = "";
    // 小额双免单笔限额(元)
    // $dto["small_free_amt"] = "";
    // 小额双免手续费（%）
    // $dto["small_fee_amt"] = "";
    // 交易手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBalancePayConfig() {
    $dto = array();
    // 支付手续费(%)
    // $dto["fee_rate"] = "";
    // 支付固定手续费(元)
    // $dto["fee_fix_amt"] = "";
    // 交易手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getHbFqFeeConfig() {
    $dto = array();
    // 花呗收单分期3期（%）分期费率不为空时，收单费率必填，大于0，保留2位小数，不小于渠道商成本；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.0&lt;/font&gt;代表费率为1.00%
    // $dto["acq_three_period"] = "test";
    // 花呗收单分期6期（%）分期费率不为空时，收单费率必填，大于0，保留2位小数，不小于渠道商成本；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.0&lt;/font&gt;代表费率为1.00%
    // $dto["acq_six_period"] = "test";
    // 花呗收单分期12期（%）分期费率不为空时，收单费率必填，大于0，保留2位小数，不小于渠道商成本；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.0&lt;/font&gt;代表费率为1.00%
    // $dto["acq_twelve_period"] = "test";
    // 花呗分期3期（%）
    // $dto["three_period"] = "";
    // 花呗分期6期（%）
    // $dto["six_period"] = "";
    // 花呗分期12期（%）
    // $dto["twelve_period"] = "";
    // 商户经营类目
    // $dto["ali_mcc"] = "";
    // 支付场景
    // $dto["pay_scene"] = "";
    // 交易手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";

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

function getFileInfo() {
    $dto = array();
    // D1结算协议图片文件
    // $dto["settle_agree_pic"] = "";
    // 授权委托书
    // $dto["auth_enturst_pic"] = "";
    // 商务协议
    // $dto["ba_pic"] = "";
    // 公司照片一
    // $dto["store_header_pic"] = "";
    // 公司照片二
    // $dto["store_indoor_pic"] = "";
    // 公司照片三
    // $dto["store_cashier_desk_pic"] = "";
    // 法人身份证反面
    // $dto["legal_cert_back_pic"] = "";
    // 法人身份证正面
    // $dto["legal_cert_front_pic"] = "";
    // 营业执照图片
    // $dto["license_pic"] = "";
    // 组织机构代码证
    // $dto["org_code_pic"] = "";
    // 开户许可证
    // $dto["reg_acct_pic"] = "";
    // 结算卡反面
    // $dto["settle_card_back_pic"] = "";
    // 结算卡正面
    // $dto["settle_card_front_pic"] = "";
    // 结算人身份证反面
    // $dto["settle_cert_back_pic"] = "";
    // 结算人身份证正面
    // $dto["settle_cert_front_pic"] = "";
    // 税务登记证
    // $dto["tax_reg_pic"] = "";
    // 实名登记证书照片
    // $dto["cert_pic"] = "";
    // 个人商户身份证件正面照片
    // $dto["identification_front_pic"] = "";
    // 个人商户身份证件反面照片
    // $dto["identification_back_pic"] = "";
    // 单位证明函照片
    // $dto["company_prove_pic"] = "";
    // 金融机构许可证图片1
    // $dto["finance_license_pic1"] = "";
    // 金融机构许可证图片2
    // $dto["finance_license_pic2"] = "";
    // 金融机构许可证图片3
    // $dto["finance_license_pic3"] = "";
    // 金融机构许可证图片4
    // $dto["finance_license_pic4"] = "";
    // 金融机构许可证图片5
    // $dto["finance_license_pic5"] = "";
    // 联系人身份证正面照
    // $dto["contact_id_front_pic"] = "";
    // 联系人身份证反面照
    // $dto["contact_id_back_pic"] = "";
    // 联系人护照人像面
    // $dto["contact_passport_img_pic"] = "";
    // 联系人证件照正面
    // $dto["contact_cert_front_pic"] = "";
    // 联系人证件照反面
    // $dto["contact_cert_back_pic"] = "";
    // 微信业务办理授权函
    // $dto["contact_wx_busi_auth_pic"] = "";
    // 行业经营许可证资质照片一
    // $dto["industry_busi_license_pic1"] = "";
    // 行业经营许可证资质照片二
    // $dto["industry_busi_license_pic2"] = "";
    // 行业经营许可证资质照片三
    // $dto["industry_busi_license_pic3"] = "";
    // 行业经营许可证资质照片四
    // $dto["industry_busi_license_pic4"] = "";
    // 行业经营许可证资质照片五
    // $dto["industry_busi_license_pic5"] = "";
    // 行业经营许可证资质照片六
    // $dto["industry_busi_license_pic6"] = "";
    // 法人护照人像面
    // $dto["legal_passport_img_pic"] = "";
    // 法人港澳台通行证正面
    // $dto["legal_hk_aom_front_pic"] = "";
    // 法人其他证件照片
    // $dto["legal_other_cert_pic"] = "";
    // 持卡人身份证人像面
    // $dto["cert_front_pic"] = "";
    // 持卡人身份证国徽面
    // $dto["cert_back_pic"] = "";
    // 持卡人护照人像面
    // $dto["cert_passport_img_pic"] = "";
    // 持卡人港澳台通行证正面
    // $dto["cert_hk_aom_front_pic"] = "";
    // 持卡人其它证件照片
    // $dto["cert_other_pic"] = "";
    // 收银台照片
    // $dto["cashier_desk_pic"] = "";
    // 店铺内景照
    // $dto["indoor_pic"] = "";
    // 门头照
    // $dto["header_pic"] = "";
    // 变更申请表文件
    // $dto["modify_apply_pic"] = "";
    // 签约人身份证照片-人像面
    // $dto["sign_identity_front_file_id"] = "";
    // 签约人身份证照片-国徽面
    // $dto["sign_identity_back_file_id"] = "";
    // 签约人法人授权书
    // $dto["sign_auth_file_id"] = "";
    // 支付宝授权函照片
    // $dto["contact_ali_busi_auth_pic"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


