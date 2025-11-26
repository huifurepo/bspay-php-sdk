<?php

/**
 * 支付宝直连-申请当面付代签约 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantDirectAlipayFacetofacesignApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantDirectAlipayFacetofacesignApplyRequest;

// 2.组装请求参数
$request = new V2MerchantDirectAlipayFacetofacesignApplyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000003080750");
// 上级主体ID
$request->setUpperHuifuId("6666000003078903");
// 支付宝经营类目
$request->setDirectCategory("A_A01_4119");
// 开发者的应用ID
$request->setAppId("AE150003019");
// 联系人姓名
$request->setContactName("hqqTEST");
// 联系人手机号
$request->setContactMobileNo("15800718101");
// 联系人电子邮箱
$request->setContactEmail("24324@qq.com");
// 商户账号
$request->setAccount("288000000345345");
// 服务费率（%）0.38~3之间，精确到0.01。当签约且授权sign_and_auth&#x3D;Y时，必填。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.38&lt;/font&gt;
$request->setRate("0.38");
// 文件列表
$request->setFileList(getFileList());

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
    // 订单授权凭证
    $extendInfoMap["order_ticket"]= "werwe234234234";
    // 签约且授权标识
    $extendInfoMap["sign_and_auth"]= "Y";
    // 应用授权令牌
    $extendInfoMap["app_auth_token"]= "test0004";
    // 营业执照编号
    $extendInfoMap["license_code"]= "";
    // 营业执照有效期类型
    $extendInfoMap["license_validity_type"]= "0";
    // 营业执照有效期开始日期
    $extendInfoMap["license_begin_date"]= "20200429";
    // 营业执照有效期截止日期
    $extendInfoMap["license_end_date"]= "29200429";
    return $extendInfoMap;
}

function getFileList() {
    $dto = array();
    // 文件类型
    $dto["file_type"] = "F50";
    // 文件jfileID
    $dto["file_id"] = "b53e18b3-f933-357f-9a6f-952c6a021ba5";
    // 文件名称
    $dto["file_name"] = "360huxi.jpg";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


