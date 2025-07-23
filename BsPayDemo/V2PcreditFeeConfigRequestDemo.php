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
    $extendInfoMap["bank_fq_list"]= get82eb6e11C8b84028A9b7999d1e243635();
    // 花呗分期费率
    $extendInfoMap["hb_fq_fee_list"]= getF3f2d9dbB869474d9433D4cf46bfc278();
    // 白条分期配置对象
    // $extendInfoMap["jdbt_data"]= getA7c308118f864036B79d041ceb8deee1();
    // 银联聚分期配置对象
    // $extendInfoMap["yljfq_data"]= getB2399be5E5004e3a87f2661458655bde();
    return $extendInfoMap;
}

function get7014a3deD77d423689daEcda59e2f3e9() {
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

function get82eb6e11C8b84028A9b7999d1e243635() {
    $dto = array();
    // 银联入网模式
    $dto["ent_way"] = "1";
    // 商户汇付Id
    $dto["huifu_id"] = "6666000003156435";
    // 银行卡分期状态
    $dto["bank_card_fq_status"] = "1";
    // 银行卡分期费率
    $dto["bank_fq_fee_list"] = get7014a3deD77d423689daEcda59e2f3e9();
    // 贴息模式
    $dto["fee_model"] = "1";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getF3f2d9dbB869474d9433D4cf46bfc278() {
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

function get6f420ef657224a4a831dDd63d6e7e4be() {
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
    return $dtoList;
}

function getA7c308118f864036B79d041ceb8deee1() {
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
    // $dto["jdbt_fee_data"] = get6f420ef657224a4a831dDd63d6e7e4be();
    // 签约人姓名
    // $dto["name"] = "";
    // 签约人身份证号
    // $dto["cert_no"] = "";
    // 协议类型
    // $dto["agreement_type"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getF8d3eb05Cd5b453bB2f5Fafdcdb1b4e3() {
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

function getEc6251de3daf467e83828ace2ce369ae() {
    $dto = array();
    // 文件id
    // $dto["file_id"] = "test";
    // 文件类型
    // $dto["file_type"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getB2399be5E5004e3a87f2661458655bde() {
    $dto = array();
    // 商户汇付Id
    // $dto["huifu_id"] = "test";
    // 签约人类型
    // $dto["sign_user_type"] = "test";
    // 签约人手机号
    // $dto["mobile_no"] = "test";
    // 银联聚分期费率数据
    // $dto["yljfq_fee_data"] = getF8d3eb05Cd5b453bB2f5Fafdcdb1b4e3();
    // 签约人姓名
    // $dto["name"] = "";
    // 签约人身份证号
    // $dto["cert_no"] = "";
    // 补充业务信息
    // $dto["file_list"] = getEc6251de3daf467e83828ace2ce369ae();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


