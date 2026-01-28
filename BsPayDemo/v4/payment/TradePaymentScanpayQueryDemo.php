<?php

/**
 * 扫码交易查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
define('BASE_PATH', realpath(__DIR__ . '/../../../'));
require_once BASE_PATH . '/BsPayDemo/loader.php';
require_once BASE_PATH . '/BsPaySdk/request/v4/payment/TradePaymentScanpayQueryRequest.php';

use BsPaySdk\core\Payment;
use BsPaySdk\request\v4\payment\TradePaymentScanpayQueryRequest;

// 2.组装请求参数
$request = new TradePaymentScanpayQueryRequest();
// 请求时间
$request->setReqDate("20251017");
// 商户号
$request->setHuifuId("6666000109133323");
// 汇付全局流水号
$request->setHfSeqId("002900TOP2A251017152703P414ac139c4a00000");

// 3. 发起API调用
$payment = new Payment();
$result = $payment->query($request);
$respData = $result->getRspDatas();
if (!$result || $result->isError()) {  //失败处理
    var_dump($result -> getErrorInfo());
} else {    //成功处理
    var_dump($result);
}


