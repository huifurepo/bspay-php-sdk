<?php

/**
 * 余额支付退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeAcctpaymentRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeAcctpaymentRefundRequest;

// 2.组装请求参数
$request = new V2TradeAcctpaymentRefundRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000108854952");
// 原余额支付请求日期
$request->setOrgReqDate("20211021");
// 原余额支付请求流水号org_hf_seq_id和orgReqSeqId二选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665001&lt;/font&gt;
$request->setOrgReqSeqId("202110210012100005");
// 原余额支付支付全局流水号org_hf_seq_id和orgReqSeqId二选一；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00470topo1A211015160805P090ac132fef00000&lt;/font&gt;
$request->setOrgHfSeqId("");
// 退款金额
$request->setOrdAmt("0.01");

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
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= getAcctSplitBunch();
    // 安全信息
    $extendInfoMap["risk_check_data"]= getRiskCheckData();
    // 备注
    $extendInfoMap["remark"]= "1234567890";
    return $extendInfoMap;
}

function getAcctInfos() {
    $dto = array();
    // 退款金额
    // $dto["div_amt"] = "test";
    // 退款方ID
    // $dto["huifu_id"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getAcctSplitBunch() {
    $dto = array();
    // 退账明细
    // $dto["acct_infos"] = getAcctInfos();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskCheckData() {
    $dto = array();
    // 转账原因
    $dto["transfer_type"] = "04";
    // 产品子类
    $dto["sub_product"] = "卡券推广类";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


