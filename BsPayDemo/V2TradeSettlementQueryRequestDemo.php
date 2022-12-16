<?php

/**
 * 出金交易查询接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeSettlementQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeSettlementQueryRequest;

// 2.组装请求参数
$request = new V2TradeSettlementQueryRequest();
// 汇付客户Id
$request->setHuifuId("6666000021290000");
// 原交易请求日期
$request->setOrgReqDate("20210916");
// 原交易返回的全局流水号原交易返回的全局流水号、原交易请求流水号二选一必填；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00470topo1A211015160805P090ac132fef00000&lt;/font&gt;
// $request->setOrgHfSeqId("test");
// 原交易请求流水号原交易返回的全局流水号、原交易请求流水号二选一必填；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：202109167745558220003&lt;/font&gt;
$request->setOrgReqSeqId("202109160899013231200005");

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


