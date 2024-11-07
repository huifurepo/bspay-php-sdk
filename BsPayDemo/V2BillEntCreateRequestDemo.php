<?php

/**
 * 创建企业账单 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2BillEntCreateRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2BillEntCreateRequest;

// 2.组装请求参数
$request = new V2BillEntCreateRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000003100615");
// 付款人
$request->setPayerId("P2024082286286456");
// 账单名称
$request->setBillName("账单名称是水电费吧");
// 账单金额
$request->setBillAmt("0.02");
// 可支持的付款方式
$request->setSupportPayType("wx,alipay,online_b2c,online_b2b");
// 账单截止日期
$request->setBillEndDate("20990909");
// 收款人信息
$request->setPayeeInfo(getPayeeInfo());

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
    // 账单说明
    $extendInfoMap["bill_remark"]= "您本次 SaaS 服务周期为[开始日期]至[结束日期]。费用包括基础服务套餐[X]元，高级功能模块[X]元，总计[X]元。";
    // 汇总信息
    // $extendInfoMap["bill_summary_info"]= getBillSummaryInfo();
    // 更多信息
    // $extendInfoMap["bill_extend_info"]= getBillExtendInfo();
    // 账单推送方式
    $extendInfoMap["push_type"]= "EMAIL";
    // 抄送邮箱
    $extendInfoMap["copy_email"]= "xuemei.ren@huifu.com,guowen.jiang@huifu.com";
    // 备注信息
    $extendInfoMap["remark"]= "I_remark";
    // 账单信息异步通知地址
    $extendInfoMap["notify_url"]= "https://spin-test.cloudpnr.com/trade/billing/pcredit/status";
    // 回调地址
    $extendInfoMap["front_url"]= "https://spin-test.cloudpnr.com/trade/billing/pcredit/status";
    return $extendInfoMap;
}

function getBillSummaryInfo() {
    $dto = array();
    // 字段名
    // $dto["extend_name"] = "test";
    // 字段值
    // $dto["extend_value"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBillExtendInfo() {
    $dto = array();
    // 字段名
    // $dto["extend_name"] = "test";
    // 字段值
    // $dto["extend_value"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getPayeeInfo() {
    $dto = array();
    // 收款联系人姓名
    $dto["payee_name"] = "黄云";
    // 收款联系人手机payee_mobile_no、payee_tel、payee_email 三选一必填
    $dto["payee_mobile_no"] = "13456787678";
    // 收款联系人座机payee_mobile_no、payee_tel、payee_email 三选一必填
    $dto["payee_tel"] = "0211234444";
    // 收款联系人邮箱payee_mobile_no、payee_tel、payee_email 三选一必填
    $dto["payee_email"] = "lieecho@163.com";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


