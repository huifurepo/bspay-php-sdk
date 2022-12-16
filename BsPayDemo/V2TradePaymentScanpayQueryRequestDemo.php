<?php

/**
 * 交易查询接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentScanpayQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentScanpayQueryRequest;

// 2.组装请求参数
$request = new V2TradePaymentScanpayQueryRequest();
// 原机构请求日期
$request->setOrgReqDate("20221107");
// 商户号
$request->setHuifuId("6666000108854952");
// 商户订单号线下POS、扫码机具发起的交易需要提供；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：22577563652260773965&lt;/font&gt;
$request->setMerOrdId("");
// 交易返回的全局流水号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00290TOP1GR210919004230P853ac13262200000&lt;/font&gt;
// $request->setOrgHfSeqId("test");
// 原机构请求流水号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：202110210012100005&lt;/font&gt;
$request->setOrgReqSeqId("");
// 用户账单上的交易订单号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：092021091922001451301445517582&lt;/font&gt;；参见[用户账单说明](https://paas.huifu.com/partners/api/#/czsm/api_czsm_yhzd)
$request->setOutTransId("2022110722001473401435491529");
// 用户账单上的商户订单号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：03232109190255105603561&lt;/font&gt;；参见[用户账单说明](https://paas.huifu.com/partners/api/#/czsm/api_czsm_yhzd)
$request->setPartyOrderId("");

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


