<?php

/**
 * 代运营佣金代扣退款 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2LlaWithholdRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2LlaWithholdRefundRequest;

// 2.组装请求参数
$request = new V2LlaWithholdRefundRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 原请求日期
$request->setOrgReqDate("20250822");
// 原请求流水号org_hf_seq_id与org_req_seq_id二选一必填。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2021091708126665001&lt;/font&gt;
$request->setOrgReqSeqId("");
// 原全局流水号org_hf_seq_id与org_req_seq_id二选一必填。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00470topo1A221019132207P068ac1362af00000&lt;/font&gt;
$request->setOrgHfSeqId("00470topotB250827093537P979c0a8408100000");
// 代运营汇付id
$request->setAgencyHuifuId("6666000108967194");
// 退款金额
$request->setTransAmt("25.00");
// 设备信息
$request->setTerminalDeviceData(get8f8248504c3e44a38d548e3e9babc215());
// 安全信息
$request->setRiskCheckData(get650b403b46084c5fAd0d014ac712ecc4());

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
    // 备注
    $extendInfoMap["remark"]= "部分退款看看";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    return $extendInfoMap;
}

function get8f8248504c3e44a38d548e3e9babc215() {
    $dto = array();
    // 交易设备类型
    $dto["device_type"] = "4";
    // 交易设备IP
    $dto["device_ip"] = "172.31.11.11";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get650b403b46084c5fAd0d014ac712ecc4() {
    $dto = array();
    // 经度
    // $dto["longitude"] = "";
    // 纬度
    // $dto["latitude"] = "";
    // 基站地址
    // $dto["base_station"] = "";
    // IP地址
    $dto["ip_addr"] = "172.31.11.11";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


