<?php

/**
 * 灵工支付 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2FlexibleTradeRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2FlexibleTradeRequest;

// 2.组装请求参数
$request = new V2FlexibleTradeRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 出款方商户号
$request->setOutHuifuId("6666000108903745");
// 交易阶段操作类型
$request->setStageOperationType("FIRST_STAGE");
// 前段交易流水号** 当交易阶段操作类型为02时，该字段必填。填写的是交易阶段操作类型为01时交易已完成的交易全局流水号。 &lt;font color&#x3D;&quot;green&quot;&gt;示例值：20250620112533115566896&lt;/font&gt;
$request->setPhaseHfSeqId("");
// 支付金额
$request->setOrdAmt("20");
// 分账对象
$request->setAcctSplitBunch(get5ff7863bFba14fd185823535ee0a9e52());

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
    // 出款方账户号
    $extendInfoMap["out_acct_id"]= "C03117654";
    // 备注
    $extendInfoMap["remark"]= "";
    return $extendInfoMap;
}

function get875acdbcEff4424dBa4551dffa06d840() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "20.00";
    // 分账接收方ID
    $dto["huifu_id"] = "6666000108898793";
    // 账户号
    $dto["acct_id"] = "C03113649";

    return $dto;
}

function get5ff7863bFba14fd185823535ee0a9e52() {
    $dto = array();
    // 分账明细
    $dto["acct_info"] = get875acdbcEff4424dBa4551dffa06d840();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


