<?php

/**
 * H5、PC预下单接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2TradeHostingPaymentPreorderH5Request.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2TradeHostingPaymentPreorderH5Request;

// 2.组装请求参数
$request = new V2TradeHostingPaymentPreorderH5Request();
// 请求日期
$request->setReqDate(date("Ymd"));
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 商户号
$request->setHuifuId("6666000109133323");
// 交易金额
$request->setTransAmt("0.10");
// 商品描述
$request->setGoodsDesc("个人电脑");
// 预下单类型
$request->setPreOrderType("1");
// 统一收银台扩展参数集合
$request->setHostingData(get55b393a2841f4a59Bfb96d38135239e5());

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
    // 收款汇付账户号
    // $extendInfoMap["acct_id"]= "";
    // 是否延迟交易
    $extendInfoMap["delay_acct_flag"]= "N";
    // 是否支持切换支付方式
    // $extendInfoMap["multi_pay_way_flag"]= "";
    // 是否合单支付
    // $extendInfoMap["merge_pay_flag"]= "";
    // 子单信息列表
    // $extendInfoMap["sub_orders_request"]= get24d66a66769343fcB15cC07e9edf8ae5();
    // 分账对象
    $extendInfoMap["acct_split_bunch"]= get1ace64c65ee34d448e993b67ba75292b();
    // 交易失效时间
    // $extendInfoMap["time_expire"]= "";
    // 业务信息
    $extendInfoMap["biz_info"]= get19da68a6A3a04c1987813ab73e047264();
    // 交易异步通知地址
    $extendInfoMap["notify_url"]= "https://callback.service.com/xx";
    // 使用类型
    // $extendInfoMap["usage_type"]= "";
    // 交易类型
    // $extendInfoMap["trans_type"]= "";
    // 微信参数集合
    // $extendInfoMap["wx_data"]= get62f53f8d0a2d4c6d8378Ae3a302ddc20();
    // 支付宝参数集合
    // $extendInfoMap["alipay_data"]= get519de5a422cd4982B45239fd765d5baf();
    // 抖音参数集合
    // $extendInfoMap["dy_data"]= get3249d71d136b4880A1c29b49ef82db4d();
    // 银联参数集合
    // $extendInfoMap["unionpay_data"]= get8c20fb3c3601479c8acd7ae68f2b6438();
    // 设备信息
    // $extendInfoMap["terminal_device_data"]= getF07aff2673f54a0fA5a7F13a5fb7c3a2();
    // 大额支付参数集合
    // $extendInfoMap["largeamt_data"]= get62729688372e45ec81b0238c2900a767();
    // 手续费场景标识
    // $extendInfoMap["fee_sign"]= "";
    // 是否交易手续费分摊
    // $extendInfoMap["fee_split_flag"]= "";
    // 手续费扣款标志
    // $extendInfoMap["fee_flag"]= "";
    // 渠道号
    // $extendInfoMap["channel_no"]= "";
    // 场景类型
    // $extendInfoMap["pay_scene"]= "";
    return $extendInfoMap;
}

function get24d66a66769343fcB15cC07e9edf8ae5() {
    $dto = array();
    // 子单请求流水号
    // $dto["sub_req_seq_id"] = "test";
    // 子单商户号
    // $dto["sub_huifu_id"] = "test";
    // 子单交易金额
    // $dto["sub_trans_amt"] = "test";
    // 子单账户号
    // $dto["sub_acct_id"] = "";
    // 是否延迟交易
    // $dto["delay_acct_flag"] = "";
    // 子单备注
    // $dto["sub_remark"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getB2bc57d11ef347b08e034a1d54ec83c8() {
    $dto = array();
    // 分账金额
    $dto["div_amt"] = "0.08";
    // 分账接收方ID
    $dto["huifu_id"] = "6666000111546360";
    // 收款汇付账户号
    // $dto["acct_id"] = "";
    // 分账百分比%
    // $dto["percentage_div"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get1ace64c65ee34d448e993b67ba75292b() {
    $dto = array();
    // 分账明细
    $dto["acct_infos"] = getB2bc57d11ef347b08e034a1d54ec83c8();
    // 百分比分账标志
    // $dto["percentage_flag"] = "";
    // 是否净值分账
    // $dto["is_clean_split"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get55b393a2841f4a59Bfb96d38135239e5() {
    $dto = array();
    // 项目标题
    $dto["project_title"] = "收银台标题";
    // 项目号
    $dto["project_id"] = "PROJECTID2023101225142567";
    // 请求类型P:PC页面版，默认：P；M:H5页面版；指定交易类型时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：M&lt;/font&gt;
    // $dto["request_type"] = "test";
    // 商户私有信息
    $dto["private_info"] = "商户私有信息test";
    // 回调地址
    $dto["callback_url"] = "https://paas.huifu.com";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get43fc48ee047d4950Bed8Da9a2ccdda66() {
    $dto = array();
    // 是否提供校验身份信息
    $dto["need_check_info"] = "T";
    // 允许的最小买家年龄
    $dto["min_age"] = "12";
    // 是否强制校验付款人身份信息
    $dto["fix_buyer"] = "F";

    return $dto;
}

function get049a5d53E77242499fc4Ff86c0e86b4d() {
    $dto = array();
    // 指定支付者
    $dto["limit_payer"] = "ADULT";
    // 微信实名验证
    $dto["real_name_flag"] = "Y";

    return $dto;
}

function getEf99731aEb41405e958390ba6293b69b() {
    $dto = array();
    // 姓名
    $dto["name"] = "张三";
    // 证件类型
    $dto["cert_type"] = "IDENTITY_CARD";
    // 证件号
    $dto["cert_no"] = "OLOxrl809XmVIMmPRTIyIpJHxi4HFMJNmxGz1nhZAtps9xPEVDysU3UZPBZfsNFLFcXEMENPsJ+tymbYt42dNQ+76hyEtx+qz0BQhU8SKV8H5itrI4kaXpaJf+sV8OewrJkhDidPdz01vqMEDQRhaMnNwl8snHZxDdpu7HVUz5JwsLYfBbZP2Q4CZpVWS3NunQahZ8zHQ+8EhvYVH1vE7f/M6nJt1/4GoHz9C/UnuYudV0S2uBhlywbX+YkRGNMl/oz5+UNeMDA2jqhtTreSD4+w7S82L53rqKsAbosodOPo4OAMZk4/0QOH5LDbqFByVM97mzHfw7z+Tx/dsXJ8QQ==";
    // 手机号
    $dto["mobile"] = "15012345678";

    return $dto;
}

function get19da68a6A3a04c1987813ab73e047264() {
    $dto = array();
    // 付款人验证（支付宝）
    $dto["payer_check_ali"] = get43fc48ee047d4950Bed8Da9a2ccdda66();
    // 付款人验证（微信）
    $dto["payer_check_wx"] = get049a5d53E77242499fc4Ff86c0e86b4d();
    // 个人付款人信息
    $dto["person_payer"] = getEf99731aEb41405e958390ba6293b69b();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getD3280e6245f2436cBf4aF9e9110e38f9() {
    $dto = array();
    // 商品编码
    // $dto["goods_id"] = "";
    // 商品名称
    // $dto["goods_name"] = "";
    // 商品单价(元)
    // $dto["price"] = "";
    // 商品数量
    // $dto["quantity"] = "";
    // 微信侧商品编码
    // $dto["wxpay_goods_id"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get50503540Fb1f4941Ac18Ba9c04c49d40() {
    $dto = array();
    // 单品列表
    // $dto["goods_detail"] = getD3280e6245f2436cBf4aF9e9110e38f9();
    // 订单原价(元)
    // $dto["cost_price"] = "";
    // 商品小票ID
    // $dto["receipt_id"] = "";

    return $dto;
}

function getC5cedff81ab548d38a07Ac836f2a817e() {
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

function get02308f8c365f419dB150Bdcb32bacbfd() {
    $dto = array();
    // 门店信息
    // $dto["store_info"] = getC5cedff81ab548d38a07Ac836f2a817e();

    return $dto;
}

function get62f53f8d0a2d4c6d8378Ae3a302ddc20() {
    $dto = array();
    // 附加数据
    // $dto["attach"] = "";
    // 商品详情
    // $dto["detail"] = get50503540Fb1f4941Ac18Ba9c04c49d40();
    // 订单优惠标记
    // $dto["goods_tag"] = "";
    // 开发票入口开放标识
    // $dto["receipt"] = "";
    // 场景信息
    // $dto["scene_info"] = get02308f8c365f419dB150Bdcb32bacbfd();
    // 单品优惠标识
    // $dto["promotion_flag"] = "";
    // 新增商品ID
    // $dto["product_id"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get6f7c90ceD01a4493AdbcAd58b7b74f01() {
    $dto = array();
    // 卡类型
    // $dto["card_type"] = "";
    // 支付宝点餐场景类型
    // $dto["food_order_type"] = "";
    // 花呗分期数
    // $dto["hb_fq_num"] = "";
    // 花呗卖家手续费百分比
    // $dto["hb_fq_seller_percent"] = "";
    // 行业数据回流信息
    // $dto["industry_reflux_info"] = "";
    // 信用卡分期资产方式
    // $dto["fq_channels"] = "";
    // 停车场id
    // $dto["parking_id"] = "";
    // 系统商编号
    // $dto["sys_service_provider_id"] = "";

    return $dto;
}

function getB764584c2be049628ac30f4517d6fbff() {
    $dto = array();
    // 商品的编号
    // $dto["goods_id"] = "test";
    // 商品名称
    // $dto["goods_name"] = "test";
    // 商品单价(元)
    // $dto["price"] = "test";
    // 商品数量
    // $dto["quantity"] = "test";
    // 商品描述信息
    // $dto["body"] = "";
    // 商品类目树
    // $dto["categories_tree"] = "";
    // 商品类目
    // $dto["goods_category"] = "";
    // 商品的展示地址
    // $dto["show_url"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return $dtoList;
}

function get519de5a422cd4982B45239fd765d5baf() {
    $dto = array();
    // 支付宝的店铺编号
    // $dto["alipay_store_id"] = "";
    // 业务扩展参数
    // $dto["extend_params"] = get6f7c90ceD01a4493AdbcAd58b7b74f01();
    // 订单包含的商品列表信息
    // $dto["goods_detail"] = getB764584c2be049628ac30f4517d6fbff();
    // 商户原始订单号
    // $dto["merchant_order_no"] = "";
    // 商户操作员编号
    // $dto["operator_id"] = "";
    // 销售产品码
    // $dto["product_code"] = "";
    // 卖家支付宝用户号
    // $dto["seller_id"] = "";
    // 商户门店编号
    // $dto["store_id"] = "";
    // 订单标题
    // $dto["subject"] = "";
    // 商家门店名称
    // $dto["store_name"] = "";
    // 商户业务信息
    // $dto["ali_business_params"] = "";
    // 商户贴息标记
    // $dto["fq_mer_discount_flag"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get47c29ae24c594f4a83357aed216d840b() {
    $dto = array();
    // 场景类型
    // $dto["type"] = "test";
    // 应用名称
    // $dto["app_name"] = "";
    // 网站URL
    // $dto["app_url"] = "";
    // iOS平台BundleID
    // $dto["bundle_id"] = "";
    // Android平台PackageName
    // $dto["package_name"] = "";

    return $dto;
}

function getBe76f76c82ba4d0eBa32A54942e7c8bb() {
    $dto = array();
    // 用户终端IP
    // $dto["payer_client_ip"] = "test";

    return $dto;
}

function get3249d71d136b4880A1c29b49ef82db4d() {
    $dto = array();
    // 子商户应用ID
    // $dto["sub_appid"] = "test";
    // H5场景信息
    // $dto["h5_info"] = get47c29ae24c594f4a83357aed216d840b();
    // 场景信息
    // $dto["scene_info"] = getBe76f76c82ba4d0eBa32A54942e7c8bb();
    // 优惠标记
    // $dto["coupon_info"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCd440fbfC2134a48A6bbC39e48eb42a2() {
    $dto = array();
    // 商户类别
    // $dto["mer_cat_code"] = "";
    // 二级商户代码
    // $dto["sub_id"] = "";
    // 二级商户名称
    // $dto["sub_name"] = "";
    // 终端号
    // $dto["term_id"] = "";

    return $dto;
}

function get2e991994471244a4B8adE48fdb2c5403() {
    $dto = array();
    // 服务商订单编号
    // $dto["pnr_order_id"] = "";
    // 服务商密文
    // $dto["pid_sct"] = "";
    // 场景标识
    // $dto["trade_scene"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get8c20fb3c3601479c8acd7ae68f2b6438() {
    $dto = array();
    // 收款方附加数据
    // $dto["addn_data"] = "";
    // 地区信息
    // $dto["area_info"] = "";
    // 前台通知地址
    // $dto["front_url"] = "";
    // 收款方附言
    // $dto["payee_comments"] = "";
    // 收款方信息
    // $dto["payee_info"] = getCd440fbfC2134a48A6bbC39e48eb42a2();
    // 银联分配的服务商机构标识码
    // $dto["pnr_ins_id_cd"] = "";
    // 请求方自定义域
    // $dto["req_reserved"] = "";
    // 终端信息
    // $dto["term_info"] = "";
    // 服务商信息
    // $dto["pid_info"] = get2e991994471244a4B8adE48fdb2c5403();

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getF07aff2673f54a0fA5a7F13a5fb7c3a2() {
    $dto = array();
    // 汇付机具号
    // $dto["devs_id"] = "test";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get62729688372e45ec81b0238c2900a767() {
    $dto = array();
    // 付款方名称
    // $dto["certificate_name"] = "";
    // 付款方银行卡号
    // $dto["bank_card_no"] = "";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


