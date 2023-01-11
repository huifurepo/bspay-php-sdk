<?php

/**
 * 微信直连-微信关注配置 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantDirectWechatSubscribeConfigRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantDirectWechatSubscribeConfigRequest;

// 2.组装请求参数
$request = new V2MerchantDirectWechatSubscribeConfigRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付ID
$request->setHuifuId("6666000003099420");
// 开发者的应用ID
$request->setAppId("wx3767c5bd01df5061");
// 商户号
$request->setMchId("1552470931");
// 特约商户号
$request->setSubMchid("10888880");

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
    // 绑定APPID配置
    $extendInfoMap["bind_app_id_conf_list"]= getBindAppIdConfList();
    // 关注配置
    $extendInfoMap["subscribe_conf_list"]= getSubscribeConfList();
    // 支付目录配置
    $extendInfoMap["pay_path_conf_list"]= getPayPathConfList();
    return $extendInfoMap;
}

function getSubscribeConfList() {
    $dto = array();
    // 关联APPID
    $dto["sub_appid"] = "wx5934540532";
    // 推荐关注APPID服务商的公众号APPID；与receipt_appid二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx5934540532&lt;/font&gt;
    $dto["subscribe_appid"] = "oQOa46X2FxRqEy6F4YmwIRCrA7Mk";
    // 支付凭证推荐小程序appid需为通过微信认证的小程序appid，且认证主体与服务商主体一致；与subscribe_appid二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx852a790f100000fe&lt;/font&gt;
    $dto["receipt_appid"] = "wx852a790f100000fe";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBindAppIdConfList() {
    $dto = array();
    // 关联APPID
    $dto["sub_appid"] = "oQOa46X2FxRqEy6F4YmwIRCrA7Mk";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getPayPathConfList() {
    $dto = array();
    // 授权目录
    $dto["jsapi_path"] = "http://www.dsf.com/init";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


