<?php

/**
 * 微信直连-修改微信结算帐号 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantDirectWechatSettlementinfoModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantDirectWechatSettlementinfoModifyRequest;

// 2.组装请求参数
$request = new V2MerchantDirectWechatSettlementinfoModifyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付ID
$request->setHuifuId("6666000003098550");
// 开发者的应用ID
$request->setAppId("wxd2da4051c9e32b86");
// 微信商户号
$request->setMchId("1552470931");
// 特约商户号
$request->setSubMchid("10888880");
// 账户类型
$request->setAccountType("ACCOUNT_TYPE_BUSINESS");
// 开户银行
$request->setAccountBank("农业银行");
// 开户银行省市编码
$request->setBankAddressCode("310100");
// 银行账号
$request->setAccountNumber("6235012141000002900");

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
    // 开户银行全称（含支行）
    $extendInfoMap["bank_name"]= "中国农业银行股份有限公司上海马当路支行";
    // 开户银行联行号
    $extendInfoMap["bank_branch_id"]= "103290040169";
    return $extendInfoMap;
}


