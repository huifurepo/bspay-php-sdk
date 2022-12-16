<?php

/**
 * 新增终端报备 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TerminaldeviceDeviceinfoAddRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TerminaldeviceDeviceinfoAddRequest;

// 2.组装请求参数
$request = new V2TerminaldeviceDeviceinfoAddRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000104575213");

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
    // 终端信息
    $extendInfoMap["terminal_info_list"]= getTerminalInfoList();
    return $extendInfoMap;
}

function getTerminalInfoList() {
    $dto = array();
    // 终端硬件序列号
    $dto["sn"] = "433333";
    // 终端21号文编号
    $dto["tusn"] = "J434445679";
    // 终端型号代号
    $dto["dev_model_code"] = "01";
    // 终端布放地址
    $dto["terminal_address"] = "上海额的发";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


