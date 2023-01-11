<?php

/**
 * 查询投诉单列表及详情 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantComplaintListInfoQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantComplaintListInfoQueryRequest;

// 2.组装请求参数
$request = new V2MerchantComplaintListInfoQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 开始日期
$request->setBeginDate("2022-10-20");
// 结束日期
$request->setEndDate("2022-10-20");

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
    $extendInfoMap["offset"]= "";
    // 分页大小
    $extendInfoMap["limit"]= "";
    // 被诉的汇付商户ID
    $extendInfoMap["huifu_id"]= "";
    // 被诉的商户名称
    $extendInfoMap["reg_name"]= "";
    // 微信订单号
    $extendInfoMap["transaction_id"]= "";
    // 微信投诉单号
    $extendInfoMap["complaint_id"]= "";
    // 投诉状态
    $extendInfoMap["complaint_state"]= "";
    // 用户投诉次数
    $extendInfoMap["user_complaint_times"]= "";
    // 是否有待回复的用户留言
    $extendInfoMap["incoming_user_response"]= "0";
    return $extendInfoMap;
}


