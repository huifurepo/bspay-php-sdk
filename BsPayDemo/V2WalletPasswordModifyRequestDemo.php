<?php

/**
 * 钱包密码修改 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletPasswordModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletPasswordModifyRequest;

// 2.组装请求参数
$request = new V2WalletPasswordModifyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000107309462");
// 钱包用户ID
$request->setUserHuifuId("6666000107355468");
// 手机短信验证码
$request->setVerifyNo("011363");
// 短信验证流水号
$request->setVerifySeqId("WALLET0000000054024907");
// 跳转地址
$request->setFrontUrl("https://www.huifu.com/products-services/");

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
    // 请求失效时间
    $extendInfoMap["time_expired"]= "";
    return $extendInfoMap;
}


