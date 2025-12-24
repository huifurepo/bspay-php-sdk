<?php

/**
 * 代运营代扣业务配置 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBusiLlaconfigRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantBusiLlaconfigRequest;

// 2.组装请求参数
$request = new V2MerchantBusiLlaconfigRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户汇付id
$request->setHuifuId("6666000123123123");
// 所属渠道商
$request->setUpperHuifuId("6666000109812120");
// 代运营配置json字符串，业务角色为AGENCY:代运营时必填
// $request->setLlaAgencyConfig(get15beffc28d39428cA44fC4cbd476b5c3());
// 商家配置json字符串，业务角色为MERCHANT:商家时必填
$request->setLlaMerchantConfig(getD955cca1Bb5248be8fab9e7b96593480());
// 纸质协议文件协议类型为纸质且业务角色不为空时必填，文件类型F633；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
// $request->setPaperAgreementFile("test");
// 签约人信息json字符串，协议类型为电子时必填
$request->setSignUserInfo(get152fc503351e411cBb1433ff7dd3a4c7());

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
    // 业务角色
    $extendInfoMap["busi_role"]= "MERCHANT";
    // 协议类型
    $extendInfoMap["agreement_type"]= "0";
    // 审核异步消息接收地址
    // $extendInfoMap["audit_async_return_url"]= "";
    // 电子协议签约链接异步通知地址
    // $extendInfoMap["agreement_async_return_url"]= "";
    // 交易异步应答地址
    // $extendInfoMap["recon_resp_addr"]= "";
    return $extendInfoMap;
}

function get15beffc28d39428cA44fC4cbd476b5c3() {
    $dto = array();
    // 代运营配置开关
    // $dto["switch_state"] = "test";
    // 佣金手续费百分比代运营配置开关为开时必填,[0-100]区间的数,小数位最多两位 &lt;font color&#x3D;&quot;green&quot;&gt;示例值：1.00&lt;/font&gt;；&lt;br/&gt;
    // $dto["fee_rate"] = "test";
    // 佣金手续费内外扣标记代运营配置开关为开时必填,1:外扣 2:内扣 &lt;font color&#x3D;&quot;green&quot;&gt;示例值：2&lt;/font&gt;；&lt;br/&gt;
    // $dto["out_fee_flag"] = "test";
    // 佣金手续费外扣汇付ID佣金手续费内外扣标记为 1:外扣时必填 &lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000109812120&lt;/font&gt;
    // $dto["out_fee_huifuid"] = "test";
    // 佣金手续费外扣子账户类型01-基本户，05-充值户，09：营销户，佣金手续费内外扣标记为 1:外扣时必填 &lt;font color&#x3D;&quot;green&quot;&gt;示例值：01&lt;/font&gt;
    // $dto["out_fee_acct_type"] = "test";
    // 商家与代运营合作协议代运营配置开关为开时必填，商家与代运营方的扣款协议，文件类型F634；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
    // $dto["ma_cooperation_agreement_file"] = "test";
    // 代运营服务证明材料代运营配置开关为开时必填，文件类型F635；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
    // $dto["agency_service_prove_file"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getEcdf2f447bdd4595A23cF5e5b837b2cf() {
    $dto = array();
    // 抖音来客配置开关
    $dto["switch_state"] = "1";
    // 关联代运营汇付id抖音来客配置开关为开时必填,&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000109812124&lt;/font&gt;
    $dto["agency_huifu_id"] = "6666000109812124";
    // 代扣卡token抖音来客配置开关为开时必填
    $dto["token_no"] = "32231131111";
    // 抖音账户号
    $dto["dy_acct_no"] = "132123111";
    // 抖音网店名称抖音来客配置开关为开时必填
    $dto["dy_online_store_name"] = "网店名称";
    // 抖音业务类型
    $dto["dy_busi_type"] = "1";
    // 商家与代运营合作协议(抖音来客)抖音来客配置开关为开时必填，商家与代运营方的扣款协议，文件类型F636；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
    $dto["madylk_cooperation_agreement_file"] = "57cc7f00-600a-33ab-b614-6221bbf2e530";
    // 商家抖音来客平台材料抖音来客配置开关为开时必填，提供商家在抖音来客平台的店铺名称、结算账户截图、经营照片等信息，文件类型F637；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
    $dto["merchant_dylk_file"] = "57cc7f00-600a-33ab-b614-6221bbf2e530";

    return $dto;
}

function getD955cca1Bb5248be8fab9e7b96593480() {
    $dto = array();
    // 商家配置开关
    $dto["switch_state"] = "1";
    // 最大代扣比例(0,100]区间的整数,商家配置开关为开时必填&lt;font color&#x3D;&quot;green&quot;&gt;示例值：50&lt;/font&gt;
    $dto["max_withhold_percent"] = "50";
    // 抖音来客配置json对象,商家配置开关为开时,抖音来客配置和美团外卖配置不能都为空
    $dto["lla_dylk_config"] = getEcdf2f447bdd4595A23cF5e5b837b2cf();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get152fc503351e411cBb1433ff7dd3a4c7() {
    $dto = array();
    // 签约人类型
    $dto["type"] = "LEGAL";
    // 签约人手机号
    $dto["mobile_no"] = "18611111111";
    // 签约人邮箱
    // $dto["email"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


