<?php

/**
 * 扫码交易退款查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
define('BASE_PATH', realpath(__DIR__ . '/../../../'));
require_once BASE_PATH . '/BsPayDemo/loader.php';
require_once BASE_PATH . '/BsPaySdk/request/v4/payment/TradePaymentScanpayRefundQueryRequest.php';

use BsPaySdk\core\Payment;
use BsPaySdk\request\v4\payment\TradePaymentScanpayRefundQueryRequest;

// 2.组装请求参数
$request = new TradePaymentScanpayRefundQueryRequest();
// 商户号
$request->setHuifuId("6666000109133323");
// 退款请求日期
$request->setOrgReqDate("20220925");
// 退款请求流水号
$request->setOrgReqSeqId("202110210012100005");

// 3. 发起API调用
$payment = new Payment();
$result = $payment->refundQuery($request);
$respData = $result->getRspDatas();
if (!$result || $result->isError()) {  //失败处理
    var_dump($result -> getErrorInfo());
} else {    //成功处理
    var_dump($result);
}


