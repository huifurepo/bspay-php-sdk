<?php

/**
 * 个人用户基本信息开户 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2UserBasicdataIndvRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2UserBasicdataIndvRequest;

// 2.组装请求参数
$request = new V2UserBasicdataIndvRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 个人姓名
$request->setName("个人用户名称3657");
// 个人证件类型
$request->setCertType("00");
// 个人证件号码
$request->setCertNo("321084198912066512");
// 个人证件有效期类型
$request->setCertValidityType("1");
// 个人证件有效期开始日期
$request->setCertBeginDate("20200117");
// 个人国籍个人证件类型为外国人居留证时，必填，参见《[国籍编码](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/area/%E5%9B%BD%E7%B1%8D.xlsx)》&lt;font color&#x3D;&quot;green&quot;&gt;示例值：CHN&lt;/font&gt;
// $request->setCertNationality("test");
// 手机号
$request->setMobileNo("13764462205");
// 地址开通中信E管家必填
// $request->setAddress("test");

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
    // 个人证件有效期截止日期
    $extendInfoMap["cert_end_date"]= "20400117";
    // 电子邮箱
    $extendInfoMap["email"]= "jeff.peng@huifu.com";
    // 管理员账号
    $extendInfoMap["login_name"]= "Lg2022022201394910571";
    // 是否发送短信标识
    $extendInfoMap["sms_send_flag"]= "1";
    // 拓展方字段
    $extendInfoMap["expand_id"]= "";
    // 文件列表
    $extendInfoMap["file_list"]= getA2b3ad80C6e54290Ad01D1bd6ad4753b();
    return $extendInfoMap;
}

function getA2b3ad80C6e54290Ad01D1bd6ad4753b() {
    $dto = array();
    // 文件类型
    $dto["file_type"] = "F04";
    // 文件jfileID
    $dto["file_id"] = "2022022201394949297117211";
    // 文件名称
    $dto["file_name"] = "企业营业执照1.jpg";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


