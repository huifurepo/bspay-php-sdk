<?php

/**
 * 微信支付宝入驻信息修改 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBusiAtModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2MerchantBusiAtModifyRequest;

// 2.组装请求参数
$request = new V2MerchantBusiAtModifyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// AT信息修改列表
$request->setAtRegList(getAtRegList());

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
    // 业务开通结果异步消息接收地址
    $extendInfoMap["busi_async_return_url"]= "http://service.example.com/to/path";
    return $extendInfoMap;
}

function getAtRegList() {
    $dto = array();
    // 商户汇付ID
    $dto["huifu_id"] = "6666000***456098";
    // 产品号
    $dto["product_id"] = "ZDTEST";
    // 业务开通类型
    $dto["fee_type"] = "03";
    // 支付通道
    $dto["pay_way"] = "W";
    // 子渠道号
    $dto["pay_channel_id"] = "JP00001";
    // 经营简称
    $dto["short_name"] = "盈盈超市3.0";
    // 客服电话
    $dto["service_phone"] = "1752***5001";
    // 商户名称
    // $dto["mer_name"] = "";
    // 营业执照类型
    // $dto["business_license_type"] = "";
    // 商户营业执照号
    // $dto["license_code"] = "";
    // 法人身份证号
    // $dto["legal_cert_no"] = "";
    // 行业分类
    // $dto["cls_id"] = "";
    // 申请服务
    // $dto["service_codes"] = "";
    // 结算卡
    // $dto["settle_card_no"] = "";
    // 结算卡户名
    // $dto["settle_card_name"] = "";
    // 商户结算卡开卡行支行名称
    // $dto["mer_card_bank_branch_name"] = "";
    // 支付宝登录账号
    // $dto["alipay_account"] = "";
    // 联系人类型
    // $dto["contact_type"] = "";
    // 联系人姓名
    // $dto["contact_name"] = "";
    // 联系人手机号
    // $dto["contact_mobile"] = "";
    // 联系人邮箱
    // $dto["contact_email"] = "";
    // 商户地址
    // $dto["mer_addr"] = "";
    // 省份编码
    // $dto["province_code"] = "";
    // 城市编码
    // $dto["city_code"] = "";
    // 区县编码
    // $dto["district_code"] = "";
    // 拟申请的间联商户等级
    // $dto["indirect_level"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


