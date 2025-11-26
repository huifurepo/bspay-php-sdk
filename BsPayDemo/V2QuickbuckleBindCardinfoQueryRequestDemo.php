<?php

/**
 * 一键绑卡-工行卡号查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2QuickbuckleBindCardinfoQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2QuickbuckleBindCardinfoQueryRequest;

// 2.组装请求参数
$request = new V2QuickbuckleBindCardinfoQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 汇付Id
$request->setHuifuId("6666000003078984");
// 产品Id
// $request->setProductId("test");
// 银行卡开户姓名
$request->setCardName("YTRf65hBDkH9UU1AwG16r4Nlc/X1rH6ejKbvmqT80exJ6whdHI1zB+izBtNBOJfhRNbIOhi1FrRuE5b7wnt/03Q+vwWQQLDGJXWZf92yp+eIRDHg8JdbjOgxKvF2q4Qw5704jbsjQm4UJW5fqRhzRPtnnAL9zzTSgVhuQ0KCwc8=");
// 身份证类型
$request->setCertType("00");
// 银行卡绑定身份证
// $request->setCertNo("test");
// 银行卡绑定手机号
// $request->setCardMobile("test");
// 回调地址
// $request->setNotifyUrl("test");

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


