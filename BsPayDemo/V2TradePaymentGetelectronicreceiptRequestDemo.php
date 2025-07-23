<?php

/**
 * 电子回单查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentGetelectronicreceiptRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentGetelectronicreceiptRequest;

// 2.组装请求参数
$request = new V2TradePaymentGetelectronicreceiptRequest();
// 商户号
$request->setHuifuId("6666000108840000");
// 是否展示手续费0:不展示手续费，1:展示手续费；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0&lt;/font&gt;&lt;br/&gt;模板类型1或2时必填；
$request->setShowFeemat("1");
// 交易返回的全局流水号1、交易类返回的全局流水号。org_hf_seq_id与（org_req_seq_id、org_req_date、pay_type） 不能同时为空；&lt;br/&gt;2、结算（SETTLE）返回的结算流水编号&lt;br/&gt;3、灵工支付返回的电子回单流水号&lt;/br&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：003500TOP2B211021163242P447ac132fd200000&lt;/font&gt;
$request->setOrgHfSeqId("");
// 原交易请求日期格式:yyyyMMdd；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20221022&lt;/font&gt;
$request->setOrgReqDate("20220629");
// 原交易请求流水号org_hf_seq_id与（org_req_seq_id、org_req_date、pay_type） 不能同时为空；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：2022012614120615001&lt;/font&gt;
$request->setOrgReqSeqId("63124245672165376");
// 支付类型BALANCE_PAY：余额支付，&lt;br/&gt;CASHOUT：取现，&lt;br/&gt;QUICK_PAY：快捷支付，&lt;br/&gt;ONLINE_PAY：网银，&lt;br/&gt;SURROGATE：代发&lt;br/&gt;WITHHOLD_PAY：代扣&lt;br/&gt;WAP_PAY：手机WAP&lt;br/&gt;PAY_CONFIRM：交易确认&lt;br/&gt;TRANSFER_ACCT：大额转账(指[银行大额转账](https://paas.huifu.com/open/doc/api/#/dejy/api_dejy_yhdezz)交易)&lt;br/&gt;T_MICROPAY: 微信反扫&lt;br/&gt;A_MICROPAY: 支付宝反扫&lt;br/&gt;T_JSAPI: 微信公众号支付&lt;br/&gt;T_MINIAPP: 微信小程序支付&lt;br/&gt;T_APP：微信APP支付&lt;br/&gt;A_JSAPI: 支付宝JS支付&lt;br/&gt;A_NATIVE: 支付宝正扫支付&lt;br/&gt;T_H5：微信直连H5支付&lt;br/&gt;SETTLE：结算&lt;br/&gt;JDBT：京东白条&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：ONLINE_PAY&lt;/font&gt;&lt;br/&gt;注意：支付类型有值，原交易请求流水号不为空必填； &lt;br/&gt;选择交易确认类型时：请传入交易确认的请求流水号或全局流水号。&lt;br/&gt;模板类型为3、4时，忽略支付类型取值；
$request->setPayType("ONLINE_PAY");

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
    // 模板类型
    // $extendInfoMap["template_type"]= "";
    // 是否分账
    // $extendInfoMap["is_div"]= "";
    // 电子回单名称显示
    // $extendInfoMap["payer_name"]= "";
    return $extendInfoMap;
}


