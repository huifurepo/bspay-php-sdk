<?php

/**
 * 代扣绑卡申请 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2QuickbuckleWithholdApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2QuickbuckleWithholdApplyRequest;

// 2.组装请求参数
$request = new V2QuickbuckleWithholdApplyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 汇付Id
$request->setHuifuId("6666000003078984");
// 返回地址
$request->setReturnUrl("http://www.huifu1234.com/");
// 用户id
$request->setOutCustId("16666000106789536");
// 绑卡订单号
$request->setOrderId("20230525081932677893621");
// 绑卡订单日期
$request->setOrderDate("20230525");
// 银行卡号
$request->setCardId("ZSSW+34A2soLbwLQ5SkZJO4Azy6BknTGkk6EYDTbGA+G0v+zcF3TnU4iYH171KB4ReLjJlY+hSy8MvgVbAx7dL9V7LvLFJd8RE+Lp6XKiIbVUCA1wd2Otp2jI2D32z5gUFqUbB4clRZyRyltXV3xmAWH4fLZDER3H+QwC0/UNF4=");
// 银行卡开户姓名
$request->setCardName("H12ShtAyV4I4sOQqbISH4eMQUcmzpYOHggxRcXhxNoForh5qLyFgDrsSTn0nnepnPO8okfZYSWQlWIBzsRyyHYwAk94s2sO2Sz/6q4Jg2xDieeGDGrnrAphc8/OAN2OK8dMdbQzL12MvPQU/GX148MCxJzGvvdRFqTEPRLOLXTs=");
// 银行卡绑定证件类型
$request->setCertType("00");
// 银行卡绑定身份证
$request->setCertId("FviSPp2Xv6QYfRSYRZcouGAz4BvfZRS9nFKI/7daIUtn4JmBVMTDtrqKLCWeoY7WP4hQAz3rptjOe8WsuynRG3kQhBsXZB0v6e1X1+POD5FXVojquKQb1BF5tKlaOqTj/+G62URC3SWui26JzQQmjGhCORXXHFD7PPNJKusYhHI=");
// 银行卡绑定手机号
$request->setCardMp("GmMLD+v2Mfc/vr9HOVFKOon3Dl4Q9cjze21X902G8Dnl2/2rpH8wpJUnufoYnI0nR9D2XkOm0ApOJL3ShiZxgLvnTaKrTDjRdrBJexhXbbhbfDx/2x+ZULvZHOEjzRI21tK2WKUzxDhX/lw/iXMjslKNVYlQ7as/aH5bLipf12g=");
// 个人证件有效期类型
$request->setCertValidityType("0");
// 个人证件有效期起始日
$request->setCertBeginDate("20140504");
// 卡的借贷类型
// $request->setDcType("test");

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
    // 页面有效期
    $extendInfoMap["expire_time"]= "15";
    // CVV2
    $extendInfoMap["vip_code"]= "HOVFKOon3Dl4Q9cjze21X902G8Dnl2LvLFJd8RE+Lp6XKiIbVUCA1wd2Otp2jI2D32z5gUFqUbB4clRZyRyltXV3xmAWH4fLZDER3H+YwAk94s2sO2Sz/6q4Jg2xDieesO2Sz/6q4Jg2xDieeGDGbQzL12MvPQU/GX14xJzGvvd=";
    // 卡有效期
    $extendInfoMap["expiration"]= "IUtn4JmBVMTDtrqKLCWeoY7WP4hQAz3rptjOe8WsuySW+34SkZJO4Azy6BknTGkk6EA2soLbwLQ5SkZJO4Azy6BknTGkk6EX902G8Dnl2/2rpH8wpJUnufoYnI0nR9YDTbGA+G0v+ApOJL3ShiZxgLvnTaKrnU4iYH171KB4=";
    // 个人证件有效期到期日
    $extendInfoMap["cert_end_date"]= "20260504";
    // 设备信息域
    $extendInfoMap["trx_device_info"]= getB56bfbeeE390414999542cc647b3ed9a();
    // 风控信息
    $extendInfoMap["risk_info"]= getF494b2e9E5cf4fe592d8Fa81cc893071();
    // 代扣绑卡类型
    // $extendInfoMap["binding_card_type"]= "";
    return $extendInfoMap;
}

function getB56bfbeeE390414999542cc647b3ed9a() {
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

    return $dto;
}

function getF494b2e9E5cf4fe592d8Fa81cc893071() {
    $dto = array();
    // IP类型
    $dto["ip_type"] = "04";
    // IP值
    $dto["source_ip"] = "192.168.1.2";
    // 设备标识
    $dto["device_id"] = "123";
    // 设备类型
    $dto["device_type"] = "1";
    // 银行预留手机号
    $dto["mobile"] = "13778787106";
    // 协议编号
    // $dto["agreement_no"] = "";
    // 协议地址
    // $dto["agreement_url"] = "";

    return $dto;
}


