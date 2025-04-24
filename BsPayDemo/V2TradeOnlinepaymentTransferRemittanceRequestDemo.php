<?php

/**
 * 汇付入账通知 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentTransferRemittanceRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentTransferRemittanceRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentTransferRemittanceRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000106521787");
// 交易金额
$request->setTransAmt("1019.00");
// 异步通知地址
$request->setNotifyUrl("http://C_TOPAT_NOTIFY");
// 原汇付通道流水号
$request->setOrgRemittanceOrderId("20230214170030defaultit656505030");
// 商品描述
$request->setGoodsDesc("商品描述001");

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
    // 备注
    $extendInfoMap["remark"]= "标记123";
    return $extendInfoMap;
}


