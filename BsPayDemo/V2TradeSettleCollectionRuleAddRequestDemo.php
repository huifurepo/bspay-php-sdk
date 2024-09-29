<?php

/**
 * 新增归集配置 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeSettleCollectionRuleAddRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeSettleCollectionRuleAddRequest;

// 2.组装请求参数
$request = new V2TradeSettleCollectionRuleAddRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 转入方商户号
$request->setInHuifuId("6666000143571659");
// 转出方商户号
$request->setOutHuifuId("6666000152758213");
// 签约人手机号协议类型为电子协议时必填，必须为法人手机号。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：13911111111&lt;/font&gt;
$request->setSignUserMobileNo("");
// 协议文件Id协议类型为纸质协议时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;
$request->setFileId("f80a4c17-d7c5-3e31-9e70-daf2bd6be29e");

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
    // 转入方账户号
    $extendInfoMap["in_acct_id"]= "";
    // 转出方账户号
    $extendInfoMap["out_acct_id"]= "";
    // 转出方账户留存金额
    $extendInfoMap["remained_amt"]= "1.01";
    // 协议类型
    $extendInfoMap["agreement_type"]= "1";
    // 异步消息接收地址
    $extendInfoMap["async_return_url"]= "http://service.testexample.com/to/path";
    return $extendInfoMap;
}


