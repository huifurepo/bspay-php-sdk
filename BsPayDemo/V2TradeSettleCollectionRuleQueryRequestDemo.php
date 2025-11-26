<?php

/**
 * 归集配置查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeSettleCollectionRuleQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeSettleCollectionRuleQueryRequest;

// 2.组装请求参数
$request = new V2TradeSettleCollectionRuleQueryRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 转出方商户号转出方商户号和转入方商户号二选一必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123124&lt;/font&gt;
$request->setOutHuifuId("6666000152758213");
// 转入方商户号转出方商户号和转入方商户号二选一必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123124&lt;/font&gt;
$request->setInHuifuId("6666000143571659");

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
    // 分页页码
    $extendInfoMap["page_num"]= "1";
    // 分页条数
    $extendInfoMap["page_size"]= "50";
    return $extendInfoMap;
}


