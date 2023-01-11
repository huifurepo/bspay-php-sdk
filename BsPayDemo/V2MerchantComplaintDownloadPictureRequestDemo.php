<?php

/**
 * 图片下载 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantComplaintDownloadPictureRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantComplaintDownloadPictureRequest;

// 2.组装请求参数
$request = new V2MerchantComplaintDownloadPictureRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 下载图片的url
$request->setMediaUrl("https://api.mch.weixin.qq.com/v3/merchant-service/images/ChsyMDAwMDAwMjAyMjEwMTkyMjAwMzI0MjEzODUYACCN78OaBigBMAE4AQ%3D%3D");
// 微信商户号
$request->setMchId("1502074861");

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


