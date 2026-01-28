<?php

/**
 * 扫码交易退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
define('BASE_PATH', realpath(__DIR__ . '/../../../'));
require_once BASE_PATH . '/BsPayDemo/loader.php';
require_once BASE_PATH . '/BsPaySdk/request/v4/payment/TradePaymentScanpayRefundRequest.php';
require_once BASE_PATH . '/BsPaySdk/request/v4/TerminalDeviceData.php';

use BsPaySdk\core\Payment;
use BsPaySdk\request\v4\payment\TradePaymentScanpayRefundRequest;
use BsPaySdk\request\v4\TerminalDeviceData;

// 2.组装请求参数
$request = new TradePaymentScanpayRefundRequest();
// 请求时间
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 原交易请求日期
$request->setOrgReqDate("20250828");
// 原交易请求流水号
$request->setOrgReqSeqId("20250828154349459562250");
// 申请退款金额
$request->setOrdAmt("0.10");

// 设备信息
$request->setTerminalDeviceData(buildTerminalDeviceData());

// 其他交易能力扩展参照设备信息

// 3. 发起API调用
$payment = new Payment();
$result = $payment->refund($request);
$respData = $result->getRspDatas();
if (!$result || $result->isError()) {  //失败处理
    var_dump($result -> getErrorInfo());
} else {    //成功处理
    var_dump($result);
}

/**
 * 构建设备信息
 *
 */
function buildTerminalDeviceData() {
    $terminalDeviceData = new TerminalDeviceData();
    $terminalDeviceData->setDeviceIp("10.10.0.1");
    $terminalDeviceData->setDevsId("SPINTP357338300264411");
    $terminalDeviceData->setDeviceGps("20.346790,-4.654321");

    return Payment::arrayToJsonString($terminalDeviceData);
}


