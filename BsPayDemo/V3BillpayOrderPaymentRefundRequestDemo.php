<?php

/**
 * 账单退款接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V3BillpayOrderPaymentRefundRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V3BillpayOrderPaymentRefundRequest;

// 2.组装请求参数
$request = new V3BillpayOrderPaymentRefundRequest();
// 请求流水号
// $request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
// $request->setReqDate(date("Ymd"));
// 商户号
// $request->setHuifuId("test");
// 账单编号
// $request->setBillNo("test");
// 退款金额
// $request->setRefAmt("test");
// 大额转账支付账户信息数据jsonObject格式；银行大额转账支付交易的退款申请,付款方账户类型为对公时必填
// $request->setBankInfoData(get1d68b0833d9146359c7eAb5f4dbf001b());

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
    // 退款原因
    // $extendInfoMap["reason"]= "";
    // 异步通知地址
    // $extendInfoMap["notify_url"]= "";
    return $extendInfoMap;
}

function get1d68b0833d9146359c7eAb5f4dbf001b() {
    $dto = array();
    // 省份付款方为对公账户时必填,参见[代发省市地区码](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/area/%E6%96%97%E6%8B%B1%E4%BB%A3%E5%8F%91%E7%9C%81%E4%BB%BD%E5%9C%B0%E5%8C%BA%E7%BC%96%E7%A0%81.xlsx#代发省市地区码);&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0013&lt;/font&gt;
    // $dto["province"] = "test";
    // 地区付款方为对公账户时必填，,参见[代发省市地区码](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/area/%E6%96%97%E6%8B%B1%E4%BB%A3%E5%8F%91%E7%9C%81%E4%BB%BD%E5%9C%B0%E5%8C%BA%E7%BC%96%E7%A0%81.xlsx#代发省市地区码)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1301&lt;/font&gt;
    // $dto["area"] = "test";
    // 银行编号付款方为对公账户时必填,参见[银行编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_yhbm#银行编码);&lt;font color&#x3D;&quot;green&quot;&gt;示例值：01040000&lt;/font&gt;
    // $dto["bank_code"] = "test";
    // 联行号付款方为对公账户时必填,参见[银行支行编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_yhzhbm#银行支行编码);&lt;font color&#x3D;&quot;green&quot;&gt;示例值：102290026507&lt;/font&gt;
    // $dto["correspondent_code"] = "test";
    // 付款方账户类型
    // $dto["card_acct_type"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


