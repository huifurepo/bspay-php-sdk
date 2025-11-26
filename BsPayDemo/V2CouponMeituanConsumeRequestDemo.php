<?php

/**
 * 美团卡券核销 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2CouponMeituanConsumeRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2CouponMeituanConsumeRequest;

// 2.组装请求参数
$request = new V2CouponMeituanConsumeRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付商户号
$request->setHuifuId("6666000106057033");
// 门店绑定流水号
$request->setBindId("9c2d91f68ba045a998df46ffe395a9ca");
// 核销券
$request->setReceiptCodeInfos(get68087d8eDdd149ef940aF4ddd4dffe4c());
// 登录账号
$request->setAppShopAccount("123");
// 登录用户名
$request->setAppShopAccountName("12345");

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
    // 机具id
    // $extendInfoMap["device_id"]= "";
    // 操作人id
    // $extendInfoMap["operator_id"]= "";
    // 操作人姓名
    // $extendInfoMap["operator_name"]= "";
    return $extendInfoMap;
}

function get68087d8eDdd149ef940aF4ddd4dffe4c() {
    $dto = array();
    // 券码
    $dto["receipt_code"] = "5729740654";
    // 核销张数
    $dto["num"] = "1";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


