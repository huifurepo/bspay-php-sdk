<?php

/**
 * 聚合反扫 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradePaymentMicropayRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradePaymentMicropayRequest;

// 2.组装请求参数
$request = new V2TradePaymentMicropayRequest();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 交易金额
$request->setTransAmt("1.01");
// 商品描述
$request->setGoodsDesc("聚合反扫消费");
// 支付授权码
$request->setAuthCode("131135212661863252");
// 安全信息
$request->setRiskCheckData(get89e25583C6c0408988034bbfcffe0e5e());

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
    // 交易有效期
    // $extendInfoMap["time_expire"]= "";
    // 手续费扣款标志
    // $extendInfoMap["fee_flag"]= "";
    // 禁用支付方式
    // $extendInfoMap["limit_pay_type"]= "";
    // 是否延迟交易
    // $extendInfoMap["delay_acct_flag"]= "";
    // 渠道号
    // $extendInfoMap["channel_no"]= "";
    // 补贴支付信息
    // $extendInfoMap["combinedpay_data"]= getCd90b08f8c684b968694C447bb9cec55();
    // 场景类型
    // $extendInfoMap["pay_scene"]= "";
    // 分账对象
    // $extendInfoMap["acct_split_bunch"]= get05b7531868f04c6a97cd8605c627e2e1();
    // 传入分帐遇到优惠的处理规则
    // $extendInfoMap["term_div_coupon_type"]= "";
    // 聚合反扫微信参数集合
    // $extendInfoMap["wx_data"]= get057dc9bbD3254032A84447180a39d1da();
    // 支付宝扩展参数集合
    // $extendInfoMap["alipay_data"]= get5544bfb33cbc44ba98108645a025f2bd();
    // 银联参数集合
    // $extendInfoMap["unionpay_data"]= getBdd4677d08194b13Af41D897f78b711d();
    // 设备信息
    // $extendInfoMap["terminal_device_info"]= get03d1c565C56544a5B3ad165b86e8284f();
    // 异步通知地址
    $extendInfoMap["notify_url"]= "http://www.baidu.com";
    // 交易备注
    // $extendInfoMap["remark"]= "";
    // 账户号
    // $extendInfoMap["acct_id"]= "";
    // 手续费补贴信息
    // $extendInfoMap["trans_fee_allowance_info"]= get31520ca32c0e425fB40fCdefb4033f05();
    return $extendInfoMap;
}

function getCd90b08f8c684b968694C447bb9cec55() {
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

function get71add64e08f34198B928Dd5dd2aab1af() {
    $dto = array();
    // 分账接收方ID
    // $dto["huifu_id"] = "test";
    // 分账金额
    // $dto["div_amt"] = "";
    // 账户号
    // $dto["acct_id"] = "";
    // 分账百分比%
    // $dto["percentage_div"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get05b7531868f04c6a97cd8605c627e2e1() {
    $dto = array();
    // 分账明细
    // $dto["acct_infos"] = get71add64e08f34198B928Dd5dd2aab1af();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getE408879142b7449287e91565371589e3() {
    $dto = array();
    // 商品编码
    // $dto["goods_id"] = "test";
    // 商品数量
    // $dto["quantity"] = "test";
    // 商品名称
    // $dto["goods_name"] = "";
    // 商品单价
    // $dto["price"] = "";
    // 微信侧商品编码
    // $dto["wxpay_goods_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function getFe16897cAb4940c6B52337bcd5be21b0() {
    $dto = array();
    // 单品列表
    // $dto["goods_detail"] = getE408879142b7449287e91565371589e3();
    // 订单原价
    // $dto["cost_price"] = "";
    // 商品小票ID
    // $dto["receipt_id"] = "";

    return $dto;
}

function get65db1235590243ec958dD1a89a33ad25() {
    $dto = array();
    // 门店id
    // $dto["id"] = "";
    // 门店名称
    // $dto["name"] = "";
    // 门店行政区划码
    // $dto["area_code"] = "";
    // 门店详细地址
    // $dto["address"] = "";

    return $dto;
}

function get4c1005a0A9404dc6908b354bf995d66b() {
    $dto = array();
    // 门店信息
    // $dto["store_info"] = get65db1235590243ec958dD1a89a33ad25();

    return $dto;
}

function get057dc9bbD3254032A84447180a39d1da() {
    $dto = array();
    // 收款设备IP直联模式必填字段；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：192.168.2.2&lt;/font&gt;
    // $dto["spbill_create_ip"] = "test";
    // 子商户公众账号id
    // $dto["sub_appid"] = "";
    // 设备号
    // $dto["device_info"] = "";
    // 附加数据
    // $dto["attach"] = "";
    // 商品详情
    // $dto["detail"] = getFe16897cAb4940c6B52337bcd5be21b0();
    // 场景信息
    // $dto["scene_info"] = get4c1005a0A9404dc6908b354bf995d66b();
    // 单品优惠标识
    // $dto["promotion_flag"] = "";
    // 电子发票入口开放标识
    // $dto["receipt"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get3e3518a06c4d4ce7A0fc2dbd089e1092() {
    $dto = array();
    // 商品的编号
    // $dto["goods_id"] = "test";
    // 商品名称
    // $dto["goods_name"] = "test";
    // 商品数量
    // $dto["quantity"] = "test";
    // 商品单价
    // $dto["price"] = "test";
    // 商品类目树
    // $dto["categories_tree"] = "";
    // 商品类目
    // $dto["goods_category"] = "";
    // 商品描述信息
    // $dto["body"] = "";
    // 商品的展示地址
    // $dto["show_url"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get09744c86E6b04f3cAeab289dd800e349() {
    $dto = array();
    // 卡类型
    // $dto["card_type"] = "";
    // 支付宝点餐场景类型
    // $dto["food_order_type"] = "";
    // 花呗分期数
    // $dto["hb_fq_num"] = "";
    // 花呗卖家承担的手续费百分比
    // $dto["hb_fq_seller_percent"] = "";
    // 行业数据回流信息
    // $dto["industry_reflux_info"] = "";
    // 停车场id
    // $dto["parking_id"] = "";
    // 系统商编号
    // $dto["sys_service_provider_id"] = "";

    return $dto;
}

function get9383923b91b046c88f8d1e897e08496c() {
    $dto = array();
    // 姓名
    // $dto["name"] = "";
    // 手机号
    // $dto["mobile"] = "";
    // 证件类型
    // $dto["cert_type"] = "";
    // 证件号
    // $dto["cert_no"] = "";
    // 允许的最小买家年龄
    // $dto["min_age"] = "";
    // 是否强制校验付款人身份信息
    // $dto["fix_buyer"] = "";
    // 是否强制校验身份信息
    // $dto["need_check_info"] = "";

    return $dto;
}

function get5544bfb33cbc44ba98108645a025f2bd() {
    $dto = array();
    // 支付宝的店铺编号
    // $dto["alipay_store_id"] = "";
    // 订单包含的商品列表信息
    // $dto["goods_detail"] = get3e3518a06c4d4ce7A0fc2dbd089e1092();
    // 业务扩展参数
    // $dto["extend_params"] = get09744c86E6b04f3cAeab289dd800e349();
    // 商户操作员编号
    // $dto["operator_id"] = "";
    // 商户门店编号
    // $dto["store_id"] = "";
    // 外部指定买家
    // $dto["ext_user_info"] = get9383923b91b046c88f8d1e897e08496c();
    // 商户业务信息
    // $dto["ali_business_params"] = "";
    // 订单描述
    // $dto["body"] = "";
    // 优惠明细参数
    // $dto["ali_promo_params"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getBdd4677d08194b13Af41D897f78b711d() {
    $dto = array();
    // 币种
    // $dto["currency_code"] = "";
    // 支持发票
    // $dto["invoice_st"] = "";
    // 商户类别
    // $dto["mer_cat_code"] = "";
    // 服务商机构标识码
    // $dto["pnr_ins_id_cd"] = "";
    // 特殊计费信息
    // $dto["specfeeinfo"] = "";
    // 终端号
    // $dto["term_id"] = "";
    // 收款方附加数据
    // $dto["addn_data"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get89e25583C6c0408988034bbfcffe0e5e() {
    $dto = array();
    // ip地址
    $dto["ip_addr"] = "180.167.105.130";
    // 基站地址
    $dto["base_station"] = "192.168.1.1";
    // 纬度
    $dto["latitude"] = "33.3";
    // 经度
    $dto["longitude"] = "33.3";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get03d1c565C56544a5B3ad165b86e8284f() {
    $dto = array();
    // 商户设备类型
    // $dto["mer_device_type"] = "test";
    // 汇付机具号
    // $dto["devs_id"] = "test";
    // 设备类型
    // $dto["device_type"] = "";
    // 交易设备IP
    // $dto["device_ip"] = "";
    // 交易设备MAC
    // $dto["device_mac"] = "";
    // 交易设备IMEI
    // $dto["device_imei"] = "";
    // 交易设备IMSI
    // $dto["device_imsi"] = "";
    // 交易设备ICCID
    // $dto["device_icc_id"] = "";
    // 交易设备WIFIMAC
    // $dto["device_wifi_mac"] = "";
    // 交易设备GPS
    // $dto["device_gps"] = "";
    // 商户终端应用程序版
    // $dto["app_version"] = "";
    // 加密随机因子
    // $dto["encrypt_rand_num"] = "";
    // SIM 卡卡号
    // $dto["icc_id"] = "";
    // 商户终端实时经纬度信息
    // $dto["location"] = "";
    // 商户交易设备IP
    // $dto["mer_device_ip"] = "";
    // 移动国家代码
    // $dto["mobile_country_cd"] = "";
    // 移动网络号码
    // $dto["mobile_net_num"] = "";
    // 商户终端入网认证编号
    // $dto["network_license"] = "";
    // 密文数据
    // $dto["secret_text"] = "";
    // 商户终端序列号
    // $dto["serial_num"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get31520ca32c0e425fB40fCdefb4033f05() {
    $dto = array();
    // 补贴手续费金额
    // $dto["allowance_fee_amt"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


