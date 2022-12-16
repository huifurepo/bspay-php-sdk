<?php

/**
 * 用户业务入驻 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2UserBusiOpenRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2UserBusiOpenRequest;

// 2.组装请求参数
$request = new V2UserBusiOpenRequest();
// 汇付ID
$request->setHuifuId("6666000105765113");
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 渠道商/商户汇付Id
$request->setUpperHuifuId("6666000003084836");

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
    // 结算信息配置
    // $extendInfoMap["&lt;span class&#x3D;&quot;extend settle_config&quot;&gt;settle_config&lt;/span&gt;"]= "";
    // 结算卡信息
    // $extendInfoMap["&lt;span class&#x3D;&quot;extend card_info&quot;&gt;card_info&lt;/span&gt;"]= "";
    // 取现配置列表
    // $extendInfoMap["&lt;span class&#x3D;&quot;extend cash_config&quot;&gt;cash_config&lt;/span&gt;"]= "";
    // 文件列表
    // $extendInfoMap["&lt;span class&#x3D;&quot;extend file_list&quot;&gt;file_list&lt;/span&gt;"]= "";
    // 延迟入账开关
    // $extendInfoMap["delay_flag"]= "";
    return $extendInfoMap;
}


