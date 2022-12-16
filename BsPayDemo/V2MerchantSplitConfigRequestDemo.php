<?php

/**
 * 商户分账配置 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantSplitConfigRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantSplitConfigRequest;

// 2.组装请求参数
$request = new V2MerchantSplitConfigRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 商户汇付Id
$request->setHuifuId("6666000105582434");
// 分账规则来源
$request->setRuleOrigin("02");
// 分账是否支持撤销交易
$request->setRepealFlag("Y");
// 分账是否支持退货交易
$request->setRefundFlag("Y");
// 分账开关
$request->setDivFlag("Y");
// 最大分账比例
$request->setApplyRatio("100");
// 生效类型
$request->setStartType("0");

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
    // 分账明细
    $extendInfoMap["acct_split_bunch_list"]= getAcctSplitBunchList();
    // 交易手续费外扣开关
    $extendInfoMap["out_fee_flag"]= "1";
    // 交易手续费外扣时的账户类型
    $extendInfoMap["out_fee_acct_type"]= "01";
    // 交易手续费外扣汇付ID
    $extendInfoMap["out_fee_huifuid"]= "6666000105582434";
    // 固定手续费
    $extendInfoMap["split_fee_rate"]= "10.89";
    // 百分比手续费
    $extendInfoMap["per_amt"]= "99";
    // 异步地址
    $extendInfoMap["async_return_url"]= "http://192.168.85.157:30031/sspm/testVirgo";
    return $extendInfoMap;
}

function getAcctSplitBunchList() {
    $dto = array();
    // 分账比例
    $dto["fee_rate"] = "100";
    // 汇付Id
    $dto["huifu_id"] = "6666000105582434";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


