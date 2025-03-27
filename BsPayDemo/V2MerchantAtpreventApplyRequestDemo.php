<?php

/**
 * 防断链入驻 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantAtpreventApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantAtpreventApplyRequest;

// 2.组装请求参数
$request = new V2MerchantAtpreventApplyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户汇付Id
$request->setHuifuId("6666000108460751");

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
    // 微信开通数
    $extendInfoMap["wx_open_count"]= "0";
    // 支付宝开通数
    $extendInfoMap["ali_open_count"]= "1";
    // 异步通知地址
    $extendInfoMap["async_url"]= "http://service.example.com/to/path";
    return $extendInfoMap;
}


