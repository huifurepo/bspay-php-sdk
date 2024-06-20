<?php

/**
 * 商户注册信息修改 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2InvoiceMerModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2InvoiceMerModifyRequest;

// 2.组装请求参数
$request = new V2InvoiceMerModifyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 开票方汇付ID
$request->setHuifuId("6666000149801800");

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
    // 销方名称
    $extendInfoMap["tax_payer_name"]= "汇付网络技术（上海）有限公司";
    // 公司电话
    $extendInfoMap["tel_no"]= "021-33323999";
    // 公司地址
    $extendInfoMap["reg_address"]= "徐汇宜山路700号C5栋021-33323999";
    // 开户银行
    $extendInfoMap["bank_name"]= "民生银行徐汇支行";
    // 开户账户
    $extendInfoMap["account_no"]= "0206014180001609";
    // 联系人手机号
    $extendInfoMap["contact_phone_no"]= "17621100776";
    // 联系人
    $extendInfoMap["contact"]= "王姗";
    // 联系人身份证号
    $extendInfoMap["id_card_no"]= "210123198702122747";
    // 所属省
    $extendInfoMap["prov_id"]= "310000";
    // 所属市
    $extendInfoMap["city_id"]= "310100";
    return $extendInfoMap;
}


