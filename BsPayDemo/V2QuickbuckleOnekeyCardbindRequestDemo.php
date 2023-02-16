<?php

/**
 * 一键绑卡 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2QuickbuckleOnekeyCardbindRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2QuickbuckleOnekeyCardbindRequest;

// 2.组装请求参数
$request = new V2QuickbuckleOnekeyCardbindRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 汇付Id
$request->setHuifuId("6666000003078984");
// 顾客用户号 
$request->setOutCustId("6666000103633619");
// 银行号
$request->setBankId("01030000");
// 银行卡开户姓名 
$request->setCardName("YTRf65hBDkH9UU1AwG16r4Nlc/X1rH6ejKbvmqT80exJ6whdHI1zB+izBtNBOJfhRNbIOhi1FrRuE5b7wnt/03Q+vwWQQLDGJXWZf92yp+eIRDHg8JdbjOgxKvF2q4Qw5704jbsjQm4UJW5fqRhzRPtnnAL9zzTSgVhuQ0KCwc8=");
// 银行卡绑定身份证
$request->setCertId("gk8zqa+zvIUAvzV3Bjzzw+vRgq2LgTzQI8PRoqUdbeuFMbFZ6LllQpcOhWIz6F82VtFBKzLd5kPOaCwlQCiwsXhSqUFB11zgzKUtVIuiv9lHY/EsjRwqDBhgeR5f2H9FXr3wQ9f7bI7t8ca9o93QxrXr/1MDBq7fGok0xu2ytsM=");
// 银行卡绑定证件类型
$request->setCertType("00");
// 证件有效期到期日长期有效不填.格式：yyyyMMdd。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20311111&lt;/font&gt;
$request->setCertEndDate("20370121");
// 银行卡绑定手机号 
$request->setCardMp("e2zKkJ6PE6UtZhgz42pqgPLQh6p83/WJsG7EVSgYYgN+7MIiCzXnjTpmpv0Cgv7cYTbQTBf/NF5jqeI8BpFjP7C6gg+0cjqW2tgdVxyfqZLu2fEJRth7NgZKgS2ZKbkZ8PNfUk7V+aHbqkAVKY92bdcSQSNIuWaJCeIF34w+l+k=");
// 卡的借贷类型
$request->setDcType("D");
// 异步请求地址
$request->setAsyncReturnUrl("http://192.168.85.157:30031/sspm/testVirgo");
// 设备信息域
$request->setTrxDeviceInf(getTrxDeviceInf());

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
    // 证件有效期类型
    $extendInfoMap["cert_validity_type"]= "0";
    // 证件有效期起始日
    $extendInfoMap["cert_begin_date"]= "20170121";
    // 挂网协议编号
    $extendInfoMap["protocol_no"]= "";
    // 风控信息
    // $extendInfoMap["risk_info"]= getRiskInfo();
    return $extendInfoMap;
}

function getRiskInfo() {
    $dto = array();
    // IP类型
    // $dto["ip_type"] = "test";
    // IP值
    // $dto["source_ip"] = "test";
    // 设备标识
    // $dto["device_id"] = "";
    // 设备类型
    // $dto["device_type"] = "";
    // 应用提供方账户ID
    // $dto["account_id_hash"] = "";
    // 银行预留手机号
    // $dto["mobile"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getTrxDeviceInf() {
    $dto = array();
    // 银行预留手机号
    $dto["trx_mobile_num"] = "15556622368";
    // 设备类型
    $dto["trx_device_type"] = "1";
    // 交易设备IP
    $dto["trx_device_ip"] = "10.10.0.1";
    // 交易设备MAC
    $dto["trx_device_mac"] = "10.10.0.1";
    // 交易设备IMEI
    $dto["trx_device_imei"] = "030147441006000182623";
    // 交易设备IMSI
    $dto["trx_device_imsi"] = "030147441006000182623";
    // 交易设备ICCID
    $dto["trx_device_icc_id"] = "030147441006000182623";
    // 交易设备WIFIMAC
    $dto["trx_device_wfifi_mac"] = "030147441006000182623";
    // 交易设备GPS
    $dto["trx_device_gps"] = "030147441006000182623";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


