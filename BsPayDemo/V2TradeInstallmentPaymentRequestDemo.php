<?php

/**
 * 分期支付 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeInstallmentPaymentRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeInstallmentPaymentRequest;

// 2.组装请求参数
$request = new V2TradeInstallmentPaymentRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000100000000");
// 交易金额
$request->setTransAmt("100.00");
// 分期数
$request->setInstallmentNum("3");
// 商品描述
$request->setGoodsDesc("手机");
// 安全信息
$request->setRiskCheckData(getRiskCheckData());
// 京东白条分期信息trans_type&#x3D;JDBT时，必填jsonObject字符串，京东白条分期相关信息通过该参数集上送
$request->setJdbtData(getJdbtData());

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
    // 账户号
    // $extendInfoMap["acct_id"]= "";
    // 交易类型
    // $extendInfoMap["trans_type"]= "";
    // 支付场景
    // $extendInfoMap["pay_scene"]= "";
    // 交易有效期
    $extendInfoMap["time_expire"]= "20241008235959";
    // 手续费扣款标志
    // $extendInfoMap["fee_flag"]= "";
    // 延时标识
    // $extendInfoMap["delay_acct_flag"]= "";
    // 备注
    $extendInfoMap["remark"]= "备注";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://www.baidu.com/onlineAsync";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= getAcctSplitBunch();
    return $extendInfoMap;
}

function getAcctInfosRc() {
    $dto = array();
    // 商户号
    $dto["huifu_id"] = "6666000100000000";
    // 分账金额
    $dto["div_amt"] = "";
    // 分账百分比
    $dto["percentage_div"] = "70.00";
    // 账户号
    $dto["acct_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAcctSplitBunch() {
    $dto = array();
    // 百分比分账标志
    $dto["percentage_flag"] = "Y";
    // 是否净值分账
    $dto["is_clean_split"] = "N";
    // 分账明细
    $dto["acct_infos"] = getAcctInfosRc();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskCheckData() {
    $dto = array();
    // 经度
    $dto["longitude"] = "126.630128";
    // 纬度
    $dto["latitude"] = "126.630128";
    // 基站地址
    $dto["base_station"] = "3";
    // IP地址
    $dto["ip_addr"] = "182.33.21.4";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getJdbtData() {
    $dto = array();
    // 商品数量
    $dto["goods_num"] = "3";
    // 下单来源
    $dto["order_source"] = "微信APP扫一扫";
    // 请求来源类型
    $dto["order_source_type"] = "H5";
    // 同步通知页面
    $dto["callback_url"] = "https://www.baidu.com";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


