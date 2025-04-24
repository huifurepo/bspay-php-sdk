<?php

/**
 * 代扣支付 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeOnlinepaymentWithholdpayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeOnlinepaymentWithholdpayRequest;

// 2.组装请求参数
$request = new V2TradeOnlinepaymentWithholdpayRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109812884");
// 用户客户号
$request->setUserHuifuId("6666000109818115");
// 绑卡id
$request->setCardBindId("10024597199");
// 订单金额
$request->setTransAmt("0.01");
// 商品描述
$request->setGoodsDesc("代扣test");
// 代扣类型
$request->setWithholdType("2");
// 异步通知地址
$request->setNotifyUrl("http://www.chinapnr.com/");
// 银行扩展数据
$request->setExtendPayData(get3447c39440aa412c90f88699fb6b0663());
// 风控信息
$request->setRiskCheckData(get4e66af86899f45f9800aD701060955fb());
// 设备信息数据
$request->setTerminalDeviceData(get43a4131185884faf8dd848f1dd88efb1());

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
    // 备注
    $extendInfoMap["remark"]= "reamrk123";
    // 账户号
    // $extendInfoMap["acct_id"]= "";
    // 订单失效时间
    $extendInfoMap["time_expire"]= "20221212121212";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= get581211bf56df4b98814aCdbda319724e();
    // 补贴支付信息
    // $extendInfoMap["combinedpay_data"]= get1d0fed46Cfd94d828be3354035b059ba();
    return $extendInfoMap;
}

function getC775b270E79b4d7cAb26Efb8e716ad46() {
    $dto = array();
    // 支付金额
    // $dto["div_amt"] = "";
    // 商户号
    // $dto["huifu_id"] = "";
    // 分账百分比%
    // $dto["percentage_div"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get581211bf56df4b98814aCdbda319724e() {
    $dto = array();
    // 分账信息列表
    // $dto["acct_infos"] = getC775b270E79b4d7cAb26Efb8e716ad46();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get3447c39440aa412c90f88699fb6b0663() {
    $dto = array();
    // 业务种类
    $dto["biz_tp"] = "012345";
    // 商品简称
    $dto["goods_short_name"] = "看看";
    // 网关支付受理渠道
    // $dto["gw_chnnl_tp"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get4e66af86899f45f9800aD701060955fb() {
    $dto = array();
    // 基站地址经纬度、基站地址、IP地址三组信息至少填写一组；&lt;br/&gt;【mcc】+【mnc】+【location_cd】+【lbs_num】&lt;br/&gt;- mcc:移动国家代码，460代表中国；3位长&lt;br/&gt;- mnc：移动网络号码；2位长；&lt;br/&gt;- location_cd：位置区域码，16进制，5位长&lt;br/&gt;- lbs_num：基站编号，16进制，5位长&lt;br/&gt;- 注意若位数不足用空格补足；&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：460001039217563&lt;/font&gt;，460（mcc)， 00(mnc)，10392(location_cd)， 17563(lbs_num)
    $dto["base_station"] = "";
    // ip地址经纬度、基站地址、IP地址三组信息至少填写一组；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：172.28.52.52&lt;/font&gt;
    $dto["ip_addr"] = "192.168.1.1";
    // 纬度纬度整数位不超过2位，小数位不超过6位。格式为：+表示北纬，-表示南纬。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：+37.12&lt;/font&gt;；&lt;br/&gt;经纬度、基站地址、IP地址三组信息至少填写一组
    $dto["latitude"] = "";
    // 经度经度整数位不超过3位，小数位不超过5位；格式为:+表示东经，-表示西经。&lt;font color&#x3D;&quot;green&quot;&gt;示例值：-121.213&lt;/font&gt;；&lt;br/&gt;经纬度、基站地址、IP地址三组信息至少填写一组
    $dto["longitude"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get43a4131185884faf8dd848f1dd88efb1() {
    $dto = array();
    // 交易设备ip
    $dto["device_ip"] = "172.31.31.145";
    // 设备类型
    $dto["device_type"] = "1";
    // 交易设备gps
    // $dto["device_gps"] = "";
    // 交易设备iccid
    // $dto["device_icc_id"] = "";
    // 交易设备imei
    // $dto["device_imei"] = "";
    // 交易设备imsi
    // $dto["device_imsi"] = "";
    // 交易设备mac
    // $dto["device_mac"] = "";
    // 交易设备wifimac
    // $dto["device_wifi_mac"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get1d0fed46Cfd94d828be3354035b059ba() {
    $dto = array();
    // 补贴方汇付编号
    // $dto["huifu_id"] = "test";
    // 补贴方类型
    // $dto["user_type"] = "test";
    // 补贴方账户号
    // $dto["acct_id"] = "test";
    // 补贴金额
    // $dto["amount"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


