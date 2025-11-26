<?php

/**
 * 资金归集明细查询 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeSettleCollectionDetailQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeSettleCollectionDetailQueryRequest;

// 2.组装请求参数
$request = new V2TradeSettleCollectionDetailQueryRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 开始日期
$request->setBeginDate("20240711");
// 结束日期
$request->setEndDate("20240718");
// 转出方商户号转出方商户号和转入方商户号必填一个；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123124&lt;/font&gt;
$request->setOutHuifuId("");
// 转入方商户号转出方商户号和转入方商户号必填一个；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123124&lt;/font&gt;
$request->setInHuifuId("6666000146178696");

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
    // 分页页码
    $extendInfoMap["page_num"]= "0";
    // 分页条数
    $extendInfoMap["page_size"]= "5";
    // 归集状态
    $extendInfoMap["status"]= "";
    // 转出方账户号
    $extendInfoMap["out_acct_id"]= "";
    // 转入方账户号
    $extendInfoMap["in_acct_id"]= "";
    return $extendInfoMap;
}


