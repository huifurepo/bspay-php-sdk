<?php

/**
 * 银联活动商户入驻 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantActivityUnionpayMerbaseinfoApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantActivityUnionpayMerbaseinfoApplyRequest;

// 2.组装请求参数
$request = new V2MerchantActivityUnionpayMerbaseinfoApplyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000103391467");
// 商户类型
$request->setMerType("MERCHANT_03");
// 经营类型
$request->setDealType("01");
// 所属行业（MCC）MERCHANT_01-自然人 需要传入，参考[银联MCC编码](https://paas.huifu.com/partners/api/#/csfl/api_csfl_ylmccbm) ；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：5311&lt;/font&gt;
$request->setMcc("");
// 负责人手机号
$request->setLegalMobile("18900458938");
// 联系人身份证号
$request->setContractIdNo("110101199003071874");

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
    // 文件列表
    $extendInfoMap["file_list"]= getFileList();
    return $extendInfoMap;
}

function getFileList() {
    $dto = array();
    // 文件类型
    $dto["file_type"] = "F02";
    // 文件jfileID
    $dto["file_id"] = "e2113798-ee67-30ac-9981-9dd742510adb";
    // 文件名称
    $dto["file_name"] = "身份证正面照片";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


