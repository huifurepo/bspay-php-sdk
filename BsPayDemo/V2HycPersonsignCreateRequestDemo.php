<?php

/**
 * 个人签约发起 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2HycPersonsignCreateRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2HycPersonsignCreateRequest;

// 2.组装请求参数
$request = new V2HycPersonsignCreateRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 用户汇付id
$request->setHuifuId("6666000145962643");
// 落地公司机构号
$request->setMinorAgentId("L20231113140106443");
// 乐接活请求参数jsonObject格式 合作平台为乐接活时必传
// $request->setLjhData(get994c979bC5cb4a098e051ddeb2fdcf26());

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
    // 合作平台
    // $extendInfoMap["lg_platform_type"]= "";
    // 是否发送签约短信
    $extendInfoMap["send_sms_flag"]= "Y";
    // 签约结果通知地址
    $extendInfoMap["asyn_url"]= "";
    return $extendInfoMap;
}

function get994c979bC5cb4a098e051ddeb2fdcf26() {
    $dto = array();
    // 合同模板id合作平台为乐接活时必填 数字格式
    // $dto["contract_template_id"] = "test";
    // 任务模板id合作平台为乐接活时必填 数字格式
    // $dto["task_template_id"] = "test";
    // 税源地id合作平台为乐接活时必填 数字格式
    // $dto["tax_area_id"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


