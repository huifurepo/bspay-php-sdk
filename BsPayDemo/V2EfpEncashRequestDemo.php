<?php

/**
 * 全渠道资金提现申请 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2EfpEncashRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2EfpEncashRequest;

// 2.组装请求参数
$request = new V2EfpEncashRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户汇付id
$request->setHuifuId("6666000108422302");
// 交易金额.单位:元，2位小数
$request->setCashAmt("0.01");
// 取现卡序列号
$request->setTokenNo("10001933531");

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
    // 原请求流水号
    $extendInfoMap["efp_req_seq_id"]= "20241128164919defaultit687891821";
    // 原请求日期
    $extendInfoMap["efp_req_date"]= "20241128";
    // 备注
    $extendInfoMap["remark"]= "saas取现";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.service.com/getresp";
    return $extendInfoMap;
}


