<?php

/**
 * 商户注册 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2InvoiceMerRegRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2InvoiceMerRegRequest;

// 2.组装请求参数
$request = new V2InvoiceMerRegRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 开票方汇付ID
$request->setHuifuId("6666000149801800");
// 纳税人识别号支付宝和微信乐企模式非必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：91510108MA7CQPFFO6&lt;/font&gt;
$request->setTaxPayerId("91310000795605184T");
// 销方名称支付宝和微信乐企模式非必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：汇付数电测试&lt;/font&gt;
$request->setTaxPayerName("汇付网络技术（上海）有限公司");
// 公司电话支付宝和微信乐企模式非必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：021-33323999&lt;/font&gt;
$request->setTelNo("021-33323999");
// 公司地址支付宝和微信乐企模式非必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：徐汇宜山路700号C5栋&lt;/font&gt;
$request->setRegAddress("徐汇宜山路700号C5栋021-33323999");
// 开户银行支付宝和微信乐企模式非必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：民生银行徐汇支行&lt;/font&gt;
$request->setBankName("民生银行徐汇支行");
// 开户账户支付宝和微信乐企模式非必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0206014180001609&lt;/font&gt;
$request->setAccountNo("0206014180001609");
// 联系人手机号支付宝和微信乐企模式非必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：18011212123&lt;/font&gt;
$request->setContactPhoneNo("17621100776");
// 开票方式
$request->setOpenMode("2");
// 所属省支付宝和微信乐企模式非必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：310000&lt;/font&gt;，参见[地区编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_dqbm)
$request->setProvId("310000");
// 所属市支付宝和微信乐企模式非必填，&lt;font color&#x3D;&quot;green&quot;&gt;示例值：310100&lt;/font&gt;，参见[地区编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_dqbm)
$request->setCityId("310100");

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
    // 联系人
    $extendInfoMap["contact"]= "王姗";
    // 联系人身份证号
    $extendInfoMap["id_card_no"]= "210123198702122747";
    // 开票模式
    $extendInfoMap["issue_mode"]= "LE_QI_LINK";
    // 区域代码
    // $extendInfoMap["area_code"]= "";
    // 协议附件
    // $extendInfoMap["net_url"]= "";
    // 签约商户名称
    // $extendInfoMap["mer_name"]= "";
    // 生效日期
    // $extendInfoMap["start_date"]= "";
    return $extendInfoMap;
}


