<?php

/**
 * 上传短信验证码 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2InvoiceMerVerifycodeUploadRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2InvoiceMerVerifycodeUploadRequest;

// 2.组装请求参数
$request = new V2InvoiceMerVerifycodeUploadRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 开票方汇付ID
$request->setHuifuId("6666000149801800");
// 校验类型
$request->setVerifyType("2");
// 流水号
$request->setSerialNum("S394712806755971072");
// 验证码
$request->setVerifyCode("666666");

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


