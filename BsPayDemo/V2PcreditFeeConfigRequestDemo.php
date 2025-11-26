<?php

/**
 * 商户分期配置 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2PcreditFeeConfigRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2PcreditFeeConfigRequest;

// 2.组装请求参数
$request = new V2PcreditFeeConfigRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());

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
    // 异步通知地址
    $extendInfoMap["async_return_url"]= "http://192.168.85.157:30031/sspm/testVirgo";
    // 花呗分期费率
    $extendInfoMap["hb_fq_fee_list"]= get33058a553e95455aA0255248d770c221();
    // 白条分期配置对象
    // $extendInfoMap["jdbt_data"]= get5c64baa01d644dac8995286b4cffca1b();
    // 银联聚分期配置对象
    // $extendInfoMap["yljfq_data"]= getD940990307634ddcBaafDcdb0dd06c87();
    return $extendInfoMap;
}

function get33058a553e95455aA0255248d770c221() {
    $dto = array();
    // 商户汇付Id
    $dto["huifu_id"] = "6666000003156435";
    // 花呗分期状态
    // $dto["hb_fq_status"] = "";
    // 花呗分期3期开关
    $dto["hb_three_period_switch"] = "Y";
    // 花呗收单分期3期费率（%）
    $dto["hb_three_acq_period"] = "5";
    // 花呗分期3期利率（%）
    $dto["hb_three_period"] = "10";
    // 花呗分期6期开关
    $dto["hb_six_period_switch"] = "Y";
    // 花呗收单分期6期费率（%）
    $dto["hb_six_acq_period"] = "5";
    // 花呗分期6期利率（%）
    $dto["hb_six_period"] = "10";
    // 花呗分期12期开关
    $dto["hb_twelve_period_switch"] = "Y";
    // 花呗收单分期12期费率（%）
    $dto["hb_twelve_acq_period"] = "15";
    // 花呗分期12期利率（%）
    $dto["hb_twelve_period"] = "11";
    // 交易手续费外扣标记
    $dto["out_fee_flag"] = "";
    // 手续费外扣的汇付商户号
    $dto["out_fee_huifu_id"] = "";
    // 花呗分期24期开关
    // $dto["hb_twentyfour_period_switch"] = "";
    // 花呗收单分期24期费率（%）
    // $dto["hb_twentyfour_acq_period"] = "";
    // 花呗分期24期利率（%）
    // $dto["hb_twentyfour_period"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get8e5138faDdb344b6805a94d933246d0d() {
    $dto = array();
    // 支付场景
    // $dto["pay_scene"] = "test";
    // 业务开通标识
    // $dto["open_flag"] = "test";
    // 手续费率(%)
    // $dto["fee_rate"] = "";
    // 手续费扣取方式
    // $dto["fee_rec_type"] = "";
    // 交易手续费扣款标记
    // $dto["fee_flag"] = "";
    // 手续费外扣的汇付商户号
    // $dto["out_fee_huifu_id"] = "";
    // 手续费外扣的汇付账户号
    // $dto["out_fee_acct_id"] = "";
    // 斗拱终端付息方式
    // $dto["discount_model"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get5c64baa01d644dac8995286b4cffca1b() {
    $dto = array();
    // 商户汇付Id
    // $dto["huifu_id"] = "test";
    // 签约人类型
    // $dto["sign_user_type"] = "test";
    // 签约人手机号
    // $dto["mobile_no"] = "test";
    // 挂网协议地址3-挂网协议必填；示例值：https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/dg_gwxy/PaymentServiceAgreement_xxxx.html
    // $dto["agreement_url"] = "test";
    // 京东白条费率数据
    // $dto["jdbt_fee_data"] = get8e5138faDdb344b6805a94d933246d0d();
    // 签约人姓名
    // $dto["name"] = "";
    // 签约人身份证号
    // $dto["cert_no"] = "";
    // 协议类型
    // $dto["agreement_type"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get582500aeD6b3421eAfa3Aacb46bbc89c() {
    $dto = array();
    // 支付场景
    // $dto["pay_scene"] = "test";
    // 业务开通标识
    // $dto["open_flag"] = "test";
    // 贴息模式
    // $dto["discount_model"] = "";
    // 手续费率(%)
    // $dto["fee_rate"] = "";
    // 手续费扣取方式
    // $dto["fee_rec_type"] = "";
    // 交易手续费扣款标记
    // $dto["fee_flag"] = "";
    // 手续费外扣的汇付商户号
    // $dto["out_fee_huifu_id"] = "";
    // 手续费外扣的汇付账户号
    // $dto["out_fee_acct_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get5b3906c269e9412387cf7c5707a32c92() {
    $dto = array();
    // 文件id
    // $dto["file_id"] = "test";
    // 文件类型
    // $dto["file_type"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getD940990307634ddcBaafDcdb0dd06c87() {
    $dto = array();
    // 商户汇付Id
    // $dto["huifu_id"] = "test";
    // 签约人类型
    // $dto["sign_user_type"] = "test";
    // 签约人手机号
    // $dto["mobile_no"] = "test";
    // 银联聚分期费率数据
    // $dto["yljfq_fee_data"] = get582500aeD6b3421eAfa3Aacb46bbc89c();
    // 签约人姓名
    // $dto["name"] = "";
    // 签约人身份证号
    // $dto["cert_no"] = "";
    // 补充业务信息
    // $dto["file_list"] = get5b3906c269e9412387cf7c5707a32c92();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


