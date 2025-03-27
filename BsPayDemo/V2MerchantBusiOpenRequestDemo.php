<?php

/**
 * 商户业务开通 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBusiOpenRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantBusiOpenRequest;

// 2.组装请求参数
$request = new V2MerchantBusiOpenRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000104778898");
// 直属渠道号
$request->setUpperHuifuId("6666000003080000");
// 签约人jsonObject格式；agreement_info中选择电子签约时必填；个人商户填本人信息。
// $request->setSignUserInfo(getC5a0fe509f2e401eB8dd12de29fb4c84());
// 线上业务类型编码基本信息入驻接口中scene_type&#x3D;ONLINE/ALL时必填；&lt;br/&gt;开通以下业务快捷、网银、余额支付、银行大额转账、分账比例&gt;20%需要提供补充材料，参见[线上业务类型编码及补充材料说明](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/kyc/KYC-%E7%BA%BF%E4%B8%8A%E4%B8%9A%E5%8A%A1%E7%B1%BB%E5%9E%8B%E7%BC%96%E7%A0%81%E5%8F%8A%E8%A1%A5%E5%85%85%E6%9D%90%E6%96%99%E8%AF%B4%E6%98%8E.xlsx)；材料通过[图片上传接口](https://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)上传&lt;font color&#x3D;&quot;green&quot;&gt;示例值：H7999AL&lt;/font&gt;
// $request->setOnlineBusiType("test");
// *协议信息实体*jsonObject字符串；[签约协议材料说明](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/kyc/KYC-%E5%95%86%E6%88%B7%E5%90%88%E5%90%8C%E7%AD%BE%E7%BA%A6%E8%A7%84%E5%88%99.xlsx) &lt;br/&gt;若未签署过协议的情况下，调用该接口时必填 ，且注册地址或经营地址为如下地区（江苏省、浙江省、湖南省、湖北省、云南省、贵州省、陕西省、河南省、吉林省、黑龙江省、福建省、海南省、重庆市、青海省、宁夏回族自治区）开通银联二维码或刷卡业务不支持挂网协议；&lt;br/&gt;若已签署过纸质或电子协议下，调用该接口时必填，且只可以选择纸质或电子协议；&lt;br/&gt;若已签署过挂网协议下，调用该接口时，选填。
$request->setAgreementInfo(get54943e6854664c5d91773cfbf2c3adfb());

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
    // 微信支付宝商户简称
    $extendInfoMap["short_name"]= "简称";
    // 是否开通网银
    $extendInfoMap["online_flag"]= "Y";
    // 是否开通快捷
    $extendInfoMap["quick_flag"]= "Y";
    // 是否开通代扣
    $extendInfoMap["withhold_flag"]= "Y";
    // 商户业务类型
    // $extendInfoMap["mer_bus_type"]= "";
    // 是否交易手续费外扣
    $extendInfoMap["out_fee_flag"]= "2";
    // 交易手续费外扣汇付ID
    $extendInfoMap["out_fee_huifuid"]= "";
    // 交易手续费外扣时的账户类型
    $extendInfoMap["out_fee_acct_type"]= "";
    // 支付宝配置对象
    $extendInfoMap["ali_conf_list"]= get8a6ad13256194b01Bf85Ec8d25bd1696();
    // 支付宝直连配置对象
    // $extendInfoMap["ali_zl_conf"]= get5946991152e14046Bdba8f4b548300e9();
    // 开通支付宝预授权
    $extendInfoMap["alipay_pre_auth_flag"]= "N";
    // 微信配置对象
    $extendInfoMap["wx_conf_list"]= get9ba701173cb34ea1B277560af0e6db14();
    // 微信直连配置对象
    // $extendInfoMap["wx_zl_conf"]= get5451b1687e874df7Bde1E67097094fc5();
    // 开通微信预授权
    $extendInfoMap["wechatpay_pre_auth_flag"]= "N";
    // 银联二维码配置
    $extendInfoMap["union_conf_list"]= get9cf2e8a13ebd4a2dB64a55519177e202();
    // 银行卡业务配置
    $extendInfoMap["bank_card_conf"]= get016c9dcd11c64a2cB066Ef64da389d29();
    // 线上费率配置
    // $extendInfoMap["online_fee_conf_list"]= get19e75254596a452280f256a991d79ef9();
    // 线上手续费承担方配置
    // $extendInfoMap["online_pay_fee_conf_list"]= getF8177b5c31204582B42eE60e040c29ba();
    // 运营媒介
    // $extendInfoMap["online_media_info_list"]= get4309db416ca342bcA13345e673805241();
    // *余额支付配置*
    $extendInfoMap["balance_pay_config"]= get1135c4965a3d44c7892088eed6146795();
    // 全域资金管理配置(华通银行)
    // $extendInfoMap["out_order_funds_config"]= get8ed130fa5d1745b59662De3107617dae();
    // 补贴支付
    $extendInfoMap["combine_pay_config"]= get76739284Fbb74e30B0a1D230e8eaa8e7();
    // 花呗分期费率配置
    $extendInfoMap["hb_fq_fee_config"]= getD2459d856be448978e802ca125411d5f();
    // 汇总结算配置
    // $extendInfoMap["collection_settle_config_list"]= getC06fd63cDda747958a90D0a797023256();
    // 分账配置信息
    // $extendInfoMap["split_conf_info"]= get3a7fa75609db4bffA922B9fe5d9d4b89();
    // 延迟入账开关
    $extendInfoMap["delay_flag"]= "Y";
    // 商户开通强制延迟标记
    $extendInfoMap["forced_delay_flag"]= "Y";
    // 使用上级微信、支付宝商户号发起交易
    // $extendInfoMap["use_chains_flag"]= "";
    // *补充文件信息*
    // $extendInfoMap["extended_material_list"]= getF88a37c148874de7916029977e0c737d();
    // 开户费用值(元)
    // $extendInfoMap["enter_fee"]= "";
    // 开户费用类型
    // $extendInfoMap["enter_fee_flag"]= "";
    // 是否开通在线退款
    // $extendInfoMap["online_refund"]= "";
    // 是否支持平台退款
    // $extendInfoMap["platform_refund"]= "";
    // 是否支持撤销
    // $extendInfoMap["support_revoke"]= "";
    // 异步消息接收地址
    $extendInfoMap["async_return_url"]= "http://192.168.85.157:30031/sspm/testVirgo";
    // 业务开通结果异步消息接收地址
    $extendInfoMap["busi_async_return_url"]= "";
    // 交易异步应答地址
    $extendInfoMap["recon_resp_addr"]= "http://192.168.85.157:30031/sspm/testVirgo";
    // 银联线上收银台
    // $extendInfoMap["uni_app_payment_config"]= get0eba7f98947e41f9Bd2fB0eb0a34d031();
    // 资金归集开通标记
    // $extendInfoMap["fund_collection_flag"]= "";
    // 代发配置
    // $extendInfoMap["surrogate_config_list"]= get32a0577b179646a3A5afAa7531b96186();
    // 大额支付配置
    // $extendInfoMap["large_amt_pay_config"]= getC0d18cb71e8741158cdc27dadc0c3bfd();
    // 托管支付开关
    // $extendInfoMap["half_pay_host_flag"]= "";
    return $extendInfoMap;
}

function getC5a0fe509f2e401eB8dd12de29fb4c84() {
    $dto = array();
    // 签约人类型
    // $dto["type"] = "test";
    // 姓名签约人类型&#x3D;其他，必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：张三&lt;/font&gt;
    // $dto["name"] = "test";
    // 身份证签约人类型&#x3D;联系人/其他，必填 ；注意：**签约人会做姓名+身份证+手机号验证，请正确填写**；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：320946195712025082&lt;/font&gt;
    // $dto["cert_no"] = "test";
    // 手机号签约人类型&#x3D;法人/其他 ，必填；注意：**签约人会做姓名+身份证+手机号验证，请正确填写**；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：13917463536&lt;/font&gt;
    // $dto["mobile_no"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get208263e8Beee48d6A1a907b992b5be38() {
    $dto = array();
    // 联系人身份证号码
    // $dto["id_card_number"] = "test";
    // 联系人姓名
    // $dto["name"] = "";
    // 联系人手机号
    // $dto["mobile"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getE8257120Bcd8451dAc1b263c8908eccf() {
    $dto = array();
    // 证件持有人类型
    // $dto["legal_type"] = "";
    // 证件类型
    // $dto["card_type"] = "";
    // 姓名
    // $dto["person_name"] = "";
    // 证件号码
    // $dto["card_no"] = "";
    // 证件生效时间
    // $dto["effect_time"] = "";
    // 证件过期时间
    // $dto["expire_time"] = "";
    // 证件正面照
    // $dto["card_front_img"] = "";
    // 证件反面照
    // $dto["card_back_img"] = "";
    // 授权函照片
    // $dto["auth_letter_img"] = "";
    // 是否为受益人
    // $dto["is_benefit_person"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get405bdb039ca543da84505eeee4b920ae() {
    $dto = array();
    // 是否金融机构
    // $dto["finance_institution_flag"] = "";
    // 金融机构类型
    // $dto["finance_type"] = "";
    // 证书类型
    // $dto["cert_type"] = "";
    // 小微经营类型
    // $dto["micro_biz_type"] = "";
    // 特殊行业id
    // $dto["special_category_id"] = "";
    // 联系人信息对象
    // $dto["contact_person_info"] = get208263e8Beee48d6A1a907b992b5be38();
    // 法人身份信息
    // $dto["legal_person_info"] = getE8257120Bcd8451dAc1b263c8908eccf();

    return $dto;
}

function get8a6ad13256194b01Bf85Ec8d25bd1696() {
    $dto = array();
    // 支付场景
    $dto["pay_scene"] = "1";
    // 手续费（%）
    $dto["fee_rate"] = "0.38";
    // 子渠道号
    $dto["pay_channel_id"] = "JQF00001";
    // 最低收取手续费（元）
    // $dto["fee_min_amt"] = "";
    // 是否需要实名认证
    // $dto["is_check_real_name"] = "";
    // 实名认证信息
    // $dto["al_real_name_info"] = get405bdb039ca543da84505eeee4b920ae();
    // *商户经营类目*
    $dto["mcc"] = "2015091000052157";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getF5dfd4bf09684252A1e73596275239b0() {
    $dto = array();
    // 文件类型
    // $dto["file_type"] = "test";
    // 文件jfileId
    // $dto["file_id"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get5946991152e14046Bdba8f4b548300e9() {
    $dto = array();
    // 申请类型
    // $dto["apply_type"] = "test";
    // 商户支付宝账号
    // $dto["account"] = "test";
    // 服务费率仅支持渠道商。平台商户调用不支持该字段服务费率（%），0.38~3之间，精确到0.01。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.06&lt;/font&gt;
    // $dto["fee_rate"] = "test";
    // 文件列表
    // $dto["file_list"] = getF5dfd4bf09684252A1e73596275239b0();
    // 联系人姓名
    // $dto["contact_name"] = "";
    // 联系人手机号
    // $dto["contact_mobile_no"] = "";
    // 联系人电子邮箱
    // $dto["contact_email"] = "";
    // 订单授权凭证
    // $dto["order_ticket"] = "";
    // 营业执照编号
    // $dto["license_code"] = "";
    // 营业执照有效期类型
    // $dto["license_validity_type"] = "";
    // 营业执照有效期开始日期
    // $dto["license_begin_date"] = "";
    // 营业执照有效期截止日期
    // $dto["license_end_date"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get30a75c24597249ae9afe187edb84f26b() {
    $dto = array();
    // 联系人姓名联系人类型contact_type&#x3D;SUPER时必填。示例值：张三
    // $dto["name"] = "test";
    // 联系人手机号联系人类型contact_type&#x3D;SUPER时必填。示例值：13917364538
    // $dto["mobile"] = "test";
    // 联系人证件类型联系人类型contact_type&#x3D;SUPER时必填。&lt;br/&gt;枚举值参见《自然人证件类型》说明，示例值：00&lt;br/&gt;个体户/企业/事业单位/社会组织：可选择任一证件类型，政府机关仅支持身份证类型。
    // $dto["contact_id_doc_type"] = "test";
    // 联系人证件号码联系人类型contact_type&#x3D;SUPER时必填。示例值：320936198512035017
    // $dto["id_card_number"] = "test";
    // 联系人证件有效期开始时间联系人类型contact_type&#x3D;SUPER时必填&lt;br/&gt;格式：yyyy-MM-dd；示例值：2019-06-06
    // $dto["contact_period_begin"] = "test";
    // 联系人证件有效期结束时间联系人类型contact_type&#x3D;SUPER时必填&lt;br/&gt;格式：yyyy-MM-dd；示例值：2029-06-06&lt;br/&gt;结束时间大于开始时间;若证件有效期为长期，请填写：长期
    // $dto["contact_period_end"] = "test";
    // 是否金融机构
    // $dto["finance_institution_flag"] = "";
    // 金融机构类型
    // $dto["finance_type"] = "";
    // 证书类型
    // $dto["cert_type"] = "";
    // 小微经营类型
    // $dto["micro_biz_type"] = "";
    // 特殊行业id
    // $dto["special_category_id"] = "";
    // 联系人类型
    // $dto["contact_type"] = "";

    return $dto;
}

function get9ba701173cb34ea1B277560af0e6db14() {
    $dto = array();
    // 支付场景
    $dto["pay_scene"] = "1";
    // 手续费（%）
    $dto["fee_rate"] = "0.38";
    // *商户经营类目*
    $dto["mcc"] = "111";
    // 费率规则号
    $dto["fee_rule_id"] = "758";
    // 子渠道号
    $dto["pay_channel_id"] = "JP00001";
    // 最低收取手续费（元）
    // $dto["fee_min_amt"] = "";
    // 是否需要实名认证
    // $dto["is_check_real_name"] = "";
    // 实名认证信息
    // $dto["wx_real_name_info"] = get30a75c24597249ae9afe187edb84f26b();

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getB5f7772134434e1a909368bf0b218f8e() {
    $dto = array();
    // 文件类型
    // $dto["file_type"] = "test";
    // 文件jfileId
    // $dto["file_id"] = "test";

    return $dto;
}

function get0468b08bEef04edc8b156ae966dabba6() {
    $dto = array();
    // 联系人类型
    // $dto["contact_type"] = "test";
    // 联系人姓名联系人类型为经办人时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：张三&lt;/font&gt;
    // $dto["contact_name"] = "test";
    // 联系人证件类型联系人类型为经办人时必填；00：身份证01:护照11：港澳台同胞通行证12：外国人居留证13：港澳居民证14：台湾居民证&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00&lt;/font&gt;；
    // $dto["cert_type"] = "test";
    // 联系人证件号码联系人类型为经办人时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：32090297512026402&lt;/font&gt;
    // $dto["contact_cert_no"] = "test";
    // 联系人手机号
    // $dto["contact_mobile_no"] = "test";
    // 联系人电子邮箱
    // $dto["contact_email"] = "test";
    // 联系人资料联系人类型为经办人时必填F28-联系人身份证国徽面   F29-联系人身份证人像面F227-微信业务办理授权函&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：&lt;/font&gt;
    // $dto["contact_file_list"] = getB5f7772134434e1a909368bf0b218f8e();
    // 证件有效期类型
    // $dto["contact_cert_validity_type"] = "test";
    // 证件有效期开始日期
    // $dto["contact_cert_begin_date"] = "test";
    // 证件有效期截止日期
    // $dto["contact_cert_end_date"] = "";

    return $dto;
}

function get9a82a39cD19e4ac59bddD45f281073e1() {
    $dto = array();
    // 文件类型
    // $dto["file_type"] = "test";
    // 文件jfileId
    // $dto["file_id"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAf114e52E4754377Af052dba62e56d8f() {
    $dto = array();
    // 证件类型
    // $dto["ubo_cert_type"] = "test";
    // 证件号码
    // $dto["ubo_cert_no"] = "test";
    // 姓名
    // $dto["ubo_name"] = "test";
    // 受益人证件居住地址
    // $dto["ubo_cert_doc_address"] = "test";
    // 证件有效类型
    // $dto["ubo_cert_validity_type"] = "test";
    // 证件有效期开始日期
    // $dto["ubo_cert_begin_date"] = "test";
    // 文件列表
    // $dto["ubo_file_list"] = get9a82a39cD19e4ac59bddD45f281073e1();
    // 证件有效期截止日期
    // $dto["ubo_cert_end_date"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get046c2ba150304545A5942ee82a8f6d8d() {
    $dto = array();
    // 经营者/法人是否为受益人
    // $dto["ubo_type"] = "test";
    // 受益人信息列表jsonArray格式,当ubo_type为Y时可不填
    // $dto["ubo_info_list"] = getAf114e52E4754377Af052dba62e56d8f();

    return $dto;
}

function getB3eb0d4b9cdf4584A958A101cfe08a7a() {
    $dto = array();
    // 文件类型
    // $dto["file_type"] = "test";
    // 文件jfileId
    // $dto["file_id"] = "test";

    return $dto;
}

function getBc1f3f1d748042a5Bc437a6aeefdf139() {
    $dto = array();
    // 经营场景类型
    // $dto["sales_scenes_type"] = "test";
    // 功能费率仅支持渠道商传入该字段。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.06&lt;/font&gt;平台商户为子商户开通微信直连支付时，不支持该字段，取平台商户费率上送微信。
    // $dto["fee_rate"] = "test";
    // 线下场所对应的商家公众号APPID开通线下门店场景时，填入。都填入时，取公众号的上送微信。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx51aa91a575359ff5&lt;/font&gt;
    // $dto["biz_sub_jsapi_app_id"] = "test";
    // 线下场所对应的商家小程序APPID开通线下门店场景时，填入。都填入时，取公众号的上送微信。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wxea9c30a90fs8d3fe&lt;/font&gt;
    // $dto["biz_sub_mini_app_id"] = "test";
    // 服务商公众号 ID开通公众号场景时，直连服务商和商户的公众号 APP ID，二选一填入。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx51aa91a575359ff5&lt;/font&gt;
    // $dto["jsapi_app_id"] = "test";
    // 商家公众号APPID开通公众号场景时，直连服务商和商户的公众号 APP ID，二选一填入。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wxea9c30a90fs8d3fe&lt;/font&gt;
    // $dto["jsapi_sub_app_id"] = "test";
    // 服务商小程序APPID开通小程序场景时，直连服务商和商户的小程序 APP ID，二选一填入。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx51aa91a575359ff5&lt;/font&gt;
    // $dto["mini_app_id"] = "test";
    // 商家小程序APPID开通小程序场景时，直连服务商和商户的小程序 APP ID，二选一填入。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx51aa91a575359ff5&lt;/font&gt;
    // $dto["mini_sub_app_id"] = "test";
    // 服务商应用APPID开通 APP 场景时，直连服务商和商户的 APP ID，二选一填入。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx51aa91a575359ff5&lt;/font&gt;
    // $dto["app_app_id"] = "test";
    // 商家应用APPID开通 APP 场景时，直连服务商和商户的 APP ID，二选一填入。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx51aa91a575359ff5&lt;/font&gt;
    // $dto["app_sub_app_id"] = "test";
    // 互联网网站域名开通互联网场景时填入；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：huifu.com&lt;/font&gt;
    // $dto["web_domain"] = "test";
    // 互联网网站对应的商家APPID开通互联网场景时填入；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx51aa91a575359ff5&lt;/font&gt;
    // $dto["web_app_id"] = "test";
    // 商家企业微信CorpID开通企业微信场景时填入；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：xxxxx&lt;/font&gt;
    // $dto["sub_corp_id"] = "test";
    // 文件列表
    // $dto["sales_scenes_file_list"] = getB3eb0d4b9cdf4584A958A101cfe08a7a();
    // 文件列表
    // $dto["fee_rate_file_list"] = "";
    // 门店名称
    // $dto["biz_store_name"] = "";
    // 门店省市编码
    // $dto["biz_address_code"] = "";
    // 门店地址
    // $dto["biz_store_address"] = "";

    return $dto;
}

function get9103f91eD12a46159c776f9823cabc6a() {
    $dto = array();
    // 文件类型
    // $dto["file_type"] = "test";
    // 文件jfileId
    // $dto["file_id"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getE7f70977Ecbd4973Ac29528723a02024() {
    $dto = array();
    // 登记证书类型
    // $dto["cert_type"] = "test";
    // 证书号
    // $dto["cert_no"] = "test";
    // 证书商户名称
    // $dto["cert_mer_name"] = "test";
    // 注册地址
    // $dto["reg_detail"] = "test";
    // 法人姓名
    // $dto["legal_name"] = "test";
    // 证书有效期类型
    // $dto["cert_validity_type"] = "test";
    // 证书有效期开始日期
    // $dto["cert_begin_date"] = "test";
    // 文件列表
    // $dto["cert_file_list"] = get9103f91eD12a46159c776f9823cabc6a();
    // 证书有效期截止日期
    // $dto["cert_end_date"] = "";

    return $dto;
}

function get93fbb92a7ddd45b5B7382fdcbd79b48f() {
    $dto = array();
    // 账户类型
    // $dto["card_type"] = "test";
    // 开户名称
    // $dto["card_name"] = "test";
    // 开户银行
    // $dto["bank_code"] = "test";
    // 开户银行省编码
    // $dto["prov_id"] = "test";
    // 开户银行市编码
    // $dto["area_id"] = "test";
    // 开户银行联行号开户银行联行号与开户银行全称（含支行)二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：102290026507&lt;/font&gt;
    // $dto["branch_code"] = "test";
    // 开户银行全称（含支行)开户银行联行号与开户银行全称（含支行)二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：中国工商银行股份有限公司上海市中山北路支行&lt;/font&gt;
    // $dto["branch_name"] = "test";
    // 银行账号
    // $dto["card_no"] = "test";

    return $dto;
}

function get7b52c9a52dcb46778ebdB77108b0ca03() {
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

function getE5a5f29aE76d45c58aceA219f7d7494e() {
    $dto = array();
    // 文件类型
    // $dto["file_type"] = "test";
    // 文件jfileId
    // $dto["file_id"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get5451b1687e874df7Bde1E67097094fc5() {
    $dto = array();
    // 微信子商户号微信支付分配的子商户号；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1632157057&lt;/font&gt;
    // $dto["sub_mch_id"] = "test";
    // 联系人信息jsonObject字符串,新增时必填
    // $dto["contact_info"] = get0468b08bEef04edc8b156ae966dabba6();
    // 最终受益人信息jsonObject字符串，商户类型为企业时，微信侧必填。（如果基本信息里有的话，可以不传取 huifu_id 对应的信息）。新增时填入
    // $dto["ubo_info"] = get046c2ba150304545A5942ee82a8f6d8d();
    // 经营场景jsonObject字符串，新增时填入
    // $dto["sales_info"] = getBc1f3f1d748042a5Bc437a6aeefdf139();
    // 特殊主体登记证书jsonObject字符串，商户营业执照类型为政府机关/事业单位/其他组织时，传入相应信息。新增时需填入
    // $dto["certificate_info"] = getE7f70977Ecbd4973Ac29528723a02024();
    // 银行账户信息jsonObject字符串，该字段不填时，取商户在汇付系统录入的结算账号信息。新增或修改时填入，修改时必填
    // $dto["wx_card_info"] = get93fbb92a7ddd45b5B7382fdcbd79b48f();
    // 配置集合对指定的sub_mch_id做配置
    // $dto["wx_zl_pay_conf_list"] = get7b52c9a52dcb46778ebdB77108b0ca03();
    // 操作类型ADD-新增， UPDATE-修改， 默认新增；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：ADD&lt;/font&gt;
    // $dto["operate_type"] = "test";
    // 补充说明信息
    // $dto["business_addition_msg"] = "";
    // 补充说明文件列表
    // $dto["addition_file_list"] = getE5a5f29aE76d45c58aceA219f7d7494e();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get9cf2e8a13ebd4a2dB64a55519177e202() {
    $dto = array();
    // 借记卡手续费1000以上（%）
    $dto["debit_fee_rate_up"] = "0.55";
    // 贷记卡手续费1000以上（%）
    $dto["credit_fee_rate_up"] = "0.56";
    // 借记卡手续费1000以下（%）
    $dto["debit_fee_rate_down"] = "0.38";
    // 银联二维码业务贷记卡手续费1000以下（%）
    $dto["credit_fee_rate_down"] = "0.38";
    // 银联业务手续费类型
    $dto["charge_cate_code"] = "03";
    // 借记卡封顶1000以上
    $dto["debit_fee_limit_up"] = "20";
    // 借记卡封顶1000以下
    $dto["debit_fee_limit_down"] = "10";
    // 商户经营类目
    $dto["mcc"] = "5411";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get016c9dcd11c64a2cB066Ef64da389d29() {
    $dto = array();
    // 借记卡手续费（%）
    $dto["debit_fee_rate"] = "0.38";
    // 贷记卡手续费（%）
    $dto["credit_fee_rate"] = "0.39";
    // *商户经营类目*
    $dto["mcc"] = "5411";
    // 银行业务手续费类型
    $dto["charge_cate_code"] = "02";
    // 借记卡封顶值
    $dto["debit_fee_limit"] = "0.56";
    // 银联手机闪付借记卡手续费1000以上（%）
    $dto["cloud_debit_fee_rate_up"] = "0.56";
    // 银联手机闪付借记卡封顶1000以上(元)
    $dto["cloud_debit_fee_limit_up"] = "12";
    // 银联手机闪付贷记卡手续费1000以上（%）
    $dto["cloud_credit_fee_rate_up"] = "0.59";
    // 银联手机闪付借记卡手续费1000以下（%）
    $dto["cloud_debit_fee_rate_down"] = "0.37";
    // 银联手机闪付借记卡封顶1000以下(元)
    $dto["cloud_debit_fee_limit_down"] = "5";
    // 银联手机闪付贷记卡手续费1000以下（%）
    $dto["cloud_credit_fee_rate_down"] = "0.36";
    // 是否开通小额双免
    $dto["is_open_small_flag"] = "0";
    // 小额双免单笔限额(元)
    $dto["small_free_amt"] = "1000";
    // 小额双免手续费（%）
    $dto["small_fee_amt"] = "0.33";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get19e75254596a452280f256a991d79ef9() {
    $dto = array();
    // 业务类型
    // $dto["fee_type"] = "test";
    // 银行编码
    // $dto["bank_id"] = "test";
    // 功能开关状态
    // $dto["stat_flag"] = "test";
    // 借贷标志
    // $dto["dc_flag"] = "test";
    // *单笔限额*
    // $dto["pay_every_deal"] = "test";
    // *单日限额*
    // $dto["pay_everyday"] = "test";
    // 银行名称
    // $dto["bank_name"] = "";
    // 银行中文简称
    // $dto["bank_short_chn"] = "";
    // 手续费（固定/元）
    // $dto["fix_amt"] = "";
    // 费率（%）
    // $dto["fee_rate"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getF8177b5c31204582B42eE60e040c29ba() {
    $dto = array();
    // 业务类型
    // $dto["pay_type"] = "";
    // 手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get4309db416ca342bcA13345e673805241() {
    $dto = array();
    // *运营媒介类型*
    // $dto["media_type"] = "test";
    // *媒介名称*PC网站域名／APP名称／小程序名称／公众号名称；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：汇付服务&lt;/font&gt;&lt;br/&gt;运营媒介类型为 ：S1/S2/S3/S4时，必填；
    // $dto["media_name"] = "test";
    // ICP备案/许可证号运营媒介类型为 ：S1时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：沪ICP备06046402号-28&lt;/font&gt;
    // $dto["mer_icp"] = "test";
    // *其他有效信息*其他有效信息或链接地址/APP下载地址；类型为S5或S2必填&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：http://download.huifu.com&lt;/font&gt;
    // $dto["other_info"] = "test";
    // *媒介主体与商户主体是否一致*Y/N；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：Y&lt;/font&gt;&lt;br/&gt;运营媒介为S1、S2、S3、S4且企业商户开通快捷或网银，或大额转账，或余额支付或分账业务（20%（不含）-100%），或为个人商户开通分账业务（10%（不含）-100%），必填&lt;br/&gt;若不一致，则需提供ICP备案/APP/微信公众号/小程序主体与商户的使用授权或开发证明材料；
    // $dto["media_mer_common_flag"] = "test";
    // *授权或开发证明材料*运营媒介为S1、S2、S3、S4且媒介主体与商户主体不一致时，且企业商户开通快捷或网银，或大额转账，或余额支付或分账业务（20%（不含）-100%），或为个人商户开通分账业务（10%（不含）-100%），必填&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
    // $dto["authorize_materials"] = "test";
    // 微信APP补充材料运营媒介为S2且开通微信下app支付时选填，具体见[图片上传接口](https://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)
    // $dto["other_material"] = "test";
    // appId运营媒介为S2且开通微信下app支付时必填
    // $dto["app_id"] = "test";
    // appId认证主体名称运营媒介为S2且开通微信下app支付时必填
    // $dto["app_name"] = "test";
    // 补充说明运营媒介为S2且开通微信下app支付时选填
    // $dto["supplement"] = "test";
    // *测试账号*
    // $dto["test_account"] = "";
    // *测试密码*
    // $dto["test_secret"] = "";
    // *运营媒介-首页*
    // $dto["media_front_page"] = "";
    // *运营媒介-服务/商品明细页面*
    // $dto["media_service_page"] = "";
    // *运营媒介-下单场景页面*
    // $dto["media_order_page"] = "";
    // *运营媒介-支付页面*
    // $dto["media_pay_page"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get8de10936E3cf4638A47b13c642562add() {
    $dto = array();
    // *业务模式说明*
    // $dto["busi_instruction"] = "test";
    // *资金流向说明*
    // $dto["capital_instruction"] = "test";
    // *功能开通用途说明*
    // $dto["function_instruction"] = "test";

    return $dto;
}

function get1135c4965a3d44c7892088eed6146795() {
    $dto = array();
    // *业务模式*
    // $dto["balance_model"] = "test";
    // 业务情况说明
    // $dto["description_info"] = get8de10936E3cf4638A47b13c642562add();
    // 手续费(%)
    $dto["fee_rate"] = "2";
    // 手续费（固定/元）
    $dto["fee_fix_amt"] = "1";
    // 手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";
    // 扣费模式
    // $dto["charge_mode"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get9d7d9a47Ce974f0e9640Dff46df1de57() {
    $dto = array();
    // 支行联行号card_type为0时必填，参考：[银行支行编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_yhzhbm)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：102290026507&lt;/font&gt;
    // $dto["branch_code"] = "test";
    // 支行名称card_type为0时必填 ,参考：[银行支行编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_yhzhbm)；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：中国工商银行上海市中山北路支行&lt;/font&gt;
    // $dto["branch_name"] = "test";
    // 结算账户名
    // $dto["card_name"] = "test";
    // 银行卡号
    // $dto["card_no"] = "test";
    // 卡类型
    // $dto["card_type"] = "test";
    // 持卡人证件类型00:身份证；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00&lt;/font&gt;；card_type为1时选填。
    // $dto["cert_type"] = "test";
    // 持卡人证件有效期（起始）card_type为1时选填；格式：yyyyMMdd，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20210830&lt;/font&gt;；&lt;br/&gt;若填写cert_no，cert_validity_type，cert_type需同时填写。
    // $dto["cert_begin_date"] = "test";
    // 持卡人证件有效期（截止）cert_validity_type变更为0时必填，格式：yyyyMMdd；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20210830&lt;/font&gt;
    // $dto["cert_end_date"] = "test";
    // 持卡人证件号码card_type为1时选填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：310112200001018888&lt;/font&gt;；
    // $dto["cert_no"] = "test";
    // 银行卡绑定手机号
    // $dto["mp"] = "test";
    // 开户许可证核准号
    // $dto["open_licence_no"] = "test";
    // 银行所在省
    // $dto["prov_id"] = "";
    // 银行所在市
    // $dto["area_id"] = "";
    // 银行编码
    // $dto["bank_code"] = "";
    // 持卡人证件有效期类型
    // $dto["cert_validity_type"] = "";

    return $dto;
}

function get462068608511416d8e6cD34df2b4c7f6() {
    $dto = array();
    // 开户手续费(元)
    // $dto["fee_fix_amt"] = "test";
    // 开户手续费外扣时的账户类型01-基本户，05-充值户，09-营销户，不填默认01；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：01&lt;/font&gt;&lt;br/&gt;注：fee_fix_amt：开户手续费大于0时必填
    // $dto["out_fee_acct_type"] = "test";
    // 开户手续费外扣汇付ID开通手续费外扣业务时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000109812123&lt;/font&gt;&lt;br/&gt;注：fee_fix_amt：开户手续费大于0时必填
    // $dto["out_fee_huifuid"] = "test";

    return $dto;
}

function get8ed130fa5d1745b59662De3107617dae() {
    $dto = array();
    // 自动入账开关
    // $dto["out_order_auto_acct_flag"] = "test";
    // 全渠道资金管理补充材料涉及文件类型：F504-全渠道资金管理补充材料；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;
    // $dto["other_payment_institutions_pic"] = "test";
    // 支付手续费(%)
    // $dto["fee_rate"] = "";
    // 手续费最小值(元)
    // $dto["fee_min_amt"] = "";
    // 交易手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 交易手续费外扣标记
    // $dto["out_fee_flag"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 全域资金开户银行卡信息
    // $dto["out_order_acct_card"] = get9d7d9a47Ce974f0e9640Dff46df1de57();
    // 全域资金开户手续费
    // $dto["out_order_acct_open_fees"] = get462068608511416d8e6cD34df2b4c7f6();
    // 全域支付业务模式
    // $dto["business_model"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get76739284Fbb74e30B0a1D230e8eaa8e7() {
    $dto = array();
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "test";
    // 手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "test";
    // 手续费(%)
    $dto["fee_rate"] = "10";
    // 手续费（固定/元）
    $dto["fee_fix_amt"] = "5";
    // 手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getD2459d856be448978e802ca125411d5f() {
    $dto = array();
    // 花呗收单分期3期（%）分期费率不为空时，收单费率必填，大于0，保留2位小数，不小于渠道商成本；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.0&lt;/font&gt;代表费率为1.00%
    $dto["acq_three_period"] = "1.30";
    // 花呗收单分期6期（%）分期费率不为空时，收单费率必填，大于0，保留2位小数，不小于渠道商成本；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.0&lt;/font&gt;代表费率为1.00%
    $dto["acq_six_period"] = "4.60";
    // 花呗收单分期12期（%）分期费率不为空时，收单费率必填，大于0，保留2位小数，不小于渠道商成本；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.0&lt;/font&gt;代表费率为1.00%
    $dto["acq_twelve_period"] = "9.12";
    // 花呗分期3期（%）
    $dto["three_period"] = "1.80";
    // 花呗分期6期（%）
    $dto["six_period"] = "4.60";
    // 花呗分期12期（%）
    $dto["twelve_period"] = "9.12";
    // 商户经营类目
    $dto["ali_mcc"] = "5411";
    // 支付场景
    $dto["pay_scene"] = "1";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getC06fd63cDda747958a90D0a797023256() {
    $dto = array();
    // 归集留存金(元)
    // $dto["out_resv_amt"] = "test";
    // 转入商户号
    // $dto["in_huifu_id"] = "test";
    // 转入账户
    // $dto["in_acct_id"] = "test";
    // 生效日期
    // $dto["valid_date"] = "test";
    // 转出账户
    // $dto["out_acct_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getDe658d7792bb47098c0eCc023a2abca5() {
    $dto = array();
    // 分账比例
    // $dto["fee_rate"] = "test";
    // 汇付Id
    // $dto["huifu_id"] = "test";

    return $dto;
}

function getB96e1b9a0dbc4d4eAffe33ebc725fc5f() {
    $dto = array();
    // *业务模式说明*
    // $dto["busi_instruction"] = "test";
    // *资金流向说明*
    // $dto["capital_instruction"] = "test";
    // *功能开通用途说明*
    // $dto["function_instruction"] = "test";

    return $dto;
}

function get3a7fa75609db4bffA922B9fe5d9d4b89() {
    $dto = array();
    // 分账开关
    // $dto["div_flag"] = "test";
    // 分账规则来源
    // $dto["rule_origin"] = "test";
    // 最大分账比例%
    // $dto["apply_ratio"] = "test";
    // 生效类型
    // $dto["start_type"] = "test";
    // 分账模式
    // $dto["scene"] = "test";
    // 分账明细
    // $dto["acct_split_bunch_list"] = getDe658d7792bb47098c0eCc023a2abca5();
    // 手续费外扣开关
    // $dto["out_fee_flag"] = "";
    // 手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";
    // 手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 手续费%
    // $dto["split_fee_rate"] = "";
    // 固定手续费
    // $dto["per_amt"] = "";
    // 业务情况说明
    // $dto["split_ext_info"] = getB96e1b9a0dbc4d4eAffe33ebc725fc5f();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getF88a37c148874de7916029977e0c737d() {
    $dto = array();
    // *文件id*
    // $dto["file_id"] = "test";
    // *文件类型*
    // $dto["file_type"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get54943e6854664c5d91773cfbf2c3adfb() {
    $dto = array();
    // *协议类型*
    $dto["agreement_type"] = "0";
    // *挂网协议地址*挂网协议必填；**必须按示例值填写**，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/PaymentServiceAgreement.htm&lt;/font&gt;；
    // $dto["agreement_url"] = "test";
    // 纸质协议开始日期
    $dto["agree_begin_date"] = "20200325";
    // 纸质协议结束日期
    $dto["agree_end_date"] = "20400325";
    // 电子协议签约短信发送标识
    // $dto["message_send_type"] = "";
    // 电子协议异步通知地址
    // $dto["agreement_async_return_url"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get0eba7f98947e41f9Bd2fB0eb0a34d031() {
    $dto = array();
    // 借记手续费（%）借记卡费率与贷记卡费率不能同时为空;保留2位小数，最大值100.00，最小值0.00；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.02&lt;/font&gt;
    // $dto["debit_fee_rate"] = "test";
    // 贷记手续费（%）借记卡费率与贷记卡费率不能同时为空;保留2位小数，最大值100.00，最小值0.00；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.06&lt;/font&gt;
    // $dto["credit_fee_rate"] = "test";
    // 状态开关
    // $dto["switch_state"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifuid"] = "";
    // 交易手续费外扣时的账户类型
    // $dto["out_fee_acct_type"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get32a0577b179646a3A5afAa7531b96186() {
    $dto = array();
    // 代发业务类型
    // $dto["surrogate_type"] = "test";
    // 手续费（固定/元）fix_amt与fee_rate至少填写一项， 需保留小数点后两位；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.00&lt;/font&gt;
    // $dto["fix_amt"] = "test";
    // 费率（百分比/%）fix_amt与fee_rate至少填写一项，需保留小数点后两位，取值范围[0.00,100.00]；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.05&lt;/font&gt;
    // $dto["fee_rate"] = "test";
    // 是否交手续费外扣标记
    // $dto["out_fee_flag"] = "";
    // 交易手续费外扣时账户类型
    // $dto["out_fee_acct_type"] = "";
    // 交易手续费外扣汇付ID
    // $dto["out_fee_huifu_id"] = "";
    // 是否允许对私代发
    // $dto["surrogate_private_flag"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getD3d2fe40562e4d858ba382f8643c54af() {
    $dto = array();
    // 大额支付业务模式
    // $dto["business_model"] = "test";
    // 费率（%）开通大额业务时必须填写一种收费方式；大于0,保留2位小数；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.00&lt;/font&gt;
    // $dto["fee_rate"] = "test";
    // 交易手续费（固定/元）开通大额业务时必须填写一种收费方式；大于0,保留2位小数；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：10.00&lt;/font&gt;
    // $dto["fee_fix_amt"] = "test";
    // 功能开关
    // $dto["switch_state"] = "";
    // 大额调账标识申请类型
    // $dto["biz_type"] = "";
    // 是否允许绑卡支付
    // $dto["mer_same_card_recharge_flag"] = "";
    // 是否允许用户入账
    // $dto["allow_user_deposit_flag"] = "";
    // 备付金固定账号模式自动退款
    // $dto["provisions_auto_refund_flag"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getC0d18cb71e8741158cdc27dadc0c3bfd() {
    $dto = array();
    // 大额支付配置列表
    // $dto["large_amt_pay_config_info_list"] = getD3d2fe40562e4d858ba382f8643c54af();
    // 交易手续费外扣huifuId交易手续费外扣时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000108854952&lt;/font&gt;
    // $dto["out_fee_huifu_id"] = "test";
    // 交易手续费外扣账户号交易手续费外扣时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：F00598602&lt;/font&gt;
    // $dto["out_fee_acct_id"] = "test";
    // 银行大额转账单笔额度
    // $dto["large_amt_limit_per_time"] = "test";
    // 银行大额转账单日额度
    // $dto["large_amt_limit_per_day"] = "test";
    // 交易手续费外扣标记
    // $dto["out_fee_flag"] = "";
    // 商户付款方卡类型
    // $dto["mer_payer_card_type"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


