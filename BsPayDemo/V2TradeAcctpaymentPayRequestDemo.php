<?php

/**
 * 余额支付 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeAcctpaymentPayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeAcctpaymentPayRequest;

// 2.组装请求参数
$request = new V2TradeAcctpaymentPayRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 出款方商户号
$request->setOutHuifuId("6666000109133323");
// 支付金额
$request->setOrdAmt("0.01");
// 分账对象
$request->setAcctSplitBunch(getD37742661e6048c3B305B86f6af02ff6());
// 安全信息
$request->setRiskCheckData(get7e2f3a0329204bd7Af5b4b0e8e8e6e57());
// 资金类型资金类型。支付渠道为中信E管家时，资金类型必填（[详见说明](https://paas.huifu.com/open/doc/api/#/yuer/api_zxegjzllx)）
// $request->setFundType("test");
// 手续费承担方标识余额支付手续费承担方标识；商户余额支付扣收规则为接口指定承担方时必填！枚举值：&lt;br/&gt;OUT：出款方；&lt;br/&gt;IN：分账接受方。&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：IN&lt;/font&gt;
// $request->setTransFeeTakeFlag("test");

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
    // 发起方商户号
    // $extendInfoMap["huifu_id"]= "";
    // 商品描述
    // $extendInfoMap["good_desc"]= "";
    // 备注
    // $extendInfoMap["remark"]= "";
    // 是否延迟交易
    // $extendInfoMap["delay_acct_flag"]= "";
    // 出款方账户号
    // $extendInfoMap["out_acct_id"]= "";
    // 支付渠道
    // $extendInfoMap["acct_channel"]= "";
    // 灵活用工标志
    // $extendInfoMap["hyc_flag"]= "";
    // 灵活用工平台
    // $extendInfoMap["lg_platform_type"]= "";
    // 代发模式
    // $extendInfoMap["salary_modle_type"]= "";
    // 落地公司商户号
    // $extendInfoMap["bmember_id"]= "";
    // 乐接活请求参数集合
    // $extendInfoMap["ljh_data"]= get5de9d033D391477aB3266dcce6b8b3e4();
    // 异步通知地址
    // $extendInfoMap["notify_url"]= "";
    return $extendInfoMap;
}

function getF21d3168F3f74616B096Bccba329d0b9() {
    $dto = array();
    // 分账接收方ID
    $dto["huifu_id"] = "6666000109133323";
    // 分账金额
    $dto["div_amt"] = "0.01";
    // 账户号
    // $dto["acct_id"] = "";
    // 分账百分比%
    // $dto["percentage_div"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getD37742661e6048c3B305B86f6af02ff6() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getF21d3168F3f74616B096Bccba329d0b9();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get7e2f3a0329204bd7Af5b4b0e8e8e6e57() {
    $dto = array();
    // 转账原因
    $dto["transfer_type"] = "04";
    // 产品子类
    $dto["sub_product"] = "1";
    // 纬度
    // $dto["latitude"] = "";
    // 经度
    // $dto["longitude"] = "";
    // 基站地址
    // $dto["base_station"] = "";
    // IP地址
    // $dto["ip_addr"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get5de9d033D391477aB3266dcce6b8b3e4() {
    $dto = array();
    // 税源地ID
    // $dto["tax_area_id"] = "";
    // 任务模板ID
    // $dto["template_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


