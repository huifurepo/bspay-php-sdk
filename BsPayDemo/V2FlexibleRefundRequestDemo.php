<?php

/**
 * 灵工支付退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2FlexibleRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2FlexibleRefundRequest;

// 2.组装请求参数
$request = new V2FlexibleRefundRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 原请求日期
$request->setOrgReqDate("20250617");
// 原灵工支付交易流水号&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665231&lt;/font&gt;
$request->setOrgReqSeqId("20250618710431811test001");
// 原灵工支付汇付全局流水号与原灵工支付交易流水号必选其一&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665001&lt;/font&gt;
$request->setOrgHfSeqId("");
// 发起方商户号
$request->setHuifuId("6666000108903745");
// 支付金额
$request->setOrdAmt("10");

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
    // 备注
    $extendInfoMap["remark"]= "备注11111";
    return $extendInfoMap;
}


