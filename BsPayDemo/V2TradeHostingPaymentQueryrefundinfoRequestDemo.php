<?php

/**
 * 托管交易退款查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeHostingPaymentQueryrefundinfoRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeHostingPaymentQueryrefundinfoRequest;

// 2.组装请求参数
$request = new V2TradeHostingPaymentQueryrefundinfoRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000003100616");
// 退款请求日期
$request->setOrgReqDate("20240229");
// 退款全局流水号退款请求流水号/退款全局流水号二选一不能都为空；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0030default220825182711P099ac1f343f00000&lt;/font&gt;
$request->setOrgHfSeqId("");
// 退款请求流水号退款请求流水号/退款全局流水号二选一不能都为空；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：202110210012100005&lt;/font&gt;
$request->setOrgReqSeqId("52022070919803411999411514");

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


