<?php

/**
 * 微信商户配置 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBusiConfigRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantBusiConfigRequest;

// 2.组装请求参数
$request = new V2MerchantBusiConfigRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000108854952");
// 业务开通类型
$request->setFeeType("02");
// 公众号支付Appid条件必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx3767c5bd01df5061&lt;/font&gt; ；wx_woa_app_id 、wx_woa_path和 wx_applet_app_id三者不能同时为空
$request->setWxWoaAppId("wx3767c5bd01df5061");
// 微信公众号授权目录条件必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：https://paas.huifu.com/shouyintai/demo/h5/&lt;/font&gt;；wx_woa_app_id 、wx_woa_path和 wx_applet_app_id三者不能同时为空
$request->setWxWoaPath("https://paas.huifu.com/shouyin/demo/h5/");
// 微信小程序APPID条件必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：wx8523175fea790f10&lt;/font&gt; ；wx_woa_app_id 、wx_woa_path和 wx_applet_app_id三者不能同时为空
$request->setWxAppletAppId("wx8523175fea790f10");

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
    // 微信公众号APPID对应的秘钥
    $extendInfoMap["wx_woa_secret"]= "64afb60bef3a22ac282aa7880cdaca98";
    // 微信小程序APPID对应的秘钥
    $extendInfoMap["wx_applet_secret"]= "1323a4165a662d6e4f9f51b3f7a58e3f";
    // 渠道号
    $extendInfoMap["bank_channel_no"]= "JQF00001";
    // 异步消息接收地址
    // $extendInfoMap["async_return_url"]= "";
    return $extendInfoMap;
}


