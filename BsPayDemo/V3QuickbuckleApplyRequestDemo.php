<?php

/**
 * 快捷绑卡申请接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3QuickbuckleApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3QuickbuckleApplyRequest;

// 2.组装请求参数
$request = new V3QuickbuckleApplyRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 汇付客户Id
$request->setHuifuId("6666000107052905");
// 商户用户id
$request->setOutCustId("123456232222222");
// 银行卡号
$request->setCardNo("Wru7xKezRvcZVbrIWEQxkZ3drPPGZXqN46SX4BVNQG95g/oNXVLzZp0dQ9pEi/eE6MMoaK4BUhv7Z/FRzVpacM+vsBYX/FnwQWdRrYm3ziMMdcCG1VFTGhNoYuezROzeFmu5Ol31rp3xy10BZxC/DqRCEIM6JKgzLmx1i3wRYh2XkATzVQ7C/ovdpIERuvEAQuX/aIimWRagUU3agsgiUsd7hu9DkwwfY9eKEAZa5BmM79RWdDj6mOCNIsA05qVEpSe5EBFypZCz8YkoJAiHshlzXOXz0oqTvrNyhsMQuPfnhlcm2i+JDmuja9TlR6xVHBv2MS1v8OdQl8PtBNma/w==");
// 银行卡开户姓名
$request->setCardName("YNPU8HnWVCF0ct7thu3nFXt/5tlJZ0ajvFjlgEpAcc4/fKJMsq9JnC5/z9D8AUHTeVLknENjeceblJ+8rr4liYGNxb6LRhVppsahWZObb1L1l32+beYC6801Yyvb/YSgEPLCTJHJQRy+BPrrKsqAEgql8VueqQvOdHee7iyzlqa76oXZOEmTzzoxeGVl5GTqPz9mwL2s3N7SovTGruGy5KQceFx8QH3SgBxRimbD2i6WY4catrPyXFjElegHRDdq6QLTCgb6nUdj5f5WDsLjQYQ2dGFd+qfESpDpjBw9plKiE7CfQrId0Np9ZD2nWe4HScmyrWyRZgRs8AqmuOnBBA==");
// 银行卡绑定身份证
$request->setCertNo("dldU2hVyr55qKinWJOgGeGDsvKkM01bR5iWgPZwMibKECdawzJo254J1r1KEqJjv3NjN4OhO6PsUSxVDO0w6JlB1Sa6MHJcsAqoeMO5pTQ60SaGaZh31Busf5HxeUqOAiqT5do7uPW+krHe71i6jIIat2pIVaMXmSC6aicE6Ei3Lil0j9n0nDDQP/Jw53pyiTeuUr2p9uh8Hx5Og4Q4kkuhtmUEyiwqiLV6uaJObNvnvx4tr31nZcPRalVkfBWduxmwOZpkcPiEILpKAcCow9nv+c1C/olX6eSE1nvFH6kaRat3Web2tYR/Pmy5emvgZhZDzMzaAN9rnIZn2V15Pog==");
// 个人证件有效期类型
$request->setCertValidityType("1");
// 个人证件有效期起始日
$request->setCertBeginDate("20101201");
// 个人证件有效期到期日长期有效不填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20420905&lt;/font&gt;
$request->setCertEndDate("20301201");
// 银行卡绑定手机号
$request->setMobileNo("LXZKQaNRSxtvuTfjLt/2XUlnd8/Qo+ZWPoGlmJr4uCyQZvjvGM/c91pJtBWoS3Yn7/0GF/pS6W1FR7QcQXCcfifqUBFWuz5Babga7D+LykM3NUrP1d+8T/bMqbkeRpaKwwtCHkOkguHbacOsGGDNaOhkGuRN3GLwMI4ldaSKNbIs9jJmf1ed37jSX2wWCMAWg+D1b743yZIe1RQSrw/S/UMmFEZcAWJjnhlmGh3xFkm7EjXp0e3wCB4t3H7faHcLMBMhY21779XUVitxRm/7B5mlD/ozIDO18Ds754OBM0iRe4NaKdW4Ve/i+UV8dV0nfeSpO5mk0RxHT510ceVW3w==");
// 挂网协议编号授权信息(招行绑卡需要上送)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：34463343&lt;/font&gt;
// $request->setProtocolNo("test");

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
    // CVV2
    $extendInfoMap["cvv2"]= "";
    // 卡有效期
    $extendInfoMap["expiration"]= "";
    // 卡的借贷类型
    $extendInfoMap["dc_type"]= "D";
    // 设备信息域 
    $extendInfoMap["trx_device_inf"]= getTrxDeviceInf();
    // 风控信息
    $extendInfoMap["risk_info"]= getRiskInfo();
    return $extendInfoMap;
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

function getRiskInfo() {
    $dto = array();
    // IP类型
    $dto["ip_type"] = "04";
    // IP值
    $dto["source_ip"] = "192.168.17.01";
    // 设备标识
    $dto["device_id"] = "666666";
    // 设备类型
    $dto["device_type"] = "1";
    // 银行预留手机号
    $dto["mobile"] = "18255906937";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


