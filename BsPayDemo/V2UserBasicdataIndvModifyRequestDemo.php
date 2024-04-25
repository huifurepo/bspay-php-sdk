<?php

/**
 * 个人用户基本信息修改 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2UserBasicdataIndvModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2UserBasicdataIndvModifyRequest;

// 2.组装请求参数
$request = new V2UserBasicdataIndvModifyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000103854106");

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
    // 个人证件有效期类型
    $extendInfoMap["cert_validity_type"]= "2";
    // 个人证件有效期开始日期
    $extendInfoMap["cert_begin_date"]= "20200111";
    // 个人证件有效期截止日期
    $extendInfoMap["cert_end_date"]= "20400111";
    // 电子邮箱
    $extendInfoMap["email"]= "jeff.peng@huifu.com";
    // 手机号
    $extendInfoMap["mobile_no"]= "15556622000";
    // 文件列表
    // $extendInfoMap["file_list"]= getFileList();
    // 地址
    // $extendInfoMap["**address**"]= "";
    return $extendInfoMap;
}

function getFileList() {
    $dto = array();
    // 文件类型
    // $dto["file_type"] = "test";
    // 文件jfileID
    // $dto["file_id"] = "test";
    // 文件名称
    // $dto["file_name"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


