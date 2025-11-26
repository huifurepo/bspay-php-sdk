<?php

/**
 * 不明来账处理 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentZxeUnknownincomeDisposeRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentZxeUnknownincomeDisposeRequest;

// 2.组装请求参数
$request = new V2TradePaymentZxeUnknownincomeDisposeRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000109133323");
// 银行侧交易流水号参照异步通知里的bank_serial_no；&lt;br/&gt;“银行侧交易流水号”和“来账银行账号，来账账户名称，交易金额，交易日期”二选一必填。
$request->setBankSerialNo("FRSC202409252NEA000121452600000");
// 来账银行账号需要密文传输，使用汇付RSA公钥加密(加密前64位，加密后最长2048位），参见[参考文档](https://paas.huifu.com/open/doc/guide/#/api_jiami_jiemi)；示例值：Ly+fnExeyPOTzfOtgRRur77nJB9TAe4PGgK9M……fc6XJXZss&#x3D;“银行侧交易流水号”和“来账银行账号，来账账户名称，交易金额，交易日期”二选一必填。
// $request->setPayAcct("test");
// 来账账户名称“银行侧交易流水号”和“来账银行账号，来账账户名称，交易金额，交易日期”二选一必填。
// $request->setPayAcctName("test");
// 交易金额“银行侧交易流水号”和“来账银行账号，来账账户名称，交易金额，交易日期”二选一必填。
// $request->setTransAmt("test");
// 交易日期“银行侧交易流水号”和“来账银行账号，来账账户名称，交易金额，交易日期”二选一必填。
// $request->setTransDate("test");
// 操作类型
$request->setOperateType("0");

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
    // 交易时间
    // $extendInfoMap["trans_time"]= "";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://mock.uutool.cn/fat69kri74k";
    return $extendInfoMap;
}


