<?php

/**
 * 银联反扫支付 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
define('BASE_PATH', realpath(__DIR__ . '/../../../../'));
require_once BASE_PATH . '/BsPayDemo/loader.php';
require_once BASE_PATH . '/BsPaySdk/request/v4/payment/TradePaymentCreateRequest.php';
require_once BASE_PATH . '/BsPaySdk/request/v4/AcctInfo.php';
require_once BASE_PATH . '/BsPaySdk/request/v4/UnionpayData.php';
require_once BASE_PATH . '/BsPaySdk/request/v4/AcctSplitBunch.php';
require_once BASE_PATH . '/BsPaySdk/request/v4/TerminalDeviceData.php';

use BsPaySdk\core\Payment;
use BsPaySdk\request\v4\payment\TradePaymentCreateRequest;
use BsPaySdk\request\v4\AcctInfo;
use BsPaySdk\request\v4\AcctSplitBunch;
use BsPaySdk\request\v4\UnionpayData;
use BsPaySdk\request\v4\TerminalDeviceData;

// 2.组装请求参数
$request = new TradePaymentCreateRequest();
// 请求时间
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 交易类型
$request->setTradeType("U_MICROPAY");
// 交易金额
$request->setTransAmt("0.10");
// 商品描述
$request->setGoodsDesc("hibs自动化-通用版验证");
// 备注
$request->setRemark("交易备注");

// 设置异步通知地址
$request->setNotifyUrl("https://www.demoSite.com/api/public/hf/smstorecallback");

// 延迟交易能力 延迟入账标识
$request->setDelayAcctFlag("N");

// 实时分账能力，设置分账信息，需要分账权限
$request->setAcctSplitBunch(buildAcctSplitBunch());

// 设备信息
$request->setTerminalDeviceData(buildTerminalDeviceData());

// 其他交易能力扩展参照实时分账能力

// 银联正扫支付参数
$request->setMethodExpand(getMethodExpand());

// 自定义扩展参数
$extendInfoMap = getExtendInfos();
$request->setExtendInfo($extendInfoMap);

// 3. 发起API调用
$payment = new Payment();
$result = $payment->create($request);
$respData = $result->getRspDatas();
if (!$result || $result->isError()) {  //失败处理
    var_dump($result -> getErrorInfo());
} else {    //成功处理
    var_dump($result);
}

/**
 * 自定义扩展参数
 *
 */
function getExtendInfos() {
    $extendInfoMap = array();
    return $extendInfoMap;
}

/**
 * 银联反扫支付参数
 *
 */
function getMethodExpand() {
    // 服务商信息使用  new PidInfo()

    // 银联反扫支付参数
    $unionpayData = new UnionpayData();
    $unionpayData->setAuthCode("6236171220051893816");

    return Payment::arrayToJsonString($unionpayData);
}

/**
 * 构建分账对象
 *
 */
function buildAcctSplitBunch() {
    // 分账明细
    $infos = array();
     $acctInfo = new AcctInfo();
     $acctInfo->setHuifuId("6666000109133323");
     $acctInfo->setDivAmt("0.10");
     array_push($infos, $acctInfo);

     // 分账对象
     $acctSplitBunch = new AcctSplitBunch();
     $acctSplitBunch->setAcctInfos($infos);

     return Payment::arrayToJsonString($acctSplitBunch);
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


