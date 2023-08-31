<?php

/**
 * 银行大额转账 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentTransferAccountRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentTransferAccountRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentTransferAccountRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 收款方商户号
$request->setHuifuId("6666000003100616");
// 付款方名称
$request->setCertificateName("沈显龙");
// 付款方银行卡号
$request->setBankCardNo("Xmjm1RB4AAOaFYQ+PgjBlpugXbd8VAYAGB3J2zrbLfC42Bh5xiB47OOV1EdXyGpBq4H8je7mB/MlyEEs6O8PX6aoI4QHumr8VglrLM6uzbVNCIc3S5RPSmi2M+9+EdIQ6nlWd5+XQ7RJXX5Uvnegn74XzQBcN1d4gd04buwKbLpUPV3tWd1qjQwEE8w4gwEtH3L5AP75Mynz+wHFrUKJF3BTiW2/zJlcq5GJomOl06GEW52AZkXwn6U2suP3a0ySd0Rxbf1yQ1lj3SP56NeeEzuBaFLQWB7mEqJfZF3pE9MHNfi6tR1xwLdcxt98bdIqlteKdNAmgfQzcS13UcwH+w==");
// 交易金额
$request->setTransAmt("10.00");
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
    // 收款方用户客户号
    $extendInfoMap["user_huifu_id"]= "6666000103905031";
    // 收款方账户号
    $extendInfoMap["acct_id"]= "A01199826";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.huifu.com/getResp";
    // 备注
    $extendInfoMap["remark"]= "标记123";
    // 订单类型
    // $extendInfoMap["order_type"]= "";
    return $extendInfoMap;
}


