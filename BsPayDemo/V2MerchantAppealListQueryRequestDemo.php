<?php

/**
 * 申诉单列表查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantAppealListQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantAppealListQueryRequest;

// 2.组装请求参数
$request = new V2MerchantAppealListQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 分页条数
$request->setPageSize("20");
// 申诉创建开始日期
$request->setBeginDate("20240701");
// 申诉创建结束日期
$request->setEndDate("20240731");

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
    // 分页页码
    $extendInfoMap["page_num"]= "1";
    // 协查单号
    $extendInfoMap["assist_id"]= "";
    // 渠道/代理/商户/用户编号
    $extendInfoMap["huifu_id"]= "6666000108285670";
    // 商户名称
    $extendInfoMap["mer_name"]= "";
    // 申诉状态
    $extendInfoMap["appeal_node"]= "";
    // 审核结论
    $extendInfoMap["audit_result"]= "";
    // 运营处理状态
    $extendInfoMap["operation_status"]= "";
    // 汇付处置等级
    $extendInfoMap["handle_degree"]= "";
    return $extendInfoMap;
}


