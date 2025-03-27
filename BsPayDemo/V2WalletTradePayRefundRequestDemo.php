<?php

/**
 * 钱包支付退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletTradePayRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletTradePayRefundRequest;

// 2.组装请求参数
$request = new V2WalletTradePayRefundRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000135653240");
// 钱包用户ID
$request->setUserHuifuId("6666000136655020");
// 退款金额
$request->setTransAmt("0.02");
// 原交易请求日期
// $request->setOrgReqDate("test");

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
    // 原交易请求流水号
    // $extendInfoMap["org_req_seq_id"]= "";
    // 原交易全局流水号
    // $extendInfoMap["org_hf_seq_id"]= "";
    // 备注
    $extendInfoMap["remark"]= "remark11";
    // 商户扩展信息
    // $extendInfoMap["mer_priv"]= "";
    return $extendInfoMap;
}


