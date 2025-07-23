<?php

/**
 * 灵工个人用户修改 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2FlexibleIndvModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2FlexibleIndvModifyRequest;

// 2.组装请求参数
$request = new V2FlexibleIndvModifyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 渠道商/商户汇付Id
$request->setUpperHuifuId("6666000108329682");

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
    // 基本信息
    // $extendInfoMap["basic_info"]= get34a3e4b95be148d7B2547819e1b99346();
    // 取现配置列表
    $extendInfoMap["cash_config"]= getFe3a0d1d38ec4885B59603888696de3f();
    // 卡信息
    $extendInfoMap["card_info"]= getE8224b0485914e82A6f679fce70d1655();
    return $extendInfoMap;
}

function get34a3e4b95be148d7B2547819e1b99346() {
    $dto = array();
    // 个人证件有效期类型
    // $dto["cert_validity_type"] = "";
    // 个人证件有效期开始日期
    // $dto["cert_begin_date"] = "";
    // 个人证件有效期截止日期
    // $dto["cert_end_date"] = "";
    // 手机号
    // $dto["mobile_no"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getFe3a0d1d38ec4885B59603888696de3f() {
    $dto = array();
    // 提现手续费（固定/元）fix_amt与fee_rate至少填写一项， 需保留小数点后两位，不收费请填写0.00；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.00&lt;/font&gt;注：当cash_type&#x3D;D1时为节假日取现手续费
    $dto["fix_amt"] = "";
    // 提现手续费率（%）fix_amt与fee_rate至少填写一项，需保留小数点后两位，取值范围[0.00,100.00]，不收费请填写0.00；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.05&lt;/font&gt;注：1、如果fix_amt与fee_rate都填写了则手续费&#x3D;fix_amt+支付金额\*fee_rate2、当cash_type&#x3D;D1时为节假日取现手续费
    $dto["fee_rate"] = "10.00";
    // D1工作日取现手续费固定金额单位元，需保留小数点后两位。不收费请填写0.00；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.00&lt;/font&gt;D1取现配置时选填，其他取现配置无效；cash_type取现类型为D1时，遇工作日按此费率结算，若未配置则默认按照节假日手续费计算
    $dto["weekday_fix_amt"] = "";
    // D1工作日取现手续费率单位%，需保留小数点后两位。取值范围[0.00，100.00]，不收费请填写0.00；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.05&lt;/font&gt;D1取现配置时选填，其他取现配置无效；cash_type取现类型为D1时，遇工作日按此费率结算 ，若未配置则默认按照节假日手续费计算
    $dto["weekday_fee_rate"] = "";
    // 业务类型
    $dto["cash_type"] = "D0";
    // 是否交易手续费外扣
    $dto["out_fee_flag"] = "";
    // 手续费承担方
    $dto["out_fee_huifu_id"] = "";
    // 交易手续费外扣的账户类型
    $dto["out_fee_acct_type"] = "";
    // 是否优先到账
    $dto["is_priority_receipt"] = "";
    // 开通状态
    $dto["switch_state"] = "1";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getE8224b0485914e82A6f679fce70d1655() {
    $dto = array();
    // 卡号
    $dto["card_no"] = "6228481269040908115";
    // 银行所在省
    $dto["prov_id"] = "310000";
    // 银行所在市
    $dto["area_id"] = "310100";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


