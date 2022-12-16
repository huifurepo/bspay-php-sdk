<?php

/**
 * 银联活动报名进度查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantActivityUnionpaySignStatusRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantActivityUnionpaySignStatusRequest;

// 2.组装请求参数
$request = new V2MerchantActivityUnionpaySignStatusRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000103299185");
// 报名编号与serialNumber二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：521724026796785664&lt;/font&gt;
$request->setEnlistId("521724026796785664");
// 报名请求流水号报名时传递的reqSysId；与enlistId二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：ZDTESTrQ202011054108473959671&lt;/font&gt;
$request->setSerialNumber("ZDTESTrQ202011054108473959671");

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


