<?php

/**
 * 协议申请列表查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2AgreementApplyListRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2AgreementApplyListRequest;

// 2.组装请求参数
$request = new V2AgreementApplyListRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 汇付商户号
$request->setHuifuId("6666000103334211");
// 协议类型
$request->setAgreementType("ELECT");
// 当前页
$request->setPageNum("1");
// 分页大小
$request->setPageSize("10");

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
    // 协议编号
    $extendInfoMap["agreement_id"]= "202505210201439711";
    // 场景类型
    $extendInfoMap["scene_code"]= "MER_KYC";
    // 协议状态
    $extendInfoMap["sign_status"]= "SIGN_SUCCESS";
    // 申请单号
    $extendInfoMap["order_id"]= "2025052118403054";
    // 商户名称
    // $extendInfoMap["mer_name"]= "";
    // 产品号
    // $extendInfoMap["product_id"]= "";
    return $extendInfoMap;
}


