<?php

/**
 * 账单退款接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3BillpayOrderPaymentRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3BillpayOrderPaymentRefundRequest;

// 2.组装请求参数
$request = new V3BillpayOrderPaymentRefundRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000108432796");
// 账单编号
$request->setBillNo("BN2026052236198530");
// 退款金额
$request->setRefAmt("100.00");
// 大额转账支付账户信息数据jsonObject格式；银行大额转账支付交易的退款申请,付款方账户类型为对公时必填
$request->setBankInfoData(get39a3f6ccD87e496fB6ac4a9211667d6f());

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
    // 退款原因
    $extendInfoMap["reason"]= "退货";
    // 异步通知地址
    // $extendInfoMap["notify_url"]= "";
    return $extendInfoMap;
}

function get39a3f6ccD87e496fB6ac4a9211667d6f() {
    $dto = array();
    // 省份
    $dto["province"] = "0013";
    // 地区
    $dto["area"] = "1301";
    // 银行编号
    $dto["bank_code"] = "01040000";
    // 联行号
    $dto["correspondent_code"] = "102290026507";
    // 付款方账户类型
    $dto["card_acct_type"] = "E";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


