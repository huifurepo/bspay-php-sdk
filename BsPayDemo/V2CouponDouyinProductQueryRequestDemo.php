<?php

/**
 * 抖音套餐映射接口 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2CouponDouyinProductQueryRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2CouponDouyinProductQueryRequest;

// 2.组装请求参数
$request = new V2CouponDouyinProductQueryRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 汇付商户号
$request->setHuifuId("6666000108412345");
// 门店绑定流水号
$request->setBindId("7123fc6e5c564f539e73031c08912345");

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
    // 区分商品创建者的查询方式
    $extendInfoMap["goods_creator_type"]= "0";
    // 商品名称
    // $extendInfoMap["product_name"]= "";
    // 是否查询商品全量关联门店
    // $extendInfoMap["query_all_poi"]= "";
    // 筛选在线状态
    $extendInfoMap["status"]= "1";
    // 光标
    // $extendInfoMap["cursor"]= "";
    // 分页数量
    // $extendInfoMap["count"]= "";
    // 门店ID list
    $extendInfoMap["poi_ids"]= "[23,45]";
    // 外部门店ID list
    // $extendInfoMap["ext_ids"]= "";
    return $extendInfoMap;
}


