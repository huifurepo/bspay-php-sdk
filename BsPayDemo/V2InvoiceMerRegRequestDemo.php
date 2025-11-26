<?php

/**
 * 商户注册 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2InvoiceMerRegRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2InvoiceMerRegRequest;

// 2.组装请求参数
$request = new V2InvoiceMerRegRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 开票方汇付ID
$request->setHuifuId("6666000149801800");
// 纳税人识别号
$request->setTaxPayerId("91310000795605184T");
// 销方名称
$request->setTaxPayerName("汇付网络技术（上海）有限公司");
// 公司电话
$request->setTelNo("021-33323999");
// 公司地址
$request->setRegAddress("徐汇宜山路700号C5栋021-33323999");
// 开户银行
$request->setBankName("民生银行徐汇支行");
// 开户账户
$request->setAccountNo("0206014180001609");
// 联系人手机号
$request->setContactPhoneNo("17621100776");
// 开票方式
$request->setOpenMode("2");
// 所属省
$request->setProvId("310000");
// 所属市
$request->setCityId("310100");

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
    // 联系人
    $extendInfoMap["contact"]= "王姗";
    // 联系人身份证号
    $extendInfoMap["id_card_no"]= "210123198702122747";
    // 业务到期年限
    $extendInfoMap["valid_period"]= "1";
    // 自动续约
    $extendInfoMap["auto_renewal"]= "Y";
    // 商户入驻结果异步通知地址
    $extendInfoMap["callback_url"]= "http: //service.example.com/to/path";
    return $extendInfoMap;
}


