<?php

/**
 * 提现记录查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2LlaDywithdrawQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2LlaDywithdrawQueryRequest;

// 2.组装请求参数
$request = new V2LlaDywithdrawQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 代运营汇付id
$request->setAgencyHuifuId("6666000108967194");
// 商家汇付id
$request->setMerchantHuifuId("6666000108938576");
// 平台
$request->setPlatformType("DYLK");
// 提现发起开始日期
$request->setStartDate("20250820");
// 查询游标
$request->setCursor("0");
// 页大小
$request->setSize("10");

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


