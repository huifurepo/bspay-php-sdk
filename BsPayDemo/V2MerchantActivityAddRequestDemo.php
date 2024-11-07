<?php

/**
 * 商户活动报名 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantActivityAddRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantActivityAddRequest;

// 2.组装请求参数
$request = new V2MerchantActivityAddRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 汇付客户Id
$request->setHuifuId("6666000103627938");
// 营业执照图片调用[图片上传接口](http://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)获取jfile文件id；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;&lt;br/&gt;活动类型为支付宝谷雨活动时无需填写任何资料
$request->setBlPhoto("42204258-967e-373c-88d2-1afa4c7bb8ef");
// 店内环境图片参加教育食堂、非校园餐饮、非盈利、停车缴费行业时必传；调用[图片上传接口](http://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)获取jfile文件id；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;&lt;br/&gt;活动类型为支付宝谷雨活动时无需填写任何资料
$request->setDhPhoto("42204258-967e-373c-88d2-1afa4c7bb8ef");
// 手续费类型
$request->setFeeType("7");
// 整体门面图片（门头照）参加教育食堂行业、非校园餐饮、非盈利、线下教培、公办医院、商业医疗时必传；调用[图片上传接口](http://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)获取jfile文件id；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;&lt;br/&gt;活动类型为支付宝谷雨活动时无需填写任何资料
$request->setMmPhoto("42204258-967e-373c-88d2-1afa4c7bb8ef");
// 收银台照片参加教育食堂行业、线下教培、公办医院时必传；调用[图片上传接口](http://paas.huifu.com/open/doc/api/#/shgl/shjj/api_shjj_shtpsc)获取jfile文件id；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;&lt;br/&gt;活动类型为支付宝谷雨活动时无需填写任何资料
$request->setSytPhoto("42204258-967e-373c-88d2-1afa4c7bb8ef");
// 支付通道
$request->setPayWay("W");

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
    // 活动类型
    $extendInfoMap["activity_type"]= "BLUE_SEA";
    // 二级商户号
    $extendInfoMap["sub_mer_id"]= "W5503418657189757903";
    // 二级商户名称
    $extendInfoMap["sub_mer_name"]= "";
    // 异步通知地址
    $extendInfoMap["async_return_url"]= "http://192.168.85.157:30031/sspm/testVirgo";
    // 证明文件图片
    $extendInfoMap["certificate_file_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 收费样本
    $extendInfoMap["charge_sample_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 照会
    $extendInfoMap["diplomatic_note_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 事业单位法人证书图片
    $extendInfoMap["inst_org_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 法人身份证图片
    $extendInfoMap["legal_person_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 法人登记证书图片
    $extendInfoMap["legal_person_reg_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 医疗执业许可证图片
    $extendInfoMap["medical_license_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 民办非企业单位登记证书图片
    $extendInfoMap["nonenterprise_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 组织机构代码证图片
    $extendInfoMap["org_cert_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 机构资质证明照片
    $extendInfoMap["org_qualifi_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 办学资质图片
    $extendInfoMap["school_license_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 门店省市区编码
    $extendInfoMap["shop_add_code"]= "110101";
    // 门店街道名称
    $extendInfoMap["shop_street"]= "门店街道名称";
    // 门店租赁证明
    $extendInfoMap["store_tenancy_proof_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 合作资质证明
    $extendInfoMap["cooper_certi_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 优惠费率承诺函
    $extendInfoMap["activity_rate_commit_photo"]= "42204258-967e-373c-88d2-1afa4c7bb8ef";
    // 商户同名银行账户信息
    $extendInfoMap["bank_account"]= getBankAccount();
    // 银行开户证明图片
    $extendInfoMap["bank_account_prove_photo"]= "";
    // 机构银行合作授权函图
    $extendInfoMap["bank_agreement_photo"]= "";
    // 行业编码
    $extendInfoMap["industry_code"]= "";
    // 商户行业资质图片
    $extendInfoMap["industry_photo"]= "";
    // 负责人授权函图片
    $extendInfoMap["legal_person_auth_photo"]= "";
    // 食堂经营相关资质
    // $extendInfoMap["food_qualification_proof"]= "";
    // 活动费率%
    // $extendInfoMap["preferential_rate"]= "";
    // 活动到期后费率%
    // $extendInfoMap["expiration_rate"]= "";
    // 学校号
    // $extendInfoMap["school_id"]= "";
    return $extendInfoMap;
}

function getBankAccount() {
    $dto = array();
    // 账户名
    $dto["card_name"] = "张三";
    // 银行账号
    $dto["card_no"] = "6228480402637874213";
    // 开户行名称
    $dto["bank_branch_name"] = "招商银行";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


