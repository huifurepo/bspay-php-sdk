<?php

/**
 * 代运营佣金代扣查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2LlaWithholdQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2LlaWithholdQueryRequest;

// 2.组装请求参数
$request = new V2LlaWithholdQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 原请求日期
$request->setOrgReqDate("20250819");
// 原请求流水号org_hf_seq_id与org_req_seq_id二选一必填。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665001&lt;/font&gt;
$request->setOrgReqSeqId("3809635455604490214");
// 原全局流水号org_hf_seq_id与org_req_seq_id二选一必填。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00470topo1A221019132207P068ac1362af00000&lt;/font&gt;
$request->setOrgHfSeqId("00470topotA250820133236P510c0a8424900000");
// 代运营汇付id
$request->setAgencyHuifuId("6666000108967194");

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
    return $extendInfoMap;
}


