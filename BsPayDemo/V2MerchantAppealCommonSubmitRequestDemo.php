<?php

/**
 * 提交申诉 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantAppealCommonSubmitRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantAppealCommonSubmitRequest;

// 2.组装请求参数
$request = new V2MerchantAppealCommonSubmitRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户经营模式
$request->setBusinessPattern("03");
// 协查单号
$request->setAssistId("202407021808060672701923328");
// 申诉单号
$request->setAppealId("202407021808060674786492416");
// 商户类型
$request->setMerType("01");
// 申诉人姓名
$request->setAppealPersonName("张三");
// 申诉人身份证号
$request->setAppealPersonCertNo("41162719213519");
// 申诉人联系电话
$request->setAppealPersonPhoneNo("186234508");
// 法人姓名
$request->setLegalName("张三");
// 法人身份证号
$request->setLegalCertNo("411627199509123");
// 法人联系电话
$request->setLegalPhoneNo("186234502");
// 商户主营业务
$request->setMainBusiness("批发零食饮料");
// 申诉理由
$request->setAppealDesc("因XX申诉");

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
    // 商户营业执照号
    $extendInfoMap["mer_business_license_no"]= "916501042135";
    // app名称
    $extendInfoMap["app_name"]= "app名称";
    // app下载链接
    $extendInfoMap["app_url"]= "XXX";
    // 电商网址
    $extendInfoMap["commerce_url"]= "www.baidu.com";
    // ICP备案号
    $extendInfoMap["icp_record_no"]= "京ICP21003632-7";
    // 实际经营地址
    $extendInfoMap["business_address"]= "实际经营地址";
    // 营业用地性质
    $extendInfoMap["business_location_nature"]= "01";
    // 经营时长
    $extendInfoMap["business_time"]= "09:00:00-21:30:00";
    // 经营地段
    $extendInfoMap["business_location_type"]= "01";
    // 员工人数
    $extendInfoMap["employee_cnt"]= "10";
    // 申诉文件列表
    $extendInfoMap["appeal_file_list"]= getAppealFileList();
    return $extendInfoMap;
}

function getAppealFileList() {
    $dto = array();
    // 申诉文件名称
    $dto["item_name"] = "法人身份证正面";
    // 申诉文件Id
    $dto["file_id"] = "fede0ba8-4994-386c-966a-sd23";
    // 申诉文件类型
    $dto["file_code"] = "F01";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


