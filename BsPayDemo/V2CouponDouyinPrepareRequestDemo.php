<?php

/**
 * 抖音卡券校验 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2CouponDouyinPrepareRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2CouponDouyinPrepareRequest;

// 2.组装请求参数
$request = new V2CouponDouyinPrepareRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付商户号
$request->setHuifuId("6666000107767088");
// 门店绑定流水号
$request->setBindId("88fd7c9b63e84a259dfe3eecb811fce8");

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
    // 抖音团购券码
    $extendInfoMap["coupon_code"]= "5729740654";
    // 从二维码解析出来的标识（传参前需要先进行URL编码，注意不要有空格)
    // $extendInfoMap["encrypted_data"]= "";
    return $extendInfoMap;
}


