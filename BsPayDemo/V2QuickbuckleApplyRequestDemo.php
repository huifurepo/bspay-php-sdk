<?php

/**
 * 快捷绑卡申请接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2QuickbuckleApplyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2QuickbuckleApplyRequest;

// 2.组装请求参数
$request = new V2QuickbuckleApplyRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 汇付客户Id
$request->setHuifuId("6666000003078984");
// 商户用户id
$request->setOutCustId("6666000103633622");
// 订单号
$request->setOrderId("20220408105303542461831");
// 订单日期
$request->setOrderDate("20220408");
// 银行卡号
$request->setCardId("Ly+fnExeyPOTzfOtgRRur77nJB9TAe4PGgK9MB96o3LW2xINIxSA+B1jXDyvKNmJ5iE3wL+bbNoGd6tQXn6fmrY4vgeX8diCtP0PQVyS4UZkXzH4w8twgI+FduIukqTTl7o5/rrnL3H1HaP/Vutw3yBWrGq0l0NTebfc6XJXZss=");
// 银行卡开户姓名
$request->setCardName("CDszEs+NOr7m3rh7qJhciqMN4mP1yXJtwXX6HFzBJ3rwJYUxSXFEv4f6AAQychfVPB2BgZeEoK6gtjrTPfv4G3SHqoow0Way6kdsGZYmXotcq1TFmmL+QKJSAhE4tl+vs69wCHh/l4X+Rxp4AyDK7zb8XG1GWOZOwshU/SOUukM=");
// 银行卡绑定证件类型
$request->setCertType("00");
// 银行卡绑定身份证
$request->setCertId("EXDKKVOSFZCFyB5p7VWlYYH+M1Y2dg9PzVBtX9LqF3w4NWtWg/id+XTFtLuC2ntaflB9ioohwPUuiSg/mp15MKV86u7/DPT84DuM/NTOTRS/ajO8rJ1ERhtyRxT5czJWGbpysQOBA+msxOjIG5k0MkP18nZDhpg07HoGArjmp08=");
// 个人证件有效期类型
$request->setCertValidityType("1");
// 个人证件有效期起始日
$request->setCertBeginDate("20210806");
// 个人证件有效期到期日长期有效不填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20420905&lt;/font&gt;
$request->setCertEndDate("20410806");
// 银行卡绑定手机号
$request->setCardMp("Qb6AcD/EaT0gKP7d2ercByeTw2oe5loZayPuKEzQi75nZKxCyJPoIvUHTvFLRqpLDNzkpvy/aAg6xvbsw1WXdKYWB15D9LpCnYQ7qHw16IjfnPA4FDR3CE5h+nU6lGoJDj+hNRkn3y73aCeNpp5E//uDKJdjrJv6ciACf4lofAo=");
// CVV2信用卡交易专用需要密文传输。&lt;br/&gt;使用商户RSA私钥加密(加密前3位，加密后最长2048位），[参见参考文档](https://paas.huifu.com/partners/guide/#/api_jiami_jiemi)；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：Ly+fnExeyPOTzfOtgRRur77nJB9TAe4PGgK9M……fc6XJXZss&#x3D;&lt;/font&gt;
$request->setVipCode("BndOZvPCXIMcRJi1uCkw4DiNHht+KkARa+sbKbiLh4cXhjywxYM8GMl7g1a5cc1aD2PD6rVvnGzhhgpJ8mzeb/gbzNcYbU5hEXJZm5HShghGucQJB/SoqCIlyaWlz3hnclaGzznWJa5qNa50mCxVqX4zbpuGPWXv+8AnYTu8/Vk=");
// 卡有效期信用卡交易专用，格式：MMYY，需要密文传输；&lt;br/&gt;使用商户RSA私钥加密(加密前4位，加密后最长2048位），[参见参考文档](https://paas.huifu.com/partners/guide/#/api_jiami_jiemi)；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：Ly+fnExeyPOTzfOtgRRur77nJB9TAe4PGgK9M……fc6XJXZss&#x3D;JXZss&#x3D;&lt;/font&gt;
// $request->setExpiration("test");
// 挂网协议编号授权信息(招行绑卡需要上送)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：34463343&lt;/font&gt;
// $request->setProtocolNo("test");
// 设备信息域 
// $request->setTrxDeviceInf(getTrxDeviceInf());

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
    // 商户名称
    $extendInfoMap["merch_name"]= "测试";
    // 电子邮箱
    $extendInfoMap["email"]= "changliang.wang@huifu.com";
    // 卡的借贷类型
    // $extendInfoMap["dc_type"]= "";
    // 风控信息
    // $extendInfoMap["risk_info"]= getRiskInfo();
    return $extendInfoMap;
}

function getTrxDeviceInf() {
    $dto = array();
    // 银行预留手机号
    // $dto["trx_mobile_num"] = "test";
    // 设备类型
    // $dto["trx_device_type"] = "test";
    // 交易设备IP
    // $dto["trx_device_ip"] = "test";
    // 交易设备MAC
    // $dto["trx_device_mac"] = "";
    // 交易设备IMEI
    // $dto["trx_device_imei"] = "";
    // 交易设备IMSI
    // $dto["trx_device_imsi"] = "";
    // 交易设备ICCID
    // $dto["trx_device_icc_id"] = "";
    // 交易设备WIFIMAC
    // $dto["trx_device_wfifi_mac"] = "";
    // 交易设备GPS
    // $dto["trx_device_gps"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getRiskInfo() {
    $dto = array();
    // IP类型
    // $dto["ip_type"] = "test";
    // IP值
    // $dto["source_ip"] = "test";
    // 设备标识
    // $dto["device_id"] = "";
    // 设备类型
    // $dto["device_type"] = "";
    // 银行预留手机号
    // $dto["mobile"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


