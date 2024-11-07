<?php

/**
 * 终端云MIS交易 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeCloudmisDeviceInformationMisRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeCloudmisDeviceInformationMisRequest;

// 2.组装请求参数
$request = new V2TradeCloudmisDeviceInformationMisRequest();
// 终端设备号
$request->setDeviceId("310000011015000063677");
// 商户号
$request->setHuifuId("6666000141203565");
// 交易信息
$request->setJsonData("{\"transAmount\":\"11\",\"interfaceType\":\"SALE\",\"bgRetUrl\":\"virgo://https://shop.91lpp.com/api/common/huifu/posCallback\",\"thirdOrderId\":\"20240313115926539uf7cqcmwxl30\" }");

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


