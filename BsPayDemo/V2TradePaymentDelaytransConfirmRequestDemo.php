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
$request->setHuifuId("6666000109133323");
// 交易类型**原交易为快捷支付必填：QUICK_PAY**，&lt;br/&gt;**原交易为余额支付必填：ACCT_PAYMENT**；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：ACCT_PAYMENT&lt;/font&gt;
// $request->setPayType("test");

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
    $extendInfoMap["org_req_date"]= "20220512";
    // 原交易请求流水号
    $extendInfoMap["org_req_seq_id"]= "20220512195832E06521";
    // 原交易商户订单号
    // $extendInfoMap["org_mer_ord_id"]= "";
    // 原交易全局流水号
    $extendInfoMap["org_hf_seq_id"]= "";
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= getAcctSplitBunch();
    // 安全信息
    $extendInfoMap["risk_check_data"]= getRiskCheckData();
    // 备注
    $extendInfoMap["remark"]= "remark123";
    // 灵活用工标志
    // $extendInfoMap["hyc_flag"]= "";
    // 代发模式
    // $extendInfoMap["salary_modle_type"]= "";
    // 落地公司商户号
    // $extendInfoMap["bmember_id"]= "";
    // 灵活用工代发批次号
    // $extendInfoMap["hyc_attach_id"]= "";
    // 异步通知地址
    // $extendInfoMap["notify_url"]= "";
    return $extendInfoMap;
}

function getAcctInfosRucan() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "0.01";
    // 分账接收方ID
    $dto["huifu_id"] = "6666000109133323";
    // 分账接收方账户号
    // $dto["acct_id"] = "";

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
    $dto["base_station"] = "3";
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


