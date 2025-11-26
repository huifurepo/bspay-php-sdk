<?php

/**
 * 云MIS订单详情查询接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeCloudmisOrderDetailRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeCloudmisOrderDetailRequest;

// 2.组装请求参数
$request = new V2TradeCloudmisOrderDetailRequest();
// 请求流水号
// $request->setReqId("test");
// 原MIS请求的交易订单号
$request->setOrgThirdOrderId("20240313115926539uf7cqcmwxl30");
// 原MIS请求商户号
$request->setOrgHuifuId("6666000141203565");
// 原MIS请求终端号
$request->setOrgDeviceId("310000011015000063677");
// 原MIS请求日期
$request->setOrgReqDate("20240715");

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
    return $extendInfoMap;
}


