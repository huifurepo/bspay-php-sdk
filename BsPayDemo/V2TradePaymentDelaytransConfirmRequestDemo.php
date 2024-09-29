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
    // 灵活用工平台
    // $extendInfoMap["lg_platform_type"]= "";
    // 代发模式
    // $extendInfoMap["salary_modle_type"]= "";
    // 落地公司商户号
    // $extendInfoMap["bmember_id"]= "";
    // 乐接活请求参数集合
    // $extendInfoMap["ljh_data"]= getLjhData();
    // 异步通知地址
    // $extendInfoMap["notify_url"]= "";
    return $extendInfoMap;
}

function getAcctInfosRucan() {
    $dto = array();
    // 分账金额(元)单位元，需保留小数点后两位，最低传入0.01 ，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.00&lt;/font&gt; ，percentage_flag非Y时必填；&lt;br/&gt;percentage_flag&#x3D;Y时div_amt不填，div_amt&#x3D;total_div_amt*percentage_div
    $dto["div_amt"] = "0.01";
    // 分账接收方ID
    $dto["huifu_id"] = "6666000109133323";
    // 分账百分比%
    // $dto["percentage_div"] = "";
    // 分账接收方账户号
    // $dto["acct_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAcctSplitBunch() {
    $dto = array();
    // 分账总金额（元）本次交易确认总额。需保留小数点后两位&lt;br/&gt;percentage_flag&#x3D;Y时必填。该金额与分账百分比用来计算分账金额。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：10.00&lt;/font&gt;；
    // $dto["total_div_amt"] = "test";
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
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

function getLjhData() {
    $dto = array();
    // 税源地ID
    // $dto["tax_area_id"] = "";
    // 任务模板ID
    // $dto["template_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


