<?php

/**
 * 全渠道资金付款到账户退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2EfpAcctpaymentRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2EfpAcctpaymentRefundRequest;

// 2.组装请求参数
$request = new V2EfpAcctpaymentRefundRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付商户号
$request->setHuifuId("6666000123123123");
// 原交易全局流水号org_hf_seq_id和org_req_seq_id二选一； &lt;font color&#x3D;&quot;green&quot;&gt;示例值：00470topo1A211015160805P090ac132fef00000&lt;/font&gt;
$request->setOrgHfSeqId("00470topo1A211015160805P090ac132fef00000");
// 原交易请求流水号org_hf_seq_id和org_req_seq_id二选一；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665002&lt;/font&gt;
$request->setOrgReqSeqId("2021091708126665002");
// 原交易请求日期
$request->setOrgReqDate("20221022");
// 退款金额
$request->setRefundAmt("10.00");
// 接收方退款对象
$request->setAcctSplitBunch(get5bf3321f6c604d67Ad10C58a4cce226c());

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
    $extendInfoMap["remark"]= "备注";
    return $extendInfoMap;
}

function getE1cff61a45374e07B6a5Fd58a85a8f13() {
    $dto = array();
    // 退款金额
    $dto["div_amt"] = "1.00";
    // 退款方ID
    $dto["huifu_id"] = "6666000123123123";
    // 退款方账户号
    $dto["acct_id"] = "F00598600";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get5bf3321f6c604d67Ad10C58a4cce226c() {
    $dto = array();
    // 退账明细
    $dto["acct_infos"] = getE1cff61a45374e07B6a5Fd58a85a8f13();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


