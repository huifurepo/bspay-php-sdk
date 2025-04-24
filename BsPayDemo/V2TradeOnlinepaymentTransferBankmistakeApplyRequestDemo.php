<?php

/**
 * 银行大额支付差错申请 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentTransferBankmistakeApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentTransferBankmistakeApplyRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentTransferBankmistakeApplyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000110468104");
// 交易金额
$request->setTransAmt("0.01");
// 订单类型
$request->setOrderType("REFUND");
// 原请求流水号order_flag&#x3D;Y时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2022012514120615009&lt;/font&gt;
$request->setOrgReqSeqId("202308312345678931");
// 原请求日期格式:yyyyMMdd；order_flag&#x3D;Y时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20220125&lt;/font&gt;
$request->setOrgReqDate("20230831");
// 异步通知地址
$request->setNotifyUrl("http://www.baidu.com");

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
    // 下单标识
    // $extendInfoMap["order_flag"]= "";
    // 备注
    $extendInfoMap["remark"]= "大额支付补入账验证";
    // 银行信息数据
    $extendInfoMap["bank_info_data"]= getAbecf41199e2427189e378ecb5bc0872();
    // 延时标记
    // $extendInfoMap["delay_acct_flag"]= "";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= get887cec5eC9324ee3B2b5282eb708eb87();
    // 实际打款信息
    // $extendInfoMap["actual_remit_data"]= get8bcd25edC7614d4181cf7d7f6bd6e4b5();
    return $extendInfoMap;
}

function getAbecf41199e2427189e378ecb5bc0872() {
    $dto = array();
    // 银行编号
    $dto["bank_code"] = "03080000";
    // 对公对私标识
    $dto["card_acct_type"] = "P";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get7cb41945E40f4907Ab1e1dd0dcfaee14() {
    $dto = array();
    // 支付金额
    // $dto["div_amt"] = "";
    // 商户号
    // $dto["huifu_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get887cec5eC9324ee3B2b5282eb708eb87() {
    $dto = array();
    // 分账信息列表
    // $dto["acct_infos"] = get7cb41945E40f4907Ab1e1dd0dcfaee14();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get8bcd25edC7614d4181cf7d7f6bd6e4b5() {
    $dto = array();
    // 实际打款日期
    // $dto["actual_remit_date"] = "test";
    // 实际打款方姓名
    // $dto["actual_remit_name"] = "test";
    // 实际打款金额
    // $dto["actual_remit_amt"] = "test";
    // 实际打款方银行卡号
    // $dto["actual_remit_card_no"] = "test";
    // 汇款凭证文件ID
    // $dto["certificate_file_id"] = "test";
    // 退款卡标识
    // $dto["refund_card_flag"] = "test";
    // 实际打款卡号银行名称
    // $dto["actual_bank_name"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


