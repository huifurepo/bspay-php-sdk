<?php

/**
 * 发票开具申请查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2InvoiceQueryapplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2InvoiceQueryapplyRequest;

// 2.组装请求参数
$request = new V2InvoiceQueryapplyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 渠道号汇付商户号为空时，必传；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000109812124&lt;/font&gt;
$request->setChannelId("");
// 流水号
$request->setSeqId("SS293178620480778240");

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
    // 汇付商户号
    $extendInfoMap["huifu_id"]= "6666000105874518";
    // 外部商户号
    $extendInfoMap["ext_mer_id"]= "";
    return $extendInfoMap;
}


