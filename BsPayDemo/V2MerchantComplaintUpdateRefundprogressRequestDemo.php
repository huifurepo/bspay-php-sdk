<?php

/**
 * 更新退款审批结果 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantComplaintUpdateRefundprogressRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantComplaintUpdateRefundprogressRequest;

// 2.组装请求参数
$request = new V2MerchantComplaintUpdateRefundprogressRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 投诉单号
$request->setComplaintId("200000020221020220032600930");
// 审批动作
$request->setAction("APPROVE");
// 微信商户号
$request->setMchId("1502074862");

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
    // 预计发起退款时间
    $extendInfoMap["launch_refund_day"]= "";
    // 拒绝退款原因
    $extendInfoMap["reject_reason"]= "";
    // 备注
    $extendInfoMap["remark"]= "我是备注1111101";
    // 文件列表
    $extendInfoMap["file_info"]= get8e7653eaD27d4c589fdd887b957250c4();
    return $extendInfoMap;
}

function get8e7653eaD27d4c589fdd887b957250c4() {
    $dto = array();
    // 拒绝退款的举证图片1
    $dto["reject_media_pic1"] = "a8a096a3-0dd4-3b0e-886c-9afb20d23b1a";
    // 拒绝退款的举证图片2
    $dto["reject_media_pic2"] = "a8a096a3-0dd4-3b0e-886c-9afb20d23b2a";
    // 拒绝退款的举证图片3
    $dto["reject_media_pic3"] = "a8a096a3-0dd4-3b0e-886c-9afb20d23b3a";
    // 拒绝退款的举证图片4
    $dto["reject_media_pic4"] = "a8a096a3-0dd4-3b0e-886c-9afb20d23b4a";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


