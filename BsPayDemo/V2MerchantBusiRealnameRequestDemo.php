<?php

/**
 * 微信实名认证 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBusiRealnameRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantBusiRealnameRequest;

// 2.组装请求参数
$request = new V2MerchantBusiRealnameRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付ID
$request->setHuifuId("6666000104854510");
// 联系人姓名
$request->setName("小枫");
// 联系人手机号
$request->setMobile("17521205027");
// 联系人身份证号码
$request->setIdCardNumber("130224198806083798");
// 联系人类型
$request->setContactType("SUPER");

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
    // 子渠道号
    $extendInfoMap["pay_channel_id"]= "JP00001";
    // 支付场景
    $extendInfoMap["pay_scene"]= "01";
    // 经营者/法人是否为受益人
    $extendInfoMap["owner"]= "N";
    // 法人证件居住地址
    $extendInfoMap["identification_address"]= "上海市徐汇区宜山路789号789室";
    // 受益人信息
    $extendInfoMap["ubo_info_list"]= getUboInfoList();
    // 联系人证件类型
    $extendInfoMap["contact_id_doc_type"]= "01";
    // 联系人证件有效期开始时间
    $extendInfoMap["contact_period_begin"]= "1990-03-07";
    // 联系人证件有效期结束时间
    $extendInfoMap["contact_period_end"]= "长期";
    // 证书类型
    $extendInfoMap["cert_type"]= "CERTIFICATE_TYPE_2389";
    // 证书编号
    $extendInfoMap["cert_number"]= "1234567892";
    // 证书照片
    $extendInfoMap["cert_copy"]= "";
    // 小微经营类型
    $extendInfoMap["micro_biz_type"]= "";
    // 门店名称
    $extendInfoMap["store_name"]= "";
    // 门店门头照片
    $extendInfoMap["store_header_copy"]= "";
    // 店内环境照片
    $extendInfoMap["store_indoor_copy"]= "";
    // 门店省市编码
    $extendInfoMap["store_address_code"]= "";
    // 门店地址
    $extendInfoMap["store_address"]= "";
    // 身份证件人像面
    $extendInfoMap["identification_front_copy"]= "c7faf0e6-39e9-3c35-9075-2312ad6f4ea4";
    // 身份证件国徽面
    $extendInfoMap["identification_back_copy"]= "c7faf0e6-39e9-3c35-9075-2312ad6f4ea4";
    // 单位证明函照片
    $extendInfoMap["company_prove_copy"]= "";
    // 是否金融机构
    $extendInfoMap["finance_institution_flag"]= "N";
    // 金融机构类型
    $extendInfoMap["finance_type"]= "";
    // 特殊行业Id
    $extendInfoMap["category_id"]= "";
    // 文件列表
    $extendInfoMap["special_file_info_list"]= getSpecialFileInfoList();
    return $extendInfoMap;
}

function getUboInfoList() {
    $dto = array();
    // 受益人证件类型
    $dto["ubo_id_doc_type"] = "00";
    // 证件正面照片
    $dto["ubo_id_doc_copy"] = "c7faf0e6-39e9-3c35-9075-2312ad6f4ea4";
    // 受益人证件姓名
    $dto["ubo_id_doc_name"] = "杨雷";
    // 受益人证件号码
    $dto["ubo_id_doc_number"] = "110101199003072631";
    // 证件居住地址
    $dto["ubo_id_doc_address"] = "上海市徐汇区宜山路789号";
    // 证件有效期开始时间
    $dto["ubo_period_begin"] = "19900307";
    // 证件有效期结束时间
    $dto["ubo_period_end"] = "长期";
    // 证件反面照片
    $dto["ubo_id_doc_copy_back"] = "c7faf0e6-39e9-3c35-9075-2312ad6f4ea4";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getSpecialFileInfoList() {
    $dto = array();
    // 文件类型
    $dto["file_type"] = "F33";
    // 文件jfileID
    $dto["file_id"] = "49ac7d9b-851c-31b4-8b21-2983ea97b98c";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


