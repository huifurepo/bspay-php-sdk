<?php

/**
 * 微信代发 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeTransWxSurrogateRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeTransWxSurrogateRequest;

// 2.组装请求参数
$request = new V2TradeTransWxSurrogateRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 出账商户号
$request->setOutHuifuId("6666000000041651");
// 代发金额
$request->setTransAmt("9.00");
// 收款用户openid
$request->setOpenId("o-MYE42l80oelYMDE34nYD456Xoy");
// 微信收款用户姓名
$request->setUserName("王大锤");
// 代发备注
$request->setRemark("测试用");

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
    // 账户类型
    $extendInfoMap["out_acct_type"]= "05";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.gangcai.com";
    // 子商户号
    // $extendInfoMap["sub_mch_id"]= "";
    // 子商户应用Id
    // $extendInfoMap["sub_app_id"]= "";
    return $extendInfoMap;
}


