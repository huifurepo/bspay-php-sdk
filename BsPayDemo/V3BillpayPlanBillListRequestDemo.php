<?php

/**
 * 查询账单计划下已生成账单数据 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3BillpayPlanBillListRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3BillpayPlanBillListRequest;

// 2.组装请求参数
$request = new V3BillpayPlanBillListRequest();
// 客户请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 客户请求日期
$request->setReqDate(date("Ymd"));
// 汇付商户号
$request->setHuifuId("6666000123123123");
// 账单计划编号
$request->setPlanNo("BP202412270001");
// 页码
$request->setPageNum("1");

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


