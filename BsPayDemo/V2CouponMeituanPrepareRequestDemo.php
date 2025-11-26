<?php

/**
 * 美团卡券校验 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2CouponMeituanPrepareRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2CouponMeituanPrepareRequest;

// 2.组装请求参数
$request = new V2CouponMeituanPrepareRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付商户号
$request->setHuifuId("6666000106057033");
// 团购券码
$request->setCouponCode("5729740654");
// 门店绑定流水号
$request->setBindId("9c2d91f68ba045a998df46ffe35a9ca");

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


