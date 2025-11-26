<?php

/**
 * 抖音卡券核销 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2CouponDouyinConsumeRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2CouponDouyinConsumeRequest;

// 2.组装请求参数
$request = new V2CouponDouyinConsumeRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付商户号
$request->setHuifuId("6666000107767088");
// 门店绑定流水号
$request->setBindId("88fd7c9b63e84a259dfe3eecb811fce8");
// 加密抖音券码列表
$request->setEncryptedCodes("[\"2343\",\"5462\"]");
// 校验标识
$request->setVerifyToken("EfdAdS3");

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
    // 机具id
    // $extendInfoMap["device_id"]= "";
    // 操作人id
    // $extendInfoMap["operator_id"]= "";
    // 操作人姓名
    // $extendInfoMap["operator_name"]= "";
    // 核销额外参数
    // $extendInfoMap["verify_extra"]= get014d6e414b0943a3A679383914e2bb49();
    return $extendInfoMap;
}

function get014d6e414b0943a3A679383914e2bb49() {
    $dto = array();
    // 开台时间（秒）
    // $dto["biz_time"] = "test";
    // 实际抵扣金额（分））
    // $dto["actual_deduction_amount"] = "test";

    return $dto;
}


