<?php

/**
 * 支付宝投诉查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantComplaintAliRiskinfoQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantComplaintAliRiskinfoQueryRequest;

// 2.组装请求参数
$request = new V2MerchantComplaintAliRiskinfoQueryRequest();
// 请求汇付流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求汇付时间
$request->setReqDate(date("Ymd"));
// 开始日期
$request->setBeginDate("20221115");
// 结束日期
$request->setEndDate("20221115");

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
    // 分页开始位置
    $extendInfoMap["offset"]= "1";
    // 分页大小
    $extendInfoMap["limit"]= "5";
    // 通道风险类型
    $extendInfoMap["risk_type"]= "";
    // 汇付商户号
    $extendInfoMap["huifu_id"]= "";
    // 支付宝推送流水号
    $extendInfoMap["risk_biz_id"]= "";
    // 是否可申诉
    $extendInfoMap["support_appeal"]= "";
    return $extendInfoMap;
}


