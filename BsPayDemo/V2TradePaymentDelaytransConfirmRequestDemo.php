<?php

/**
 * 交易确认接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentDelaytransConfirmRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentDelaytransConfirmRequest;

// 2.组装请求参数
$request = new V2TradePaymentDelaytransConfirmRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000103423237");

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
    // 原交易请求日期
    $extendInfoMap["org_req_date"]= "20221108";
    // 原交易请求流水号
    $extendInfoMap["org_req_seq_id"]= "2022072724398620211667900766";
    // 原交易全局流水号
    $extendInfoMap["org_hf_seq_id"]= "";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= getAcctSplitBunch();
    // 安全信息
    $extendInfoMap["risk_check_data"]= getRiskCheckData();
    // 交易类型
    // $extendInfoMap["pay_type"]= "";
    // 备注
    $extendInfoMap["remark"]= "remark123";
    return $extendInfoMap;
}

function getAcctInfosRucan() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "0.01";
    // 被分账方ID
    $dto["huifu_id"] = "6666000103423237";
    // 被分账方账户号
    $dto["acct_id"] = "C01400109";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAcctSplitBunch() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getAcctInfosRucan();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskCheckData() {
    $dto = array();
    // ip地址
    // $dto["ip_addr"] = "";
    // 基站地址
    // $dto["base_atation"] = "";
    // 纬度
    $dto["latitude"] = "2";
    // 经度
    $dto["longitude"] = "1";
    // 产品子类
    // $dto["sub_product"] = "";
    // 转账原因
    // $dto["transfer_type"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


