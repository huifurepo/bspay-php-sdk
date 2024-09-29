<?php

/**
 * 快捷绑卡确认接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3QuickbuckleConfirmRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3QuickbuckleConfirmRequest;

// 2.组装请求参数
$request = new V3QuickbuckleConfirmRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 汇付商户Id
$request->setHuifuId("6666000109133323");
// 原申请流水号
// $request->setOrgReqSeqId("test");
// 原申请日期
// $request->setOrgReqDate("test");
// 验证码
$request->setVerifyCode("111111");

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


