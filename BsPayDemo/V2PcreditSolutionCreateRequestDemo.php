<?php

/**
 * 创建花呗分期方案 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2PcreditSolutionCreateRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2PcreditSolutionCreateRequest;

// 2.组装请求参数
$request = new V2PcreditSolutionCreateRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付客户Id
$request->setHuifuId("6666000003084836");
// 花呗分期商家贴息活动名称
$request->setActivityName("花呗分期商家贴息活动名称");
// 活动开始时间
$request->setStartTime("2019-07-08 00:00:00");
// 活动结束时间
$request->setEndTime("2039-07-10 00:00:00");
// 免息金额下限(元)
$request->setMinMoneyLimit("1000");
// 免息金额上限(元)
$request->setMaxMoneyLimit("3000");
// 花呗分期贴息预算金额
$request->setAmountBudget("60000");
// 花呗分期数集合
$request->setInstallNumStrList("3");
// 预算提醒金额(元)
$request->setBudgetWarningMoney("58000");
// 预算提醒邮件列表
$request->setBudgetWarningMailList("111@alipay.com");
// 预算提醒手机号列表
$request->setBudgetWarningMobileNoList("13940001100");
// 子门店信息集合
$request->setSubShopInfoList(get5b9e78e1B07f4c27Aea4A87833d62a7e());

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
    // 开发者的应用ID
    $extendInfoMap["app_id"]= "";
    return $extendInfoMap;
}

function get5b9e78e1B07f4c27Aea4A87833d62a7e() {
    $dto = array();
    // 二级商户号
    $dto["sub_mer_id"] = "A4854135335181517376";
    // 二级商户名
    $dto["sub_mer_name"] = "预二人";
    // 费率
    $dto["fee_type"] = "02";
    // 店铺名称
    $dto["mer_name"] = "盈盈超市";
    // 省份
    $dto["province"] = "浙江省";
    // 市名
    $dto["city"] = "杭州市";
    // 区、县
    $dto["county"] = "西湖区";
    // 地址详情
    $dto["detail"] = "古荡街道西溪路556号蚂蚁Z空间";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


