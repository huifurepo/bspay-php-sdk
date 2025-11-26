<?php

/**
 * 回复用户 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantComplaintReplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantComplaintReplyRequest;

// 2.组装请求参数
$request = new V2MerchantComplaintReplyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 微信投诉单号
$request->setComplaintId("200000020221020220032603511");
// 被诉商户微信号
$request->setComplaintedMchid("535295270");
// 回复内容
$request->setResponseContent("该问题请联系商家处理，谢谢。");
// 微信商户号
$request->setMchId("1502073961");

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
    // 文件列表
    // $extendInfoMap["file_info"]= get42b0f39dAdb944a8B720B6b3a55f3c41();
    // 跳转链接
    $extendInfoMap["jump_url"]= "";
    // 跳转链接文案
    $extendInfoMap["jump_url_text"]= "";
    return $extendInfoMap;
}

function get42b0f39dAdb944a8B720B6b3a55f3c41() {
    $dto = array();
    // 回复图片1
    // $dto["response_pic1"] = "";
    // 回复图片2
    // $dto["response_pic2"] = "";
    // 回复图片3
    // $dto["response_pic3"] = "";
    // 回复图片4
    // $dto["response_pic4"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


