<?php

/**
 * 上传电子小票图片 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeElectronReceiptsUploadRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeElectronReceiptsUploadRequest;

// 2.组装请求参数
$request = new V2TradeElectronReceiptsUploadRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 商户汇付Id
$request->setHuifuId("6666000103334211");
// 原请求日期
$request->setOrgReqDate("20230517");
// 原请求流水号原请求流水号、原交易返回的全局流水号至少要送其中一项；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665001&lt;/font&gt;
$request->setOrgReqSeqId("20230517111710E83514");
// 汇付全局流水号原请求流水号、原交易返回的全局流水号至少要送其中一项；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00290TOP1GR210919004230P853ac13262200000&lt;/font&gt;
$request->setOrgHfSeqId("0036000topB230517111710P034c0a8304100000");
// 票据信息
$request->setReceiptData(getReceiptDataRucan());
// 文件名称
$request->setFileName("电子小票1.jpg");
// 图片内容
$request->setImageContent("/9j/4AAQSkZJRgABAQAASABIAUAf//Z……");

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
    return $extendInfoMap;
}

function getMerchantContactInformation() {
    $dto = array();
    // 商户售后咨询电话
    // $dto["consultation_phone_number"] = "";

    return $dto;
}

function getWxReceiptDataRucan() {
    $dto = array();
    // 商户与商家的联系渠道
    $dto["merchant_contact_information"] = getMerchantContactInformation();

    return $dto;
}

function getReceiptDataRucan() {
    $dto = array();
    // 三方通道类型
    $dto["third_channel_type"] = "T";
    // 微信票据信息
    $dto["wx_receipt_data"] = getWxReceiptDataRucan();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


