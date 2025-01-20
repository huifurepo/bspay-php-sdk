<?php

/**
 * 企业用户基本信息修改 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2UserBasicdataEntModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2UserBasicdataEntModifyRequest;

// 2.组装请求参数
$request = new V2UserBasicdataEntModifyRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 汇付客户Id
$request->setHuifuId("6666000103862211");
// 法人国籍法人的证件类型为外国人居留证时，必填，参见《[国籍编码](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/area/%E5%9B%BD%E7%B1%8D.xlsx)》&lt;font color&#x3D;&quot;green&quot;&gt;示例值：CHN&lt;/font&gt;
// $request->setLegalCertNationality("test");

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
    // 企业用户名称
    // $extendInfoMap["reg_name"]= "";
    // 经营简称
    $extendInfoMap["short_name"]= "企业商户测试22";
    // 公司类型
    // $extendInfoMap["ent_type"]= "";
    // 法人姓名
    $extendInfoMap["legal_name"]= "陈立一";
    // 法人证件类型
    $extendInfoMap["legal_cert_type"]= "00";
    // 法人证件号码
    $extendInfoMap["legal_cert_no"]= "370684198903061000";
    // 法人证件有效期类型
    $extendInfoMap["legal_cert_validity_type"]= "0";
    // 法人证件有效期开始日期
    $extendInfoMap["legal_cert_begin_date"]= "20121010";
    // 法人证件有效期截止日期
    $extendInfoMap["legal_cert_end_date"]= "20301010";
    // 联系人姓名
    $extendInfoMap["contact_name"]= "花朵";
    // 联系人电子邮箱
    $extendInfoMap["contact_email"]= "chang@huifu.com";
    // 联系人手机号
    $extendInfoMap["contact_mobile"]= "13764462000";
    // 证照有效期类型
    $extendInfoMap["license_validity_type"]= "1";
    // 证照有效期起始日期
    $extendInfoMap["license_begin_date"]= "20200117";
    // 证照有效期结束日期
    $extendInfoMap["license_end_date"]= "20400117";
    // 注册地址(省)
    $extendInfoMap["reg_prov_id"]= "310000";
    // 注册地址(市)
    $extendInfoMap["reg_area_id"]= "310100";
    // 注册地址(区)
    $extendInfoMap["reg_district_id"]= "310104";
    // 注册地址(详细信息)
    $extendInfoMap["reg_detail"]= "上海市宜山路";
    // 文件列表
    $extendInfoMap["file_list"]= getFileList();
    return $extendInfoMap;
}

function getFileList() {
    $dto = array();
    // 文件类型
    $dto["file_type"] = "F01";
    // 文件jfileID
    $dto["file_id"] = "71da066c-5d15-3658-a86d-4e85ee67808a";
    // 文件名称
    $dto["file_name"] = "企业营业执照1.jpg";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


