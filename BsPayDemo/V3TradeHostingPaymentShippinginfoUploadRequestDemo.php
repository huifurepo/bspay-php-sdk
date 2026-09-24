<?php

/**
 * 发货信息录入 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3TradeHostingPaymentShippinginfoUploadRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3TradeHostingPaymentShippinginfoUploadRequest;

// 2.组装请求参数
$request = new V3TradeHostingPaymentShippinginfoUploadRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000103334211");
// 订单信息
$request->setOrderKey(get7c40df27Fc134b61B0c7Edce6d8f621b());
// 物流模式
$request->setLogisticsType(1);
// 发货模式
$request->setDeliveryMode(1);
// 否已全部发货完成分拆发货模式时必填，用于标识分拆发货模式下是否已全部发货完成，只有全部发货完成的情况下才会向用户推送发货完成通知。&lt;br/&gt;枚举值: true，false&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：true&lt;/font&gt;
// $request->setIsAllDelivered("test");
// 上传时间
$request->setUploadTime("20260831101212");

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
    // 物流信息列表
    $extendInfoMap["shipping_list"]= get12b9768650294e6cAafb18f939d1ae02();
    // 支付者
    $extendInfoMap["payer"]= getD4934e1e62bc4c09B037875617dbf057();
    return $extendInfoMap;
}

function get7c40df27Fc134b61B0c7Edce6d8f621b() {
    $dto = array();
    // 订单单号类型
    $dto["order_number_type"] = 2;
    // 原支付交易对应的微信订单号
    $dto["transaction_id"] = "fake-transid-20221214190427-1";
    // 支付下单商户的商户号
    // $dto["mchid"] = "";
    // 商户系统内部订单号
    // $dto["out_trade_no"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getC48dfa9850104f4c83c360f466f5fb81() {
    $dto = array();
    // 寄件人联系方式
    $dto["consignor_contact"] = "+86-177****1234";
    // 收件人联系方式
    // $dto["receiver_contact"] = "";

    return $dto;
}

function get12b9768650294e6cAafb18f939d1ae02() {
    $dto = array();
    // 商品信息
    $dto["item_desc"] = "微信气泡狗集线器*1";
    // 物流单号
    $dto["tracking_no"] = "fake-trackingno-2022121419042711";
    // 物流公司编码，快递公司ID
    $dto["express_company"] = "STO";
    // 联系方式
    $dto["contact"] = getC48dfa9850104f4c83c360f466f5fb81();

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getD4934e1e62bc4c09B037875617dbf057() {
    $dto = array();
    // 用户标识
    $dto["openid"] = "ogqztkPsejM9MQAFfwCQSCi4oNg3";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


