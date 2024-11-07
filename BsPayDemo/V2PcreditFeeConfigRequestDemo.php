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
    // 银行分期费率
    $extendInfoMap["bank_fq_list"]= getBankFqList();
    // 花呗分期费率
    $extendInfoMap["hb_fq_fee_list"]= getHbFqFeeList();
    // 白条分期配置对象
    // $extendInfoMap["jdbt_data"]= getJdbtData();
    return $extendInfoMap;
}

function getBankFqFeeList() {
    $dto = array();
    // 银行编号
    $dto["bank_code"] = "01040000";
    // 银行名称
    $dto["bank_name"] = "";
    // 银联收单分期费率（%）
    $dto["bank_acq_period"] = "6";
    // 用户付息费率
    $dto["bank_fee_rate"] = "2";
    // 交易手续费外扣标记
    $dto["out_fee_flag"] = "";
    // 手续费外扣的汇付商户号
    $dto["out_fee_huifu_id"] = "";
    // 银联分期3期开关
    $dto["three_period_switch"] = "Y";
    // 银联分期3期总费率（%）
    $dto["three_period"] = "10";
    // 银联分期6期开关
    $dto["six_period_switch"] = "Y";
    // 银联分期6期总费率（%）
    $dto["six_period"] = "16";
    // 银联分期12期开关
    $dto["twelve_period_switch"] = "Y";
    // 银联分期12期总费率（%）
    $dto["twelve_period"] = "0.0001";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getBankFqList() {
    $dto = array();
    // 银联入网模式
    $dto["ent_way"] = "1";
    // 商户汇付Id
    $dto["huifu_id"] = "6666000003156435";
    // 银行卡分期状态
    $dto["bank_card_fq_status"] = "1";
    // 银行卡分期费率
    $dto["bank_fq_fee_list"] = getBankFqFeeList();
    // 贴息模式
    $dto["fee_model"] = "1";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getHbFqFeeList() {
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

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getJdbtFeeData() {
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

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getJdbtData() {
    $dto = array();
    // 商户汇付Id
    // $dto["huifu_id"] = "test";
    // 签约人类型
    // $dto["sign_user_type"] = "test";
    // 签约人手机号
    // $dto["mobile_no"] = "test";
    // 京东白条费率数据
    // $dto["jdbt_fee_data"] = getJdbtFeeData();
    // 签约人姓名
    // $dto["name"] = "";
    // 签约人身份证号
    // $dto["cert_no"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


