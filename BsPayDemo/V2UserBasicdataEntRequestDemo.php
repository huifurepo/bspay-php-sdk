<?php

/**
 * 企业用户基本信息开户 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2UserBasicdataEntRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2UserBasicdataEntRequest;

// 2.组装请求参数
$request = new V2UserBasicdataEntRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 企业用户名称
$request->setRegName("企业商户名称8225");
// 经营简称
$request->setShortName("企业商户");
// 营业执照编号
$request->setLicenseCode("20220222013747149");
// 证照有效期类型
$request->setLicenseValidityType("1");
// 证照有效期起始日期
$request->setLicenseBeginDate("20200117");
// 证照有效期结束日期日期格式：yyyyMMdd; 非长期有效时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20320905&lt;/font&gt;
$request->setLicenseEndDate("20400117");
// 注册地址(省)
$request->setRegProvId("310000");
// 注册地址(市)
$request->setRegAreaId("310100");
// 注册地址(区)
$request->setRegDistrictId("310104");
// 注册地址(详细信息)
$request->setRegDetail("上海市宜山路");
// 法人姓名
$request->setLegalName("陈立五");
// 法人证件类型
$request->setLegalCertType("00");
// 法人证件号码
$request->setLegalCertNo("321084198912066582");
// 法人证件有效期类型
$request->setLegalCertValidityType("1");
// 法人证件有效期开始日期
$request->setLegalCertBeginDate("20120801");
// 法人证件有效期截止日期日期格式：yyyyMMdd; 非长期有效时必填，长期有效为空；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20320905&lt;/font&gt;
$request->setLegalCertEndDate("20300801");
// 联系人姓名
$request->setContactName("小的");
// 联系人手机号
$request->setContactMobile("13764462211");

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
    // 联系人电子邮箱
    $extendInfoMap["contact_email"]= "jeff.peng@huifu.com";
    // 管理员账号
    $extendInfoMap["login_name"]= "Lg2022022201374721361";
    // 操作员
    $extendInfoMap["operator_id"]= "";
    // 是否发送短信标识
    $extendInfoMap["sms_send_flag"]= "1";
    // 扩展方字段
    $extendInfoMap["expand_id"]= "";
    // 文件列表
    // $extendInfoMap["file_list"]= getFileList();
    return $extendInfoMap;
}

function getFileList() {
    $dto = array();
    // 文件类型
    // $dto["file_type"] = "test";
    // 文件jfileID
    // $dto["file_id"] = "test";
    // 文件名称
    // $dto["file_name"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


