<?php

/**
 * 扫码交易关单查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
define('BASE_PATH', realpath(__DIR__ . '/../../../'));
require_once BASE_PATH . '/BsPayDemo/loader.php';
require_once BASE_PATH . '/BsPaySdk/request/v4/payment/TradePaymentScanpayCloseRequest.php';

use BsPaySdk\core\Payment;
use BsPaySdk\request\v4\payment\TradePaymentScanpayCloseRequest;

// 2.组装请求参数
$request = new TradePaymentScanpayCloseRequest();
// 请求时间
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 原交易请求日期
$request->setOrgReqDate("20220905");
// 原交易请求流水号
$request->setOrgReqSeqId("202110210012100005");

// 3. 发起API调用
$payment = new Payment();
$result = $payment->close($request);
$respData = $result->getRspDatas();
if (!$result || $result->isError()) {  //失败处理
    var_dump($result -> getErrorInfo());
} else {    //成功处理
    var_dump($result);
}


