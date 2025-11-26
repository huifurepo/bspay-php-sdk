<?php

/**
 * 商户公域授权 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2LinkappAuthDoRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2LinkappAuthDoRequest;

// 2.组装请求参数
$request = new V2LinkappAuthDoRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付商户号
$request->setHuifuId("6666000107203801");
// 平台类型
$request->setPlatformType("21");
// 协议地址
$request->setContractUrl("https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/spin/files/斗拱增值业务服务协议 V1.020231120.docx");
// 签约商户名称
$request->setContractMerName("于云飞");
// 签约时间
$request->setContractTime("1744008692000");
// 登录用手机号第一次登录有需要手机验证码的情况;（需要授权手机安装一个转发短信的应用）
// $request->setPhoneNumber("test");
// 商户类型商户类型：0个人店 1企业 2个体工商户 3其他(目前固定填3即可)
// $request->setMerchantType("test");

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
    // 回调地址
    // $extendInfoMap["callback_url"]= "";
    // 
    // $extendInfoMap["以下仅RPA授权输入"]= "";
    // 登录账号名称
    // $extendInfoMap["account_name"]= "";
    // 登录账号密码
    // $extendInfoMap["account_password"]= "";
    // 门店名称
    // $extendInfoMap["shop_name"]= "";
    // 管理员手机号
    // $extendInfoMap["admin_phone_num"]= "";
    return $extendInfoMap;
}


