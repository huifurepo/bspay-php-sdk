<?php

/**
 * 子账户开通配置(2022) - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantSettleConfigRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantSettleConfigRequest;

// 2.组装请求参数
$request = new V2MerchantSettleConfigRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户/用户汇付Id
$request->setHuifuId("6666000106071234");
// 上级汇付Id
$request->setUpperHuifuId("6666000106065087");
// 子账户类型
$request->setAcctType("02");
// 账户名称
$request->setAcctName("现金账户");

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
    // 结算卡信息配置
    $extendInfoMap["card_info"]= getCardInfo();
    // 结算规则配置
    $extendInfoMap["settle_config"]= getSettleConfig();
    // 异步请求地址
    $extendInfoMap["async_return_url"]= "";
    // 汇总结算配置实体
    // $extendInfoMap["collection_settle_config"]= getCollectionSettleConfig();
    return $extendInfoMap;
}

function getCardInfo() {
    $dto = array();
    // 结算账户类型
    $dto["card_type"] = "0";
    // 结算账户名
    $dto["card_name"] = "张三";
    // 结算账号
    $dto["card_no"] = "62200000000000000";
    // 银行所在省
    $dto["prov_id"] = "310000";
    // 银行所在市
    $dto["area_id"] = "310100";
    // 银行编号参考： [银行编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_yhbm) ； &lt;font color&#x3D;&quot;green&quot;&gt;示例值：01020000 &lt;/font&gt; &lt;br/&gt;当card_type&#x3D;0时必填， 当card_type&#x3D;1或2时非必填
    $dto["bank_code"] = "01030000";
    // 联行号参考：[银行支行编码](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_yhzhbm) 当card_type&#x3D;0时必填， 当card_type&#x3D;1或2时非必填 &lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：102290026507&lt;/font&gt;
    $dto["branch_code"] = "103290040169";
    // 支行名称开户支行名称。 当card_type&#x3D;0时必填， 当card_type&#x3D;1或2时非必填； &lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：中国工商银行上海市中山北路支行&lt;/font&gt;
    $dto["branch_name"] = "中国农业银行股份有限公司XXX支行";
    // 持卡人证件类型参见《[自然人证件类型](https://paas.huifu.com/open/doc/api/#/api_ggcsbm?id&#x3D;%e8%87%aa%e7%84%b6%e4%ba%ba%e8%af%81%e4%bb%b6%e7%b1%bb%e5%9e%8b)》 当card_type&#x3D;0时为空， 当card_type&#x3D;1或2时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：00&lt;/font&gt;
    $dto["cert_type"] = "00";
    // 持卡人证件有效期截止日期日期格式：yyyyMMdd，以北京时间为准。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20220125&lt;/font&gt;，当cert_validity_type&#x3D;0时必填；当cert_validity_type&#x3D;1时为空
    $dto["cert_end_date"] = "20221212";
    // 持卡人证件号码
    $dto["cert_no"] = "220105198806082098";
    // 持卡人证件有效期类型
    $dto["cert_validity_type"] = "0";
    // 持卡人证件有效期开始
    $dto["cert_begin_date"] = "20220101";
    // 结算人手机号
    $dto["mp"] = "1751111111";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getSettleConfig() {
    $dto = array();
    // 结算周期
    $dto["settle_cycle"] = "D1";
    // 结算手续费外扣商户号填写承担手续费的汇付商户号；当out_settle_flag&#x3D;1时必填，否则非必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000123123123&lt;/font&gt;
    $dto["out_settle_huifuid"] = "6666000106070589";
    // 起结金额
    $dto["min_amt"] = "1";
    // 留存金额
    $dto["remained_amt"] = "2";
    // 结算摘要
    $dto["settle_abstract"] = "abstract";
    // 手续费外扣标记
    $dto["out_settle_flag"] = "1";
    // 结算手续费外扣账户类型
    $dto["out_settle_acct_type"] = "01";
    // 节假日结算手续费率（%）
    $dto["fixed_ratio"] = "66.88";
    // 结算方式
    $dto["settle_pattern"] = "P0";
    // 结算批次号
    $dto["settle_batch_no"] = "0";
    // 是否优先到账
    $dto["is_priority_receipt"] = "N";
    // 自定义结算处理时间
    $dto["settle_time"] = "211221";
    // 节假日结算手续费固定金额（元）
    $dto["constant_amt"] = "211221";
    // 卡序列号
    $dto["token_no"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCollectionSettleConfig() {
    $dto = array();
    // 归集留存金(元)
    // $dto["out_resv_amt"] = "test";
    // 转入账户
    // $dto["in_acct_id"] = "test";
    // 转入商户号
    // $dto["in_huifu_id"] = "test";
    // 生效日期
    // $dto["valid_date"] = "test";
    // 转出账户
    // $dto["out_acct_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


