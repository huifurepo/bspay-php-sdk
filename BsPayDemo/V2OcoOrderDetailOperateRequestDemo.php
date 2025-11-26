<?php

/**
 * 全渠道订单分账明细操作 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2OcoOrderDetailOperateRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2OcoOrderDetailOperateRequest;

// 2.组装请求参数
$request = new V2OcoOrderDetailOperateRequest();
// 请求流水号
// $request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
// $request->setReqDate(date("Ymd"));
// 商户号
// $request->setHuifuId("test");
// 分账数据源
// $request->setBusiSource("test");
// 业务订单号
// $request->setOcoOrderId("test");
// 操作类型
// $request->setOperateType("test");
// 支付方式枚举：BALANCE-余额支付 EFP-全域资金付款；备注：当operate_type&#x3D;SPLIT 立即分账时，pay_type必填，且若为退款，按原交易类型原路返回；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：BALANCE&lt;/font&gt;
// $request->setPayType("test");

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
    // 分账接收方编号
    // $extendInfoMap["in_huifu_id"]= "";
    return $extendInfoMap;
}


