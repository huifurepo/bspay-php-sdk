<?php

/**
 * 用户业务入驻修改 - 示例
 *
 * @author sdk-generator
 * @Description
 */
namespace BsPayDemo;

// 1. 资源及配置加载
require_once dirname(__FILE__) . "/loader.php";
require_once  dirname(__FILE__). "/../BsPaySdk/request/V2UserBusiModifyRequest.php";

use BsPaySdk\core\BsPayClient;
use BsPaySdk\request\V2UserBusiModifyRequest;

// 2.组装请求参数
$request = new V2UserBusiModifyRequest();
// 请求流水号
$request->setReqSeqId(date("YmdHis").mt_rand());
// 请求日期
$request->setReqDate(date("Ymd"));
// 渠道商汇付Id
$request->setUpperHuifuId("6666000104633228");
// 汇付ID
$request->setHuifuId("6666000104896342");

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
    // 结算信息配置
    $extendInfoMap["settle_config"]= getSettleConfig();
    // 结算卡信息
    $extendInfoMap["card_info"]= getCardInfo();
    // 取现配置列表
    $extendInfoMap["cash_config"]= getCashConfig();
    // 文件列表
    $extendInfoMap["file_list"]= getFileList();
    // 延迟入账开关
    // $extendInfoMap["delay_flag"]= "";
    // 异步请求地址
    $extendInfoMap["async_return_url"]= "//http://service.example.com/to/path";
    return $extendInfoMap;
}

function getSettleConfig() {
    $dto = array();
    // 开通状态
    $dto["settle_status"] = "1";
    // 结算周期
    $dto["settle_cycle"] = "D1";
    // 结算批次号settle_pattern为P0时选填；&lt;br/&gt;0点昨日余额结算批次:0,&lt;/br&gt;1点余额结算批次:100,&lt;/br&gt;2点余额结算批次:200,&lt;/br&gt;3点余额结算批次:300,&lt;/br&gt;4点余额结算批次:400,&lt;/br&gt;5点余额结算批次:500,&lt;/br&gt;6点余额结算批次:600,&lt;/br&gt;7点余额结算批次:700,&lt;/br&gt;8点余额结算批次:800,&lt;/br&gt;9点余额结算批次:900,&lt;/br&gt;10点余额结算批次:1000,&lt;/br&gt;11点余额结算批次:1100,&lt;/br&gt;12点余额结算批次:1200&lt;/br&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：1000&lt;/font&gt;
    $dto["settle_batch_no"] = "0";
    // 是否优先到账settle_pattern为P0时选填， Y：是 N：否（为空默认取值）；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：Y&lt;/font&gt;
    $dto["is_priority_receipt"] = "Y";
    // 自定义结算处理时间settle_pattern为P1时必填， 格式：HHmmss；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：103000&lt;/font&gt;
    $dto["settle_time"] = "";
    // 节假日结算手续费率(%)
    $dto["fixed_ratio"] = "0.1";
    // 起结金额
    $dto["min_amt"] = "0.1";
    // 结算手续费外扣时的账户类型
    $dto["out_settle_acct_type"] = "05";
    // 手续费外扣标记
    $dto["out_settle_flag"] = "1";
    // 结算手续费外扣时的汇付ID
    $dto["out_settle_huifuid"] = "6666000104633228";
    // 留存金额
    $dto["remained_amt"] = "0.1";
    // 结算摘要
    $dto["settle_abstract"] = "吃吃";
    // 结算方式
    $dto["settle_pattern"] = "P0";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCardInfo() {
    $dto = array();
    // 卡类型
    $dto["card_type"] = "0";
    // 卡户名
    $dto["card_name"] = "陈立一";
    // 卡号
    $dto["card_no"] = "6217001210064762000";
    // 银行所在省
    $dto["prov_id"] = "310000";
    // 银行所在市
    $dto["area_id"] = "310100";
    // 银行号对公时必填，对私可以为空；[参见银行编码](https://paas.huifu.com/partners/api/#/csfl/api_csfl_yhbm)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：01020000&lt;/font&gt;
    $dto["bank_code"] = "01050000";
    // 支行联行号对公时联行号、支行名称二选一必填，[点击查看](https://paas.huifu.com/partners/api/#/csfl/api_csfl_yhzhbm)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：102290026507&lt;/font&gt;
    $dto["branch_code"] = "105305264815";
    // 支行名称对公时联行号、支行名称二选一必填，&lt;br/&gt;&lt;font color&#x3D;&quot;green&quot;&gt;示例值：中国工商银行上海市中山北路支行&lt;/font&gt;
    $dto["branch_name"] = "中国建设银行股份有限公司上海平凉路支行";
    // 持卡人证件类型
    $dto["cert_type"] = "00";
    // 持卡人证件号码
    $dto["cert_no"] = "110101197003077000";
    // 持卡人证件有效期类型
    $dto["cert_validity_type"] = "0";
    // 持卡人证件有效期起始日期
    $dto["cert_begin_date"] = "20210806";
    // 持卡人证件有效期截止日期
    $dto["cert_end_date"] = "20410806";
    // 银行卡绑定手机号
    $dto["mp"] = "15556622000";

    return json_encode($dto,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getCashConfig() {
    $dto = array();
    // 开通状态
    $dto["switch_state"] = "1";
    // 取现手续费率（%）fix_amt与fee_rate至少填写一项，单位%，需保留小数点后两位，取值范围[0.00,100.00]，不收费请填写0.00；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：0.05&lt;/font&gt;&lt;br/&gt;注：如果fix_amt与fee_rate都填写了则手续费&#x3D;fix_amt+支付金额\*fee_rate
    $dto["fee_rate"] = "0.05";
    // 业务类型
    $dto["cash_type"] = "D0";
    // 提现手续费（固定/元）
    $dto["fix_amt"] = "3";
    // 是否交易手续费外扣
    $dto["out_fee_flag"] = "1";
    // 手续费承担方
    $dto["out_fee_huifu_id"] = "6666000104633228";
    // 交易手续费外扣的账户类型
    $dto["out_fee_acct_type"] = "05";
    // 是否优先到账
    // $dto["is_priority_receipt"] = "";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}

function getFileList() {
    $dto = array();
    // 文件类型
    $dto["file_type"] = "F02";
    // 文件jfileID
    $dto["file_id"] = "99e00421-dad7-3334-9538-4f2ad10612d5";
    // 文件名称
    $dto["file_name"] = "企业营业执照1.jpg";

    $dtoList = array();
    array_push($dtoList, $dto);
    return json_encode($dtoList,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}


