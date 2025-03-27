<?php

/**
 * 钱包转账下单 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletTradeTransferRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletTradeTransferRequest;

// 2.组装请求参数
$request = new V2WalletTradeTransferRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000135653240");
// 出款方钱包用户ID
$request->setUserHuifuId("6666000136655020");
// 收款方钱包用户ID
$request->setInUserHuifuId("6666000136655254");
// 订单金额
$request->setTransAmt("0.03");
// 跳转地址
$request->setFrontUrl("http://www.huifu.com/products-services/");

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
    // 密码页面类型
    $extendInfoMap["request_type"]= "M";
    // 备注
    $extendInfoMap["remark"]= "remark11";
    // 商户扩展信息
    $extendInfoMap["mer_priv"]= "mer_priv1";
    // 订单失效时间
    // $extendInfoMap["time_expire"]= "";
    // 异步通知地址
    // $extendInfoMap["notify_url"]= "";
    return $extendInfoMap;
}


