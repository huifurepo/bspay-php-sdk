<?php

/**
 * 证书登记 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantDirectCertinfoAddRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantDirectCertinfoAddRequest;

// 2.组装请求参数
$request = new V2MerchantDirectCertinfoAddRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 渠道商汇付Id
$request->setUpperHuifuId("6666000103509367");
// 开通类型
$request->setPayWay("W");
// 开发者的应用ID
$request->setAppId("20220818198665087");
// 文件列表
$request->setFileList(getFileList());

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
    // 商户号
    $extendInfoMap["mch_id"]= "360634064";
    // 证书序列号
    $extendInfoMap["cert_sn"]= "20220818883326714";
    // 服务商密钥
    $extendInfoMap["secret_key"]= "RERE202208182319";
    // 证书类型标记
    $extendInfoMap["cert_flag"]= "";
    return $extendInfoMap;
}

function getFileList() {
    $dto = array();
    // 文件类型
    $dto["file_type"] = "F53";
    // 文件jfileID
    $dto["file_id"] = "9aec5b9e-816f-3ebf-8fe8-4146348ce2b0";
    // 文件名称
    $dto["file_name"] = "证书1202208189390.crt";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


