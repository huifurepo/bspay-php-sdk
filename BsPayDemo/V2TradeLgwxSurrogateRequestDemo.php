<?php

/**
 * 灵工微信代发 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeLgwxSurrogateRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeLgwxSurrogateRequest;

// 2.组装请求参数
$request = new V2TradeLgwxSurrogateRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 出款方商户号
$request->setHuifuId("6666000107755175");
// 支付金额(元)
$request->setCashAmt("0.11");
// 代发模式
$request->setSalaryModleType("1");
// 落地公司商户号
$request->setBmemberId("396117173653968220");
// 子商户应用ID
$request->setSubAppid("123213");
// 异步通知地址
$request->setNotifyUrl("virgo://http://www.gangcai.com");
// 分账明细
$request->setAcctSplitBunch(getF1feffe72adf427594625abfeb040860());

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
    // 出款方账户号
    $extendInfoMap["acct_id"]= "C02418374";
    // 合作平台
    // $extendInfoMap["lg_platform_type"]= "";
    return $extendInfoMap;
}

function getF1feffe72adf427594625abfeb040860() {
    $dto = array();
    // 用户号
    $dto["huifu_id"] = "6666000107979716";
    // 分配金额(元)
    $dto["div_amt"] = "0.11";
    // 微信openid
    $dto["sub_openid"] = "13232";
    // 转账备注
    $dto["remark"] = "灵工代发1";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


