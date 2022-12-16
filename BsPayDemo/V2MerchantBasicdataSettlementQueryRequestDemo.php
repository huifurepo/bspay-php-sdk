<?php

/**
 * 结算记录查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBasicdataSettlementQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantBasicdataSettlementQueryRequest;

// 2.组装请求参数
$request = new V2MerchantBasicdataSettlementQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000111938435");
// 结算开始日期
$request->setBeginDate("20200810");
// 结算结束日期
$request->setEndDate("20200810");
// 分页条数
$request->setPageSize("10");

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
    // 结算方式
    $extendInfoMap["settle_cycle"]= "";
    // 分页页码
    $extendInfoMap["page_num"]= "1";
    // 交易状态
    $extendInfoMap["trans_stat"]= "I";
    // 排序字段
    $extendInfoMap["sort_column"]= "10";
    // 排序顺序
    $extendInfoMap["sort_order"]= "DESC";
    return $extendInfoMap;
}


