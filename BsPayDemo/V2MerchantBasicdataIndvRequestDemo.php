<?php

/**
 * 个人商户基本信息入驻 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBasicdataIndvRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantBasicdataIndvRequest;

// 2.组装请求参数
$request = new V2MerchantBasicdataIndvRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 上级主体ID
$request->setUpperHuifuId("6666000107803321");
// 商户名
$request->setRegName("张天德");
// 经营省
$request->setProvId("310000");
// 经营市
$request->setAreaId("310100");
// 经营区
$request->setDistrictId("310105");
// 经营详细地址
$request->setDetailAddr("上海市长宁区定西路1310号");
// 联系人姓名
$request->setContactName("张天德");
// 联系人手机号
$request->setContactMobileNo("13111112222");
// 联系人电子邮箱
$request->setContactEmail("jeff.peng@huifu.com");
// 结算卡信息配置
$request->setCardInfo(getCardInfo());

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
    // 商户简称
    $extendInfoMap["short_name"]= "张天德";
    // 商户短信通知标识
    $extendInfoMap["sms_send_flag"]= "1";
    // 管理员账号
    $extendInfoMap["login_name"]= "tinysword0116";
    // 取现信息配置
    $extendInfoMap["cash_config"]= getCashConfig();
    // 结算规则配置
    $extendInfoMap["settle_config"]= getSettleConfig();
    // 异步通知地址
    $extendInfoMap["async_return_url"]= "http://192.168.85.157:30031/sspm/testVirgo";
    // D1结算协议图片文件
    $extendInfoMap["settle_agree_pic"]= "119bc780-b1c5-3a9c-8b18-f911de6ff28c";
    // 商户主页URL
    // $extendInfoMap["mer_url"]= "";
    // 商户ICP备案编号
    // $extendInfoMap["mer_icp"]= "";
    return $extendInfoMap;
}

function getSettleConfig() {
    $dto = array();
    // 结算周期
    $dto["settle_cycle"] = "D1";
    // 结算手续费外扣商户号结算手续费外扣商户号，填写承担手续费的汇付商户号&lt;br/&gt;当out_settle_flag&#x3D;1时必填，否则非必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123123&lt;/font&gt;
    $dto["out_settle_huifuid"] = "";
    // 起结金额
    $dto["min_amt"] = "1.00";
    // 留存金额
    $dto["remained_amt"] = "2.00";
    // 结算摘要
    $dto["settle_abstract"] = "我这里显示结算摘要";
    // 手续费外扣标记
    $dto["out_settle_flag"] = "2";
    // 结算手续费外扣账户类型
    // $dto["out_settle_acct_type"] = "";
    // 节假日结算手续费率（%）
    $dto["fixed_ratio"] = "5.00";
    // 结算方式
    // $dto["settle_pattern"] = "";
    // 结算批次号
    // $dto["settle_batch_no"] = "";
    // 是否优先到账
    // $dto["is_priority_receipt"] = "";
    // 自定义结算处理时间
    // $dto["settle_time"] = "";
    // 节假日结算手续费固定金额（元）
    // $dto["constant_amt"] = "";
    // 结算卡反面
    // $dto["settle_card_back_pic"] = "";
    // 结算卡正面
    // $dto["settle_card_front_pic"] = "";
    // 法人身份证反面
    // $dto["legal_cert_back_pic"] = "";
    // 法人身份证正面
    // $dto["legal_cert_front_pic"] = "";
    // 授权委托书
    // $dto["auth_enturst_pic"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCardInfo() {
    $dto = array();
    // 卡户名
    $dto["card_name"] = "张天德";
    // 结算账号
    $dto["card_no"] = "4367421217494235081";
    // 银行所在省
    $dto["prov_id"] = "310000";
    // 银行所在市
    $dto["area_id"] = "310100";
    // 持卡人证件类型
    $dto["cert_type"] = "00";
    // 持卡人证件号码
    $dto["cert_no"] = "321084198912066512";
    // 持卡人证件有效期类型
    $dto["cert_validity_type"] = "0";
    // 持卡人证件有效期开始
    $dto["cert_begin_date"] = "20180824";
    // 持卡人证件有效期截止日期日期格式：yyyyMMdd，以北京时间为准。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20220125&lt;br/&gt;当cert_validity_type&#x3D;0时必填  &lt;br/&gt;当cert_validity_type&#x3D;1时为空
    $dto["cert_end_date"] = "20380824";
    // 银行卡绑定手机号
    $dto["mp"] = "13700000214";
    // 银行编号
    $dto["bank_code"] = "01030000";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCashConfig() {
    $dto = array();
    // 取现类型
    $dto["cash_type"] = "D1";
    // 取现固定手续费（元）fix_amt与fee_rate至少填写一项，单位元，需保留小数点后两位，不收费请填写0.00； &lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.00&lt;/font&gt;
    $dto["fix_amt"] = "1.00";
    // 取现手续费率（%）fix_amt与fee_rate至少填写一项，单位%，需保留小数点后两位，取值范围[0.00,100.00]，不收费请填写0.00；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.05&lt;/font&gt;&lt;br/&gt;注：如果fix_amt与fee_rate都填写了则手续费&#x3D;fix_amt+支付金额*fee_rate
    $dto["fee_rate"] = "";
    // 是否交易手续费外扣
    // $dto["out_fee_flag"] = "";
    // 手续费承担方
    // $dto["out_fee_huifu_id"] = "";
    // 交易手续费外扣的账户类型
    // $dto["out_fee_acct_type"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


