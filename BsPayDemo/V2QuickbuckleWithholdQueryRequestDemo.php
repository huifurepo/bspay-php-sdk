<?php

/**
 * 代扣绑卡查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2QuickbuckleWithholdQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2QuickbuckleWithholdQueryRequest;

// 2.组装请求参数
$request = new V2QuickbuckleWithholdQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 汇付Id
$request->setHuifuId("6666000003078984");
// 客户系统用户id 
$request->setOutCustId("16666000106789536");
// 绑卡订单号
$request->setOrderId("20230525054209765309748");
// 绑卡订单日期
$request->setOrderDate("20230525");

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


