<?php

/**
 * 发票开具 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2InvoiceOpenRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2InvoiceOpenRequest;

// 2.组装请求参数
$request = new V2InvoiceOpenRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求时间
$request->setReqDate(date("Ymd"));
// 汇付商户号huifu_id与ext_mer_id二选一必填，汇付商户号优先；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000109812123&lt;/font&gt;
$request->setHuifuId("6666000107430944");
// 外部商户号&lt;font color&#x3D;&quot;green&quot;&gt;示例值：&lt;/font&gt;
$request->setExtMerId("");
// 渠道号汇付商户号为空时，必传；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000109812124&lt;/font&gt;
// $request->setChannelId("test");
// 发票类型
$request->setIvcType("1");
// 开票类型
$request->setOpenType("0");
// 购方单位名称
$request->setBuyerName("张三");
// 含税合计金额(元)
$request->setOrderAmt("70.00");
// 冲红原因open_type&#x3D;1时必填01：开票有误02：销货退回03：服务终止04：销售转让
// $request->setRedApplyReason("test");
// 冲红申请来源open_type&#x3D;1时必填01：销方02：购方
// $request->setRedApplySource("test");
// 原发票代码openType&#x3D;1时必填；参见[发票右上角](https://paas.huifu.com/open/doc/api/#/fp/api_fp_yanglitu.md)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：144032209110&lt;/font&gt;
$request->setOriIvcCode("90222082");
// 原发票号码openType&#x3D;1时必填；参见[发票右上角](https://paas.huifu.com/open/doc/api/#/fp/api_fp_yanglitu.md)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：20685767&lt;/font&gt;
$request->setOriIvcNumber("150000020026");
// 开票商品信息
$request->setGoodsInfos(get0836ea582ea54a2eBf31B03c514a80e0());
// 不动产销售特殊字段specialFlag为05时，必填；jsonArray格式
// $request->setEstateSales(get61765e5d4e3547ea986fE0b02a336bd0());
// 不动产租赁特殊字段specialFlag为16时，必填；jsonArray格式
// $request->setEstateLease(get5a5792e6625649409ab3956876eba831());

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
    // 税控盘编号
    $extendInfoMap["tax_device_id"]= "661919694739";
    // 购方单位识别号
    $extendInfoMap["buyer_no"]= "";
    // 购方单位地址
    $extendInfoMap["buyer_address"]= "";
    // 购方单位电话
    $extendInfoMap["buyer_tel"]= "";
    // 购方开户行名称
    $extendInfoMap["buyer_bank_name"]= "";
    // 购方银行账号
    $extendInfoMap["buyer_acct_no"]= "";
    // 购方企业类型
    $extendInfoMap["buyer_ent_type"]= "";
    // 收票人手机号
    $extendInfoMap["rec_ivc_phone"]= "";
    // 收票人邮件
    $extendInfoMap["rec_ivc_email"]= "test@126.com";
    // 备注
    $extendInfoMap["resv"]= "备注";
    // 特殊票种标识
    $extendInfoMap["special_flag"]= "00";
    // 红字信息表编号
    $extendInfoMap["red_info_number"]= "";
    // 开票人信息
    $extendInfoMap["payer_info"]= get5ff3cd19637443d4A6faEa720f02c952();
    // 开票结果异步通知地址
    $extendInfoMap["callback_url"]= "virgo://http://192.168.85.157:30031/sspm/testVirgo";
    // 强制开票标识
    $extendInfoMap["buyer_info_confirm"]= "";
    return $extendInfoMap;
}

function get0836ea582ea54a2eBf31B03c514a80e0() {
    $dto = array();
    // 发票行性质
    $dto["ivc_nature"] = "0";
    // 商品序号ivc_type&#x3D;1 红票必填，要与开具的蓝票商品一致；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：备注&lt;/font&gt;
    $dto["goods_serial_num"] = "";
    // 商品id二选一必填，税收分类编码优先；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：&lt;/font&gt;
    $dto["goods_id"] = "";
    // 商品税收分类编码参考[商品编码](https://cloudpnrcdn.oss-cn-shanghai.aliyuncs.com/opps/api/prod/download_file/fp/%E7%94%B5%E5%AD%90%E5%8F%91%E7%A5%A8%E5%95%86%E5%93%81%E7%BC%96%E7%A0%81.xlsx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1010101090000000000&lt;/font&gt;
    $dto["goods_code"] = "6010000000000000000";
    // 商品名称goodsCode不为空时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：&lt;/font&gt;
    $dto["goods_name"] = "预付卡";
    // 税率goodsCode不为空时必填，最多三位小数；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.130&lt;/font&gt;
    $dto["tax_rate"] = "0.03";
    // 含税标识
    $dto["is_price_con_tax"] = "1";
    // 金额(元)
    $dto["trans_amt"] = "70.00";
    // 规格型号
    $dto["goods_model"] = "";
    // 计量单位
    $dto["goods_unit"] = "";
    // 优惠政策标识
    $dto["preferential_flag"] = "0";
    // 零税率标示
    $dto["zero_tax_rate_flag"] = "";
    // 增值税特殊管理
    $dto["add_tax_spec_manage"] = "";
    // 商品数量
    $dto["goods_count"] = "7";
    // 单价
    $dto["goods_price"] = "10";
    // 折扣金额(元)
    $dto["sale_amt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get5ff3cd19637443d4A6faEa720f02c952() {
    $dto = array();
    // 开票人
    $dto["payer_name"] = "开票人";
    // 收款人
    $dto["payee"] = "收款人";
    // 复核人
    $dto["reviewer"] = "复核";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get61765e5d4e3547ea986fE0b02a336bd0() {
    $dto = array();
    // 不动产地址
    // $dto["addr"] = "test";
    // 不动产详细地址
    // $dto["detail_addr"] = "test";
    // 跨地（市）标志
    // $dto["area_flag"] = "test";
    // 土地增值税项目编号
    // $dto["tax_item_no"] = "test";
    // 不动产单元代码/网签合同备案编号
    // $dto["record_no"] = "test";
    // 核定计税价格
    // $dto["total_amt"] = "test";
    // 实际成交含税金额
    // $dto["deal_amt"] = "test";
    // 房屋产权证书/不动产产权号
    // $dto["estate_no"] = "test";
    // 不动产单位
    // $dto["unit"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function get5a5792e6625649409ab3956876eba831() {
    $dto = array();
    // 不动产地址
    // $dto["addr"] = "test";
    // 不动产详细地址
    // $dto["detail_addr"] = "test";
    // 跨地（市）标志
    // $dto["area_flag"] = "test";
    // 租赁日期起
    // $dto["start_date"] = "test";
    // 租赁日期止
    // $dto["end_date"] = "test";
    // 房屋产权证书/不动产产权号
    // $dto["estate_no"] = "test";
    // 不动产单位
    // $dto["unit"] = "test";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


