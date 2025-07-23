<?php

/**
 * 申请开票 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2HycInvoiceApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2HycInvoiceApplyRequest;

// 2.组装请求参数
$request = new V2HycInvoiceApplyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户汇付id
$request->setHuifuId("6666000109133323");
// 开票类目
$request->setInvoiceCategory("信息技术服务*软件测试服务");
// 汇付全局流水号集合
// $request->setHfSeqIds("test");

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
    // 异步地址
    $extendInfoMap["asyn_url"]= "https://www.baidu.com";
    // 接收人手机号
    $extendInfoMap["receive_mobile"]= "13945641357";
    // 接收人姓名
    $extendInfoMap["receive_name"]= "黄二";
    // 快递地址
    $extendInfoMap["courier_address"]= "长江大街161号上海长江经济园";
    // 购方税号
    $extendInfoMap["invoice_tax_no"]= "91310230MA1JTWAK98";
    // 购方公司名称
    $extendInfoMap["invoice_name"]= "上海汇涵信息科技服务有限公司";
    // 购方公司地址
    $extendInfoMap["invoice_address"]= "长江大街161号上海长江经济园";
    // 购方公司银行账号
    $extendInfoMap["invoice_card_num"]= "631252533";
    // 购方银行名称
    $extendInfoMap["invoice_bank_name"]= "中国民生银行股份有限公司";
    // 购方联系电话
    $extendInfoMap["invoice_phone"]= "400-820-2819";
    // 发票类型
    $extendInfoMap["invoice_type"]= "1";
    // 备注
    $extendInfoMap["remarks"]= "";
    return $extendInfoMap;
}


