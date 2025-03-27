<?php

/**
 * 钱包绑定手机号验证 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletMobileVerifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletMobileVerifyRequest;

// 2.组装请求参数
$request = new V2WalletMobileVerifyRequest();
// 请求流水号
// $request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
// $request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000107309462");
// 钱包用户ID斗拱系统生成的钱包用户ID。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123122343&lt;/font&gt;&lt;br/&gt;验证类型为2-密码修改和3-密码重置时，必须提供钱包用户的汇付ID。
$request->setUserHuifuId("6666000107355468");
// 用户手机号
$request->setMobileNo("13771817106");
// 验证类型
$request->setType("3");

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


