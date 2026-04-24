<?php

/**
 * 线上交易退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentRefundRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentRefundRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 退款金额
$request->setOrdAmt("0.01");
// 设备信息条件必填，当为银行大额支付时可不填，jsonObject格式
$request->setTerminalDeviceData(get3ba8cd4255da4c76A5a60100bb3040ff());
// 安全信息条件必填，当为银行大额支付时可不填，jsonObject格式
$request->setRiskCheckData(get6a7f1ffdEf724ff0A6765874e1e91420());

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
    // 原交易请求日期
    $extendInfoMap["org_req_date"]= "20240401";
    // 原交易全局流水号
    $extendInfoMap["org_hf_seq_id"]= "";
    // 原交易请求流水号
    $extendInfoMap["org_req_seq_id"]= "295700155481522176";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= get7f63f0d677364d0eB8649895a46917a5();
    // 备注
    // $extendInfoMap["remark"]= "";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    // 补贴支付信息
    // $extendInfoMap["combinedpay_data"]= get87e4d75491d645cf979c17fe801e6149();
    // 大额转账支付账户信息数据
    // $extendInfoMap["bank_info_data"]= get74759bdbA37549d1B0ee19208bf9bfa9();
    // 是否垫资
    // $extendInfoMap["loan_flag"]= "";
    // 垫资承担者
    // $extendInfoMap["loan_undertaker"]= "";
    // 垫资账户类型
    // $extendInfoMap["loan_acct_type"]= "";
    return $extendInfoMap;
}

function get64dd7d8a7c1a4f868adeF0c135e59ab8() {
    $dto = array();
    // 商户号
    // $dto["huifu_id"] = "test";
    // 支付金额
    // $dto["div_amt"] = "";
    // 账户号
    // $dto["acct_id"] = "";
    // 垫资金额
    // $dto["part_loan_amt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get7f63f0d677364d0eB8649895a46917a5() {
    $dto = array();
    // 分账信息列表
    // $dto["acct_infos"] = get64dd7d8a7c1a4f868adeF0c135e59ab8();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get3ba8cd4255da4c76A5a60100bb3040ff() {
    $dto = array();
    // 交易设备ip
    $dto["device_ip"] = "172.31.31.145";
    // 设备类型
    $dto["device_type"] = "1";
    // 交易设备gps
    $dto["device_gps"] = "07";
    // 交易设备iccid
    $dto["device_icc_id"] = "05";
    // 交易设备imei
    $dto["device_imei"] = "02";
    // 交易设备imsi
    $dto["device_imsi"] = "03";
    // 交易设备mac
    $dto["device_mac"] = "01";
    // 交易设备wifimac
    $dto["device_wifi_mac"] = "06";
    // 终端设备号
    // $dto["device_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get6a7f1ffdEf724ff0A6765874e1e91420() {
    $dto = array();
    // 经度
    // $dto["longitude"] = "test";
    // 纬度
    // $dto["latitude"] = "test";
    // 基站地址
    // $dto["base_station"] = "test";
    // ip地址
    $dto["ip_addr"] = "172.1.1.1";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get87e4d75491d645cf979c17fe801e6149() {
    $dto = array();
    // 补贴方汇付编号
    // $dto["huifu_id"] = "test";
    // 补贴方类型
    // $dto["user_type"] = "test";
    // 补贴方账户号
    // $dto["acct_id"] = "test";
    // 补贴金额
    // $dto["amount"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get74759bdbA37549d1B0ee19208bf9bfa9() {
    $dto = array();
    // 银行编号
    // $dto["bank_code"] = "test";
    // 付款方账户类型
    // $dto["card_acct_type"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


