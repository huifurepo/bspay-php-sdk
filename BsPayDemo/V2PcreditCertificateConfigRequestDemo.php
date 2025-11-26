<?php

/**
 * 分期证书配置 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2PcreditCertificateConfigRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2PcreditCertificateConfigRequest;

// 2.组装请求参数
$request = new V2PcreditCertificateConfigRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 开发者的应用ID
$request->setAppId("2019090666961966");
// 证书文件列表
$request->setFileList(getEbe71eceF1a04373A7e1C99bb697b700());

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

function getEbe71eceF1a04373A7e1C99bb697b700() {
    $dto = array();
    // 文件类型
    $dto["file_type"] = "F120";
    // 文件jfileID
    $dto["file_id"] = "57cc7f00-600a-33ab-b614-6221bbf2e529";
    // 文件名称
    $dto["file_name"] = "test420.jpg";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


