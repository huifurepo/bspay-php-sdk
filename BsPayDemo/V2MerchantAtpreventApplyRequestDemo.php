<?php

/**
 * 防断链入驻 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantAtpreventApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantAtpreventApplyRequest;

// 2.组装请求参数
$request = new V2MerchantAtpreventApplyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户汇付Id
$request->setHuifuId("6666000108460751");

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
    // 异步通知地址
    $extendInfoMap["async_url"]= "http://service.example.com/to/path";
    // 微信开通明细
    $extendInfoMap["wx_open_list"]= get4ee5a21dCd974031Aaff86bc6a77ad6e();
    // 支付宝开通明细
    $extendInfoMap["ali_open_list"]= getAf3f6e6aB58f47f99761E0107d9733be();
    return $extendInfoMap;
}

function get4ee5a21dCd974031Aaff86bc6a77ad6e() {
    $dto = array();
    // 渠道号
    $dto["pay_channel_id"] = "10000001";
    // 线上开通数
    $dto["online_open_count"] = "1";
    // 线下开通数
    $dto["offline_open_count"] = "1";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAf3f6e6aB58f47f99761E0107d9733be() {
    $dto = array();
    // 渠道号
    $dto["pay_channel_id"] = "10000001";
    // 线上开通数
    $dto["online_open_count"] = "1";
    // 线下开通数
    $dto["offline_open_count"] = "1";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}


