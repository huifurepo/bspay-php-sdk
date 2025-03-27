<?php

/**
 * 付款关系提交 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePayrelationApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePayrelationApplyRequest;

// 2.组装请求参数
$request = new V2TradePayrelationApplyRequest();
// 出款方商户号
$request->setOutHuifuId("6666000105253412");
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 付款关系明细
$request->setPayRelations(getA4340f0d9f434de0910eC4522943e67d());

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

function getA4340f0d9f434de0910eC4522943e67d() {
    $dto = array();
    // 入账方商户号
    $dto["in_huifu_id"] = "6666000104558835";
    // 操作类型
    $dto["apply_type"] = "ADD";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


