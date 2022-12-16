<?php

/**
 * 微信代发查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeTransWxsurrogateQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeTransWxsurrogateQueryRequest;

// 2.组装请求参数
$request = new V2TradeTransWxsurrogateQueryRequest();
// 商户号
$request->setHuifuId("6666000000041651");
// 原请求流水号原交易请求流水号、原交易返回的全局流水号至少要送其中一项；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665001&lt;/font&gt;
$request->setOrgReqSeqId("20210915121117822015");
// 原交易返回的全局流水号原交易请求流水号、原交易返回的全局流水号至少要送其中一项；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00290TOP1GR210919004230P853ac13262200000 &lt;/font&gt;
$request->setOrgHfSeqId("");
// 原请求日期
$request->setOrgReqDate("20210915");

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


