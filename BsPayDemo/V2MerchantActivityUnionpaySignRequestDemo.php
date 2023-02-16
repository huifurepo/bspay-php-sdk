<?php

/**
 * 银联活动报名 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantActivityUnionpaySignRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantActivityUnionpaySignRequest;

// 2.组装请求参数
$request = new V2MerchantActivityUnionpaySignRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000103391467");
// 活动编号
$request->setActivityId("306530984470249472");
// 银联活动商户号
$request->setMerNo("MH20220707155729AFIIZ");

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
    // 报名补充说明
    $extendInfoMap["remark"]= "报名补充说明";
    // 报名文本材料
    $extendInfoMap["enlist_txt_makings"]= getEnlistTxtMakings();
    // 报名图片材料
    $extendInfoMap["enlist_img_makings"]= getEnlistImgMakings();
    return $extendInfoMap;
}

function getEnlistTxtMakings() {
    $dto = array();
    // 活动材料编号
    $dto["makings_id"] = "17";
    // 活动材料类型
    $dto["makings_type"] = "TXT";
    // 活动材料名称
    $dto["makings_name"] = "银联云闪付商户号";
    // 材料值
    $dto["makings_value"] = "82339SP5411019L";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getEnlistImgMakings() {
    $dto = array();
    // 活动材料编号
    $dto["makings_id"] = "18";
    // 活动材料类型
    $dto["makings_type"] = "IMG";
    // 活动材料名称
    $dto["makings_name"] = "门头照片";
    // 材料值
    $dto["makings_value"] = "42204258-967e-373c-88d2-1afa4c7bb8ef";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


