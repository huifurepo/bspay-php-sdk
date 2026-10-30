<?php

/**
 * 商户统一进件（页面版） - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantUrlForwardRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantUrlForwardRequest;

// 2.组装请求参数
$request = new V2MerchantUrlForwardRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 渠道商号汇付分配的渠道商号，该商户进件完成后将隶属该渠道商/代理商&lt;br/&gt;sys_id主体为渠道商时填写； &lt;br/&gt;sys_id主体为总部商户时选填；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123123&lt;/font&gt;
$request->setUpperHuifuId("6666000108290240");
// 门店号
$request->setStoreId("store128");
// 上级汇付Id如果head_office_flag&#x3D;0，则字段必填，如果head_office_flag&#x3D;1，上级汇付Id不可传
// $request->setHeadHuifuId("test");

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
    // 手机号
    $extendInfoMap["phone"]= "13917352618";
    // 跳转地址失效时间
    $extendInfoMap["expires"]= "50000";
    // 返回页面URL
    // $extendInfoMap["back_page_url"]= "";
    // 异步接收URL
    // $extendInfoMap["async_receive_url"]= "";
    // 模版编号
    $extendInfoMap["template_id"]= "155625";
    // 商户身份
    // $extendInfoMap["head_office_flag"]= "";
    // 使用上级微信、支付宝商户号发起交易
    // $extendInfoMap["use_chains_flag"]= "";
    // 小微经营类型
    // $extendInfoMap["micro_biz_type"]= "";
    return $extendInfoMap;
}


