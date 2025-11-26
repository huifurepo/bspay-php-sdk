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
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeElectronReceiptsPictureUploadRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeElectronReceiptsPictureUploadRequest;

// 2.组装请求参数
$request = new V2TradeElectronReceiptsPictureUploadRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000103334211");
// 三方通道类型
$request->setThirdChannelType("T");
// 文件名称
$request->setFileName("1电子小票1.jpg");
// 图片内容
$request->setImageContent("/9j/4AAQSkZJRgABAQAASABIAAD/4QBYRXhpZgC……");

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


