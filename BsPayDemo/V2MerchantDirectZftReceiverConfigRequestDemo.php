<?php

/**
 * 直付通分账关系绑定解绑 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantDirectZftReceiverConfigRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantDirectZftReceiverConfigRequest;

// 2.组装请求参数
$request = new V2MerchantDirectZftReceiverConfigRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付ID
$request->setHuifuId("6666000103886183");
// 开发者的应用ID
$request->setAppId("2021002171607880");
// 分账开关
$request->setSplitFlag("1");
// 分账接收方列表
$request->setZftSplitReceiverList(getZftSplitReceiverList());
// 状态
$request->setStatus("0");

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

function getZftSplitReceiverList() {
    $dto = array();
    // 分账接收方方类型
    $dto["split_type"] = "loginName";
    // 分账接收方账号
    $dto["account"] = "739100190@qq.com";
    // 分账接收方真实姓名新增分账关系时必填。解绑分账关系时非必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：张三&lt;/font&gt;
    $dto["name"] = "邵文";
    // 分账关系描述
    $dto["memo"] = "M20220820032239499098320";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


