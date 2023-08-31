<?php

/**
 * 完结支付分订单 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePayscoreServiceorderCompleteRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePayscoreServiceorderCompleteRequest;

// 2.组装请求参数
$request = new V2TradePayscoreServiceorderCompleteRequest();
// 汇付商户号
$request->setHuifuId("6666000108854952");
// 汇付订单号
// $request->setOutOrderNo("test");
// 完结金额
// $request->setOrdAmt("test");
// 服务时间
// $request->setTimeRange(getTimeRange());

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
    // 创建服务订单返回的汇付全局流水号
    // $extendInfoMap["org_hf_seq_id"]= "";
    // 服务订单创建请求流水号
    // $extendInfoMap["org_req_seq_id"]= "";
    // 后付费项目
    // $extendInfoMap["post_payments"]= getPostPayments();
    // 商户优惠
    // $extendInfoMap["post_discounts"]= getPostDiscounts();
    // 服务位置
    // $extendInfoMap["location"]= getLocation();
    // 完结服务时间
    // $extendInfoMap["complete_time"]= "";
    return $extendInfoMap;
}

function getPostPayments() {
    $dto = array();
    // 付费名称
    // $dto["name"] = "";
    // 付费金额
    // $dto["amount"] = "";
    // 付费说明
    // $dto["description"] = "";
    // 付费数量
    // $dto["count"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getPostDiscounts() {
    $dto = array();
    // 优惠名称
    // $dto["name"] = "";
    // 优惠金额
    // $dto["amount"] = "";
    // 优惠说明
    // $dto["description"] = "";
    // 优惠数量
    // $dto["count"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getTimeRange() {
    $dto = array();
    // 服务开始时间
    // $dto["start_time"] = "";
    // 服务结束时间
    // $dto["end_time"] = "";
    // 服务开始时间备注
    // $dto["start_time_remark"] = "";
    // 服务结束时间备注
    // $dto["end_time_remark"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getLocation() {
    $dto = array();
    // 服务开始地点
    // $dto["start_location"] = "";
    // 服务结束地点
    // $dto["end_location"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


