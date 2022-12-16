<?php

/**
 * 卡bin信息查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeCardbinQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeCardbinQueryRequest;

// 2.组装请求参数
$request = new V2TradeCardbinQueryRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 银行卡号密文
$request->setBankCardNoCrypt("b9LE5RccVVLChrHgo9lvpLB1XIyJlEeETa1APmkRQ35z06zJ8zD7cnqypNSnA8iK3uAYVDJtCfrz1Hqu1qTCdu5eVWkjBYaAUtuy1ZD4HkEkqbY9/z5lN4jdDyF8xlzonfxhxzm3OM1fWRoYl39Te+pW71ag0SSbQGu6yhWzFD9mBllbj2RR5fWm9BZVtJTLmitIO/HZfirXkRiCPHBjosQJm2bCrVSuzxqJgqmB9Cp1ADIB+f7fG1/G8RElkJ5zyqhDyinlB5b2+fy3hoyuPqB44GCSLEeOF8V0C9uMNNVor1DwvPRLYleNSw43lW4mFx4PhWhjKrWg2NPfbe0mkQ==");

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


