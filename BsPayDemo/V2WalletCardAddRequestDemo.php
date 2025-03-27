<?php

/**
 * 新增绑定卡 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2WalletCardAddRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2WalletCardAddRequest;

// 2.组装请求参数
$request = new V2WalletCardAddRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 商户号
$request->setHuifuId("6666000103423237");
// 钱包用户ID
$request->setUserHuifuId("6666000103423833");
// 跳转地址
$request->setFrontUrl("https://www.huifu.com/products-services/");
// 设备信息域
// $request->setTrxDeviceInfo (getBbe177cf039a4567A0891ce62fea3820());

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
    // 请求失效时间
    $extendInfoMap["time_expired"]= "";
    // 钱包绑定卡信息
    // $extendInfoMap[" bind_card_info"]= getBd56beb5B3424befBeff624685462a90();
    // 密码页面类型
    $extendInfoMap["request_type"]= "M";
    // 异步通知地址
    $extendInfoMap["notify_url"]= "https://bspay-stag.cloudpnr.com/sw/manager/callback/store";
    // 风控信息
    // $extendInfoMap["risk_info "]= get52dc979d32ba4938Be366011f7b0b5ff();
    return $extendInfoMap;
}

function getBd56beb5B3424befBeff624685462a90() {
    $dto = array();
    // 银行卡号
    // $dto["card_no"] = "test";
    // 银行卡绑定手机号
    // $dto["card_mobile"] = "test";
    // CVV2银联卡类型为&quot;C&quot;信用卡时，该字段必传。需要密文传输，请参考[加密解密说明](https://paas.huifu.com/open/doc/guide/#/api_jiami_jiemi)使用汇付RSA公钥加密。  &lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：17BTTQrV8whfiVXSo1LKjLS4jesm182OJSmz5fZ3&lt;/font&gt;
    // $dto["vip_code"] = "test";
    // 卡有效期银联卡类型为&quot;C&quot;信用卡时，该字段必传。格式：MMYY。 &lt;br/&gt;需要密文传输，使用汇付RSA公钥加密(加密前4位，加密后99999）需要密文传输，请参考[加密解密说明](https://paas.huifu.com/open/doc/guide/#/api_jiami_jiemi)使用汇付RSA公钥加密。  &lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：5TuPJzmSz3Nl36wWVruekAamrv0W7o0PqmPOIOQIyq&lt;/font&gt;
    // $dto["expiration"] = "test";
    // 身份证照片人像面首次绑定银行卡时，需上传身份证照片。文件类型：F40  &lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;
    // $dto["cert_img_portrait"] = "test";
    // 身份证照片国徽面首次绑定银行卡时，需上传身份证照片。文件类型：F41  &lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e529&lt;/font&gt;
    // $dto["cert_img_emblem"] = "test";
    // 银行卡类型
    // $dto["dc_type"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBbe177cf039a4567A0891ce62fea3820() {
    $dto = array();
    // 银行预留手机号
    // $dto["trx_mobile_num"] = "test";
    // 设备类型
    // $dto["trx_device_type"] = "test";
    // 交易设备IP
    // $dto["trx_device_ip"] = "test";
    // 交易设备MAC
    // $dto["trx_device_mac"] = "test";
    // 交易设备IMEI
    // $dto["trx_device_imei"] = "test";
    // 交易设备IMSI
    // $dto["trx_device_imsi"] = "test";
    // 交易设备ICCID
    // $dto["trx_device_icc_id"] = "test";
    // 交易设备WIFIMAC
    // $dto["trx_device_wfifi_mac"] = "test";
    // 交易设备GPS
    // $dto["trx_device_gps"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get52dc979d32ba4938Be366011f7b0b5ff() {
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


