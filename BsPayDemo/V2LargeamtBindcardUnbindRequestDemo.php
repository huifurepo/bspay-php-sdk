<?php

/**
 * 银行大额支付解绑 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2LargeamtBindcardUnbindRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2LargeamtBindcardUnbindRequest;

// 2.组装请求参数
$request = new V2LargeamtBindcardUnbindRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000108312997");
// 银行卡号密文
$request->setCardNo("GCMghaHLsWffNmBl/uuvVnv+kzwvBSLaZR+AsldnabAMzjPUzw4SMe2DX8IvVTM/Qb/tbiQwayeQ+TwkeSyQ0IB6oy/BNgM3rl7wZsdTzKbyigyGQvtOYsauk3IUuiJ8ptJ1k0C4Ysd5Z4+6ApLmOZhAem1pqu+DUk8EpKMj37RDgk3zWgVIf1wX9nBaSN1IGIoVjmweg8/r/UVWqCKoYrEWHxO1R0elZM9+hXTwXEKHFc2L2yossgDGjJDKuykaN0DzVunz1uQbxuvg4lMCmycSRjlQ1MCsIzqs4oiVNW3PCqAwoFkdRKL879e5/EsvohJJNVuX6YOeefFdJOC8Ug==");

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


