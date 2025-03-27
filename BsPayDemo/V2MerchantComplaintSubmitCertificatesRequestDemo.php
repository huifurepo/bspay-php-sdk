<?php

/**
 * 支付宝申诉提交凭证 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantComplaintSubmitCertificatesRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantComplaintSubmitCertificatesRequest;

// 2.组装请求参数
$request = new V2MerchantComplaintSubmitCertificatesRequest();
// 请求汇付流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求汇付时间
$request->setReqDate(date("Ymd"));
// 支付宝推送流水号
$request->setRiskBizId("b1e11c97badf1ba025399ee0332d8fb1-ISV");
// 申诉解限的唯一ID
$request->setRelievingId("653739ab36362810b7203b304d6f3883");
// 解限风险类型
$request->setRelieveRiskType("SMID_MERCHANT");
// 提交的凭证数据
$request->setRelieveCertDataList(get28cea73e4b8543ad899a4d2cdd0659ab());

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
    return $extendInfoMap;
}

function get28cea73e4b8543ad899a4d2cdd0659ab() {
    $dto = array();
    // 凭证的唯一ID
    $dto["request_id"] = "1efc8c73afd64fc1b1fc50a834a54be0";
    // 凭证类型
    $dto["type"] = "IMAGE";
    // 凭证code
    $dto["code"] = "904";
    // 凭证的内容
    $dto["info_data"] = "edd2d893-d3c2-342b-9ded-993913effce9";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


