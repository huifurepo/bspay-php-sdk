<?php

/**
 * 银行大额转账差错申请 - 示例
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
// 原请求流水号
$request->setOrgReqSeqId("202308312345678931");
// 原请求日期
$request->setOrgReqDate("20230831");
// 实际打款日期
$request->setRemitDate("20230615");
// 实际付款方姓名
$request->setCertificateName("孙洁");
// 实际付款方银行卡号
$request->setBankCardNo("V2olJv4Srh…………78M8A==");
// 实际付款方银行名称
$request->setBankName("招商银行");
// 异步通知地址
$request->setNotifyUrl("http://www.baidu.com");
// 商品描述
// $request->setGoodsDesc("test");
// 汇款凭证文件内容
$request->setCertificateContent("/9j/4QCARXhpZgAATU0…………AAB//2Q==");

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
    // 汇款凭证文件名称
    $extendInfoMap["file_name"]= "汇付电子小票验证.jpg";
    // 备注
    $extendInfoMap["remark"]= "大额转账补入账验证";
    // 银行信息数据
    $extendInfoMap["bank_info_data"]= getBankInfoData();
    return $extendInfoMap;
}

function getBankInfoData() {
    $dto = array();
    // 银行编号
    $dto["bank_code"] = "03080000";
    // 联行号选填，参见：[银行支行编码](https://paas.huifu.com/partners/api/#/csfl/api_csfl_yhzhbm)； &lt;font color&#x3D;&quot;green&quot;&gt;示例值：102290026507&lt;/font&gt;&lt;br/&gt;对私代发非必填；
    $dto["correspondent_code"] = "103290076178";
    // 对公对私标识
    $dto["card_acct_type"] = "P";
    // 省份
    $dto["province"] = "0031";
    // 地区
    $dto["area"] = "3100";
    // 支行名
    $dto["subbranch_bank_name"] = "中国农业银行股份有限公司上海联洋支行";
    // 证件类型
    $dto["certificate_type"] = "01";
    // 付款方三证合一码
    $dto["bank_acct_three_in_one"] = "92650109MA79R8E308";
    // 手机号
    $dto["mobile_no"] = "oO6XYz…………Is3nZb/5dFj860Z+nQ==";
    // 证件号
    $dto["certify_no"] = "yL09mhS5…………WK04Kdfyg==";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


