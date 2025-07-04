<?php

/**
 * 商户统一进件（页面版） - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantUrlForwardRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantUrlForwardRequest;

// 2.组装请求参数
$request = new V2MerchantUrlForwardRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 渠道商号
$request->setUpperHuifuId("6666000108290240");
// 门店号
$request->setStoreId("store128");

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
    // 手机号
    $extendInfoMap["phone"]= "13917352618";
    // 跳转地址失效时间
    $extendInfoMap["expires"]= "50000";
    // 返回页面URL
    // $extendInfoMap["back_page_url"]= "";
    // 异步接收URL
    // $extendInfoMap["async_receive_url"]= "";
    // 模版编号
    $extendInfoMap["template_id"]= "155625";
    return $extendInfoMap;
}


