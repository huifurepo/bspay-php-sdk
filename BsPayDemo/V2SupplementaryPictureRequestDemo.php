<?php

/**
 * 图片上传 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2SupplementaryPictureRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2SupplementaryPictureRequest;
use CURLFile;

// 2.组装请求参数
$request = new V2SupplementaryPictureRequest();
// 业务请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 业务请求日期
$request->setReqDate(date("Ymd"));
// 图片类型
$request->setFileType("F01");

// 设置非必填字段
$extendInfoMap = getExtendInfos();
$request->setExtendInfo($extendInfoMap);

// 3. 发起API调用
$client = new BsPayClient();
$result = $client->postRequest($request,new CURLFile(dirname(__FILE__)."/api_logo.png","image/png","api_logo.png"));
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
    // 商户号
    $extendInfoMap["huifu_id"]= "6666000103413615";
    return $extendInfoMap;
}


