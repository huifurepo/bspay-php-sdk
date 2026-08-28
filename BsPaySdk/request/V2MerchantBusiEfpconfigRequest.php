<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 全渠道资金管理配置
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiEfpconfigRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 商户汇付id
     */
    private $huifuId;
    /**
     * 所属渠道商
     */
    private $upperHuifuId;
    /**
     * 支付手续费外扣汇付ID支付手续费外扣标记为1时必填；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：6666000109812123&lt;/font&gt;
     */
    private $outFeeHuifuid;
    /**
     * 全域资金开户使用的银行卡信息首次开通时必填 jsonObject格式
     */
    private $outOrderAcctCard;
    /**
     * 全域资金开户手续费首次开通时必填 jsonObject格式
     */
    private $outOrderAcctOpenFees;
    /**
     * 业务模式acquiringMode:收单模式 switch_state为1时必填
     */
    private $businessModel;
    /**
     * 银行类型switch_state有值时需填写； ht1-华通银行，xw0-XW银行，ss0-苏商银行,wz1-微众银行&lt;font color&#x3D;&quot;green&quot;&gt;示例值：ht1&lt;/font&gt;
     */
    private $outFundsGateId;
    /**
     * 签约人信息switch_state为1时必填 jsonObject格式
     */
    private $signUserInfo;
    /**
     * 入账来源开通全域资金时需填写；01:抖音 02:美团 03:快手 04:拼多多 05:小红书 06:淘宝/天猫/飞猪 07:微信视频号/微信小店 08:京东 09:饿了么 11:得物 12:唯品会 13:携程 14:支付宝直连 15:微信直连 16:滴滴加油 17:团油 18:通联 19:易宝 20:百度 21:顺丰22:希音23:高德 24:贝壳 多个逗号分隔；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：01,02,05&lt;/font&gt;；
     */
    private $acctSource;
    /**
     * 抖音合作证明材料入账来源包含01:抖音时必填 文件类型F535；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dyCooperationProvePic;
    /**
     * 美团合作证明材料入账来源包含02:美团时必填 文件类型F536；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $mtCooperationProvePic;
    /**
     * 快手合作证明材料入账来源包含03:快手时必填 文件类型F537；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ksCooperationProvePic;
    /**
     * 拼多多合作证明材料入账来源包含04:拼多多时必填 文件类型F538；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $pddCooperationProvePic;
    /**
     * 小红书合作证明材料入账来源包含05:小红书时必填 文件类型F539；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xhsCooperationProvePic;
    /**
     * 淘宝天猫飞猪合作证明材料入账来源包含06:淘宝天猫飞猪时必填 文件类型F540；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $zfbCooperationProvePic;
    /**
     * 微信视频号合作证明材料入账来源包含07:微信视频号时必填 文件类型F541；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wxCooperationProvePic;
    /**
     * 京东合作证明材料入账来源包含08:京东时必填 文件类型F542；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $jdCooperationProvePic;
    /**
     * 饿了么合作证明材料入账来源包含09:饿了么时必填 文件类型F543；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $elmCooperationProvePic;
    /**
     * 得物合作证明材料入账来源包含11:得物时必填 文件类型F591；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dwCooperationProvePic;
    /**
     * 唯品会合作证明材料入账来源包含12:唯品会时必填 文件类型F592；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wphCooperationProvePic;
    /**
     * 携程合作证明材料入账来源包含13:携程时必填 文件类型F593；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xcCooperationProvePic;
    /**
     * 支付宝直连合作证明材料入账来源包含14:支付宝直连时必填 文件类型F594；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $zfbzlCooperationProvePic;
    /**
     * 微信直连合作证明材料入账来源包含15:微信直连时必填 文件类型F595；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wxzlCooperationProvePic;
    /**
     * 滴滴加油合作证明材料入账来源包含16:滴滴加油时必填 文件类型F596；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ddjyCooperationProvePic;
    /**
     * 团油合作证明材料入账来源包含17:团油时必填 文件类型F597；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $tyCooperationProvePic;
    /**
     * 通联合作证明材料入账来源包含18:通联时必填 文件类型F598；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $tlCooperationProvePic;
    /**
     * 易宝合作证明材料入账来源包含19:易宝时必填 文件类型F599；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ybCooperationProvePic;
    /**
     * 全渠道资金纸质协议文件协议类型为纸质时必填，文件类型F605；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $efpPaperAgreementFile;
    /**
     * 百度合作证明材料入账来源包含20:百度时必填 文件类型F616；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $bdCooperationProvePic;
    /**
     * 主店商户号是否店群为是时必填
     */
    private $mainStoreHuifuId;
    /**
     * 顺丰合作证明材料入账来源包含21:顺丰时必填 文件类型F618；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $sfCooperationProvePic;
    /**
     * 希音合作证明材料入账来源包含22:希音时必填 文件类型F619；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xyCooperationProvePic;
    /**
     * 高德合作证明材料入账来源包含23:高德时必填 文件类型F615；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $gdCooperationProvePic;
    /**
     * 贝壳合作证明材料入账来源包含24:贝壳时必填 文件类型F802；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $bkCooperationProvePic;
    /**
     * 抖音平台后台交易数据截屏开通微众银行且入账来源包含01:抖音时必填 文件类型F730；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dyPlatformTransDataPic;
    /**
     * 抖音平台后台店铺信息截屏开通微众银行且入账来源包含01:抖音时必填 文件类型F731；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dyPlatformStoreInfoPic;
    /**
     * 抖音平台后台经营主体截屏开通微众银行且入账来源包含01:抖音时必填 文件类型F732；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dyPlatformBusiEntPic;
    /**
     * 抖音平台后台订单明细截屏开通微众银行且入账来源包含01:抖音时必填 文件类型F733；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dyPlatformOrderDetailPic;
    /**
     * 抖音平台后台资金流水截屏开通微众银行且入账来源包含01:抖音时必填 文件类型F734；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dyPlatformFundFlowPic;
    /**
     * 抖音移动端店铺橱窗截屏开通微众银行且入账来源包含01:抖音时必填 文件类型F735；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dyMobileStoreShowcasePic;
    /**
     * 抖音移动端商家资质截屏开通微众银行且入账来源包含01:抖音时必填 文件类型F736；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dyMobileBusiQualificationPic;
    /**
     * 抖音移动端店铺详情截屏开通微众银行且入账来源包含01:抖音时必填 文件类型F737；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dyMobileStoreDetailPic;
    /**
     * 快手平台后台交易数据截屏开通微众银行且入账来源包含03:快手时必填 文件类型F738；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ksPlatformTransDataPic;
    /**
     * 快手平台后台店铺信息截屏开通微众银行且入账来源包含03:快手时必填 文件类型F739；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ksPlatformStoreInfoPic;
    /**
     * 快手平台后台经营主体截屏开通微众银行且入账来源包含03:快手时必填 文件类型F740；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ksPlatformBusiEntPic;
    /**
     * 快手平台后台订单明细截屏开通微众银行且入账来源包含03:快手时必填 文件类型F741；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ksPlatformOrderDetailPic;
    /**
     * 快手平台后台资金流水截屏开通微众银行且入账来源包含03:快手时必填 文件类型F742；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ksPlatformFundFlowPic;
    /**
     * 快手移动端店铺橱窗截屏开通微众银行且入账来源包含03:快手时必填 文件类型F743；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ksMobileStoreShowcasePic;
    /**
     * 快手移动端商家资质截屏开通微众银行且入账来源包含03:快手时必填 文件类型F744；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ksMobileBusiQualificationPic;
    /**
     * 快手移动端店铺详情截屏开通微众银行且入账来源包含03:快手时必填 文件类型F745；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $ksMobileStoreDetailPic;
    /**
     * 拼多多平台后台交易数据截屏开通微众银行且入账来源包含04:拼多多时必填 文件类型F746；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $pddPlatformTransDataPic;
    /**
     * 拼多多平台后台店铺信息截屏开通微众银行且入账来源包含04:拼多多时必填 文件类型F747；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $pddPlatformStoreInfoPic;
    /**
     * 拼多多平台后台经营主体截屏开通微众银行且入账来源包含04:拼多多时必填 文件类型F748；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $pddPlatformBusiEntPic;
    /**
     * 拼多多平台后台订单明细截屏开通微众银行且入账来源包含04:拼多多时必填 文件类型F749；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $pddPlatformOrderDetailPic;
    /**
     * 拼多多平台后台资金流水截屏开通微众银行且入账来源包含04:拼多多时必填 文件类型F750；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $pddPlatformFundFlowPic;
    /**
     * 拼多多移动端店铺橱窗截屏开通微众银行且入账来源包含04:拼多多时必填 文件类型F751；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $pddMobileStoreShowcasePic;
    /**
     * 拼多多移动端商家资质截屏开通微众银行且入账来源包含04:拼多多时必填 文件类型F752；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $pddMobileBusiQualificationPic;
    /**
     * 拼多多移动端店铺详情截屏开通微众银行且入账来源包含04:拼多多时必填 文件类型F753；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $pddMobileStoreDetailPic;
    /**
     * 小红书平台后台交易数据截屏开通微众银行且入账来源包含05:小红书时必填 文件类型F754；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xhsPlatformTransDataPic;
    /**
     * 小红书平台后台店铺信息截屏开通微众银行且入账来源包含05:小红书时必填 文件类型F755；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xhsPlatformStoreInfoPic;
    /**
     * 小红书平台后台经营主体截屏开通微众银行且入账来源包含05:小红书时必填 文件类型F756；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xhsPlatformBusiEntPic;
    /**
     * 小红书平台后台订单明细截屏开通微众银行且入账来源包含05:小红书时必填 文件类型F757；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xhsPlatformOrderDetailPic;
    /**
     * 小红书平台后台资金流水截屏开通微众银行且入账来源包含05:小红书时必填 文件类型F758；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xhsPlatformFundFlowPic;
    /**
     * 小红书移动端店铺橱窗截屏开通微众银行且入账来源包含05:小红书时必填 文件类型F759；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xhsMobileStoreShowcasePic;
    /**
     * 小红书移动端商家资质截屏开通微众银行且入账来源包含05:小红书时必填 文件类型F760；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xhsMobileBusiQualificationPic;
    /**
     * 小红书移动端店铺详情截屏开通微众银行且入账来源包含05:小红书时必填 文件类型F761；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $xhsMobileStoreDetailPic;
    /**
     * 微信视频号平台后台交易数据截屏开通微众银行且入账来源包含07:微信视频号时必填 文件类型F762；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wxsphPlatformTransDataPic;
    /**
     * 微信视频号平台后台店铺信息截屏开通微众银行且入账来源包含07:微信视频号时必填 文件类型F763；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wxsphPlatformStoreInfoPic;
    /**
     * 微信视频号平台后台经营主体截屏开通微众银行且入账来源包含07:微信视频号时必填 文件类型F764；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wxsphPlatformBusiEntPic;
    /**
     * 微信视频号平台后台订单明细截屏开通微众银行且入账来源包含07:微信视频号时必填 文件类型F765；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wxsphPlatformOrderDetailPic;
    /**
     * 微信视频号平台后台资金流水截屏开通微众银行且入账来源包含07:微信视频号时必填 文件类型F766；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wxsphPlatformFundFlowPic;
    /**
     * 微信视频号移动端店铺橱窗截屏开通微众银行且入账来源包含07:微信视频号时必填 文件类型F767；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wxsphMobileStoreShowcasePic;
    /**
     * 微信视频号移动端商家资质截屏开通微众银行且入账来源包含07:微信视频号时必填 文件类型F768；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wxsphMobileBusiQualificationPic;
    /**
     * 微信视频号移动端店铺详情截屏开通微众银行且入账来源包含07:微信视频号时必填 文件类型F769；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wxsphMobileStoreDetailPic;
    /**
     * 京东平台后台交易数据截屏开通微众银行且入账来源包含08:京东时必填 文件类型F770；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $jdPlatformTransDataPic;
    /**
     * 京东平台后台店铺信息截屏开通微众银行且入账来源包含08:京东时必填 文件类型F771；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $jdPlatformStoreInfoPic;
    /**
     * 京东平台后台经营主体截屏开通微众银行且入账来源包含08:京东时必填 文件类型F772；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $jdPlatformBusiEntPic;
    /**
     * 京东平台后台订单明细截屏开通微众银行且入账来源包含08:京东时必填 文件类型F773；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $jdPlatformOrderDetailPic;
    /**
     * 京东平台后台资金流水截屏开通微众银行且入账来源包含08:京东时必填 文件类型F774；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $jdPlatformFundFlowPic;
    /**
     * 京东移动端店铺橱窗截屏开通微众银行且入账来源包含08:京东时必填 文件类型F775；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $jdMobileStoreShowcasePic;
    /**
     * 京东移动端商家资质截屏开通微众银行且入账来源包含08:京东时必填 文件类型F776；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $jdMobileBusiQualificationPic;
    /**
     * 京东移动端店铺详情截屏开通微众银行且入账来源包含08:京东时必填 文件类型F777；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $jdMobileStoreDetailPic;
    /**
     * 得物平台后台交易数据截屏开通微众银行且入账来源包含11:得物时必填 文件类型F778；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dwPlatformTransDataPic;
    /**
     * 得物平台后台店铺信息截屏开通微众银行且入账来源包含11:得物时必填 文件类型F779；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dwPlatformStoreInfoPic;
    /**
     * 得物平台后台经营主体截屏开通微众银行且入账来源包含11:得物时必填 文件类型F780；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dwPlatformBusiEntPic;
    /**
     * 得物平台后台订单明细截屏开通微众银行且入账来源包含11:得物时必填 文件类型F781；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dwPlatformOrderDetailPic;
    /**
     * 得物平台后台资金流水截屏开通微众银行且入账来源包含11:得物时必填 文件类型F782；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dwPlatformFundFlowPic;
    /**
     * 得物移动端店铺橱窗截屏开通微众银行且入账来源包含11:得物时必填 文件类型F783；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dwMobileStoreShowcasePic;
    /**
     * 得物移动端商家资质截屏开通微众银行且入账来源包含11:得物时必填 文件类型F784；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dwMobileBusiQualificationPic;
    /**
     * 得物移动端店铺详情截屏开通微众银行且入账来源包含11:得物时必填 文件类型F785；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $dwMobileStoreDetailPic;
    /**
     * 美团平台后台交易数据截屏开通微众银行且入账来源包含02:美团时必填 文件类型F786；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $mtPlatformTransDataPic;
    /**
     * 美团平台后台店铺信息截屏开通微众银行且入账来源包含02:美团时必填 文件类型F787；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $mtPlatformStoreInfoPic;
    /**
     * 美团平台后台经营主体截屏开通微众银行且入账来源包含02:美团时必填 文件类型F788；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $mtPlatformBusiEntPic;
    /**
     * 美团平台后台订单明细截屏开通微众银行且入账来源包含02:美团时必填 文件类型F789；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $mtPlatformOrderDetailPic;
    /**
     * 美团平台后台资金流水截屏开通微众银行且入账来源包含02:美团时必填 文件类型F790；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $mtPlatformFundFlowPic;
    /**
     * 美团移动端店铺橱窗截屏开通微众银行且入账来源包含02:美团时必填 文件类型F791；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $mtMobileStoreShowcasePic;
    /**
     * 美团移动端商家资质截屏开通微众银行且入账来源包含02:美团时必填 文件类型F792；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $mtMobileBusiQualificationPic;
    /**
     * 美团移动端店铺详情截屏开通微众银行且入账来源包含02:美团时必填 文件类型F793；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $mtMobileStoreDetailPic;
    /**
     * 唯品会平台后台交易数据截屏开通微众银行且入账来源包含12:唯品会时必填 文件类型F794；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wphPlatformTransDataPic;
    /**
     * 唯品会平台后台店铺信息截屏开通微众银行且入账来源包含12:唯品会时必填 文件类型F795；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wphPlatformStoreInfoPic;
    /**
     * 唯品会平台后台经营主体截屏开通微众银行且入账来源包含12:唯品会时必填 文件类型F796；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wphPlatformBusiEntPic;
    /**
     * 唯品会平台后台订单明细截屏开通微众银行且入账来源包含12:唯品会时必填 文件类型F797；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wphPlatformOrderDetailPic;
    /**
     * 唯品会平台后台资金流水截屏开通微众银行且入账来源包含12:唯品会时必填 文件类型F798；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wphPlatformFundFlowPic;
    /**
     * 唯品会移动端店铺橱窗截屏开通微众银行且入账来源包含12:唯品会时必填 文件类型F799；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wphMobileStoreShowcasePic;
    /**
     * 唯品会移动端商家资质截屏开通微众银行且入账来源包含12:唯品会时必填 文件类型F800；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wphMobileBusiQualificationPic;
    /**
     * 唯品会移动端店铺详情截屏开通微众银行且入账来源包含12:唯品会时必填 文件类型F801；详见[文件类型说明](https://paas.huifu.com/open/doc/api/#/csfl/api_csfl_wjlx)；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：57cc7f00-600a-33ab-b614-6221bbf2e530&lt;/font&gt;
     */
    private $wphMobileStoreDetailPic;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_EFPCONFIG;
    }


    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getUpperHuifuId() {
        return $this->upperHuifuId;
    }

    public function setUpperHuifuId($upperHuifuId) {
        $this->upperHuifuId = $upperHuifuId;
    }

    public function getOutFeeHuifuid() {
        return $this->outFeeHuifuid;
    }

    public function setOutFeeHuifuid($outFeeHuifuid) {
        $this->outFeeHuifuid = $outFeeHuifuid;
    }

    public function getOutOrderAcctCard() {
        return $this->outOrderAcctCard;
    }

    public function setOutOrderAcctCard($outOrderAcctCard) {
        $this->outOrderAcctCard = $outOrderAcctCard;
    }

    public function getOutOrderAcctOpenFees() {
        return $this->outOrderAcctOpenFees;
    }

    public function setOutOrderAcctOpenFees($outOrderAcctOpenFees) {
        $this->outOrderAcctOpenFees = $outOrderAcctOpenFees;
    }

    public function getBusinessModel() {
        return $this->businessModel;
    }

    public function setBusinessModel($businessModel) {
        $this->businessModel = $businessModel;
    }

    public function getOutFundsGateId() {
        return $this->outFundsGateId;
    }

    public function setOutFundsGateId($outFundsGateId) {
        $this->outFundsGateId = $outFundsGateId;
    }

    public function getSignUserInfo() {
        return $this->signUserInfo;
    }

    public function setSignUserInfo($signUserInfo) {
        $this->signUserInfo = $signUserInfo;
    }

    public function getAcctSource() {
        return $this->acctSource;
    }

    public function setAcctSource($acctSource) {
        $this->acctSource = $acctSource;
    }

    public function getDyCooperationProvePic() {
        return $this->dyCooperationProvePic;
    }

    public function setDyCooperationProvePic($dyCooperationProvePic) {
        $this->dyCooperationProvePic = $dyCooperationProvePic;
    }

    public function getMtCooperationProvePic() {
        return $this->mtCooperationProvePic;
    }

    public function setMtCooperationProvePic($mtCooperationProvePic) {
        $this->mtCooperationProvePic = $mtCooperationProvePic;
    }

    public function getKsCooperationProvePic() {
        return $this->ksCooperationProvePic;
    }

    public function setKsCooperationProvePic($ksCooperationProvePic) {
        $this->ksCooperationProvePic = $ksCooperationProvePic;
    }

    public function getPddCooperationProvePic() {
        return $this->pddCooperationProvePic;
    }

    public function setPddCooperationProvePic($pddCooperationProvePic) {
        $this->pddCooperationProvePic = $pddCooperationProvePic;
    }

    public function getXhsCooperationProvePic() {
        return $this->xhsCooperationProvePic;
    }

    public function setXhsCooperationProvePic($xhsCooperationProvePic) {
        $this->xhsCooperationProvePic = $xhsCooperationProvePic;
    }

    public function getZfbCooperationProvePic() {
        return $this->zfbCooperationProvePic;
    }

    public function setZfbCooperationProvePic($zfbCooperationProvePic) {
        $this->zfbCooperationProvePic = $zfbCooperationProvePic;
    }

    public function getWxCooperationProvePic() {
        return $this->wxCooperationProvePic;
    }

    public function setWxCooperationProvePic($wxCooperationProvePic) {
        $this->wxCooperationProvePic = $wxCooperationProvePic;
    }

    public function getJdCooperationProvePic() {
        return $this->jdCooperationProvePic;
    }

    public function setJdCooperationProvePic($jdCooperationProvePic) {
        $this->jdCooperationProvePic = $jdCooperationProvePic;
    }

    public function getElmCooperationProvePic() {
        return $this->elmCooperationProvePic;
    }

    public function setElmCooperationProvePic($elmCooperationProvePic) {
        $this->elmCooperationProvePic = $elmCooperationProvePic;
    }

    public function getDwCooperationProvePic() {
        return $this->dwCooperationProvePic;
    }

    public function setDwCooperationProvePic($dwCooperationProvePic) {
        $this->dwCooperationProvePic = $dwCooperationProvePic;
    }

    public function getWphCooperationProvePic() {
        return $this->wphCooperationProvePic;
    }

    public function setWphCooperationProvePic($wphCooperationProvePic) {
        $this->wphCooperationProvePic = $wphCooperationProvePic;
    }

    public function getXcCooperationProvePic() {
        return $this->xcCooperationProvePic;
    }

    public function setXcCooperationProvePic($xcCooperationProvePic) {
        $this->xcCooperationProvePic = $xcCooperationProvePic;
    }

    public function getZfbzlCooperationProvePic() {
        return $this->zfbzlCooperationProvePic;
    }

    public function setZfbzlCooperationProvePic($zfbzlCooperationProvePic) {
        $this->zfbzlCooperationProvePic = $zfbzlCooperationProvePic;
    }

    public function getWxzlCooperationProvePic() {
        return $this->wxzlCooperationProvePic;
    }

    public function setWxzlCooperationProvePic($wxzlCooperationProvePic) {
        $this->wxzlCooperationProvePic = $wxzlCooperationProvePic;
    }

    public function getDdjyCooperationProvePic() {
        return $this->ddjyCooperationProvePic;
    }

    public function setDdjyCooperationProvePic($ddjyCooperationProvePic) {
        $this->ddjyCooperationProvePic = $ddjyCooperationProvePic;
    }

    public function getTyCooperationProvePic() {
        return $this->tyCooperationProvePic;
    }

    public function setTyCooperationProvePic($tyCooperationProvePic) {
        $this->tyCooperationProvePic = $tyCooperationProvePic;
    }

    public function getTlCooperationProvePic() {
        return $this->tlCooperationProvePic;
    }

    public function setTlCooperationProvePic($tlCooperationProvePic) {
        $this->tlCooperationProvePic = $tlCooperationProvePic;
    }

    public function getYbCooperationProvePic() {
        return $this->ybCooperationProvePic;
    }

    public function setYbCooperationProvePic($ybCooperationProvePic) {
        $this->ybCooperationProvePic = $ybCooperationProvePic;
    }

    public function getEfpPaperAgreementFile() {
        return $this->efpPaperAgreementFile;
    }

    public function setEfpPaperAgreementFile($efpPaperAgreementFile) {
        $this->efpPaperAgreementFile = $efpPaperAgreementFile;
    }

    public function getBdCooperationProvePic() {
        return $this->bdCooperationProvePic;
    }

    public function setBdCooperationProvePic($bdCooperationProvePic) {
        $this->bdCooperationProvePic = $bdCooperationProvePic;
    }

    public function getMainStoreHuifuId() {
        return $this->mainStoreHuifuId;
    }

    public function setMainStoreHuifuId($mainStoreHuifuId) {
        $this->mainStoreHuifuId = $mainStoreHuifuId;
    }

    public function getSfCooperationProvePic() {
        return $this->sfCooperationProvePic;
    }

    public function setSfCooperationProvePic($sfCooperationProvePic) {
        $this->sfCooperationProvePic = $sfCooperationProvePic;
    }

    public function getXyCooperationProvePic() {
        return $this->xyCooperationProvePic;
    }

    public function setXyCooperationProvePic($xyCooperationProvePic) {
        $this->xyCooperationProvePic = $xyCooperationProvePic;
    }

    public function getGdCooperationProvePic() {
        return $this->gdCooperationProvePic;
    }

    public function setGdCooperationProvePic($gdCooperationProvePic) {
        $this->gdCooperationProvePic = $gdCooperationProvePic;
    }

    public function getBkCooperationProvePic() {
        return $this->bkCooperationProvePic;
    }

    public function setBkCooperationProvePic($bkCooperationProvePic) {
        $this->bkCooperationProvePic = $bkCooperationProvePic;
    }

    public function getDyPlatformTransDataPic() {
        return $this->dyPlatformTransDataPic;
    }

    public function setDyPlatformTransDataPic($dyPlatformTransDataPic) {
        $this->dyPlatformTransDataPic = $dyPlatformTransDataPic;
    }

    public function getDyPlatformStoreInfoPic() {
        return $this->dyPlatformStoreInfoPic;
    }

    public function setDyPlatformStoreInfoPic($dyPlatformStoreInfoPic) {
        $this->dyPlatformStoreInfoPic = $dyPlatformStoreInfoPic;
    }

    public function getDyPlatformBusiEntPic() {
        return $this->dyPlatformBusiEntPic;
    }

    public function setDyPlatformBusiEntPic($dyPlatformBusiEntPic) {
        $this->dyPlatformBusiEntPic = $dyPlatformBusiEntPic;
    }

    public function getDyPlatformOrderDetailPic() {
        return $this->dyPlatformOrderDetailPic;
    }

    public function setDyPlatformOrderDetailPic($dyPlatformOrderDetailPic) {
        $this->dyPlatformOrderDetailPic = $dyPlatformOrderDetailPic;
    }

    public function getDyPlatformFundFlowPic() {
        return $this->dyPlatformFundFlowPic;
    }

    public function setDyPlatformFundFlowPic($dyPlatformFundFlowPic) {
        $this->dyPlatformFundFlowPic = $dyPlatformFundFlowPic;
    }

    public function getDyMobileStoreShowcasePic() {
        return $this->dyMobileStoreShowcasePic;
    }

    public function setDyMobileStoreShowcasePic($dyMobileStoreShowcasePic) {
        $this->dyMobileStoreShowcasePic = $dyMobileStoreShowcasePic;
    }

    public function getDyMobileBusiQualificationPic() {
        return $this->dyMobileBusiQualificationPic;
    }

    public function setDyMobileBusiQualificationPic($dyMobileBusiQualificationPic) {
        $this->dyMobileBusiQualificationPic = $dyMobileBusiQualificationPic;
    }

    public function getDyMobileStoreDetailPic() {
        return $this->dyMobileStoreDetailPic;
    }

    public function setDyMobileStoreDetailPic($dyMobileStoreDetailPic) {
        $this->dyMobileStoreDetailPic = $dyMobileStoreDetailPic;
    }

    public function getKsPlatformTransDataPic() {
        return $this->ksPlatformTransDataPic;
    }

    public function setKsPlatformTransDataPic($ksPlatformTransDataPic) {
        $this->ksPlatformTransDataPic = $ksPlatformTransDataPic;
    }

    public function getKsPlatformStoreInfoPic() {
        return $this->ksPlatformStoreInfoPic;
    }

    public function setKsPlatformStoreInfoPic($ksPlatformStoreInfoPic) {
        $this->ksPlatformStoreInfoPic = $ksPlatformStoreInfoPic;
    }

    public function getKsPlatformBusiEntPic() {
        return $this->ksPlatformBusiEntPic;
    }

    public function setKsPlatformBusiEntPic($ksPlatformBusiEntPic) {
        $this->ksPlatformBusiEntPic = $ksPlatformBusiEntPic;
    }

    public function getKsPlatformOrderDetailPic() {
        return $this->ksPlatformOrderDetailPic;
    }

    public function setKsPlatformOrderDetailPic($ksPlatformOrderDetailPic) {
        $this->ksPlatformOrderDetailPic = $ksPlatformOrderDetailPic;
    }

    public function getKsPlatformFundFlowPic() {
        return $this->ksPlatformFundFlowPic;
    }

    public function setKsPlatformFundFlowPic($ksPlatformFundFlowPic) {
        $this->ksPlatformFundFlowPic = $ksPlatformFundFlowPic;
    }

    public function getKsMobileStoreShowcasePic() {
        return $this->ksMobileStoreShowcasePic;
    }

    public function setKsMobileStoreShowcasePic($ksMobileStoreShowcasePic) {
        $this->ksMobileStoreShowcasePic = $ksMobileStoreShowcasePic;
    }

    public function getKsMobileBusiQualificationPic() {
        return $this->ksMobileBusiQualificationPic;
    }

    public function setKsMobileBusiQualificationPic($ksMobileBusiQualificationPic) {
        $this->ksMobileBusiQualificationPic = $ksMobileBusiQualificationPic;
    }

    public function getKsMobileStoreDetailPic() {
        return $this->ksMobileStoreDetailPic;
    }

    public function setKsMobileStoreDetailPic($ksMobileStoreDetailPic) {
        $this->ksMobileStoreDetailPic = $ksMobileStoreDetailPic;
    }

    public function getPddPlatformTransDataPic() {
        return $this->pddPlatformTransDataPic;
    }

    public function setPddPlatformTransDataPic($pddPlatformTransDataPic) {
        $this->pddPlatformTransDataPic = $pddPlatformTransDataPic;
    }

    public function getPddPlatformStoreInfoPic() {
        return $this->pddPlatformStoreInfoPic;
    }

    public function setPddPlatformStoreInfoPic($pddPlatformStoreInfoPic) {
        $this->pddPlatformStoreInfoPic = $pddPlatformStoreInfoPic;
    }

    public function getPddPlatformBusiEntPic() {
        return $this->pddPlatformBusiEntPic;
    }

    public function setPddPlatformBusiEntPic($pddPlatformBusiEntPic) {
        $this->pddPlatformBusiEntPic = $pddPlatformBusiEntPic;
    }

    public function getPddPlatformOrderDetailPic() {
        return $this->pddPlatformOrderDetailPic;
    }

    public function setPddPlatformOrderDetailPic($pddPlatformOrderDetailPic) {
        $this->pddPlatformOrderDetailPic = $pddPlatformOrderDetailPic;
    }

    public function getPddPlatformFundFlowPic() {
        return $this->pddPlatformFundFlowPic;
    }

    public function setPddPlatformFundFlowPic($pddPlatformFundFlowPic) {
        $this->pddPlatformFundFlowPic = $pddPlatformFundFlowPic;
    }

    public function getPddMobileStoreShowcasePic() {
        return $this->pddMobileStoreShowcasePic;
    }

    public function setPddMobileStoreShowcasePic($pddMobileStoreShowcasePic) {
        $this->pddMobileStoreShowcasePic = $pddMobileStoreShowcasePic;
    }

    public function getPddMobileBusiQualificationPic() {
        return $this->pddMobileBusiQualificationPic;
    }

    public function setPddMobileBusiQualificationPic($pddMobileBusiQualificationPic) {
        $this->pddMobileBusiQualificationPic = $pddMobileBusiQualificationPic;
    }

    public function getPddMobileStoreDetailPic() {
        return $this->pddMobileStoreDetailPic;
    }

    public function setPddMobileStoreDetailPic($pddMobileStoreDetailPic) {
        $this->pddMobileStoreDetailPic = $pddMobileStoreDetailPic;
    }

    public function getXhsPlatformTransDataPic() {
        return $this->xhsPlatformTransDataPic;
    }

    public function setXhsPlatformTransDataPic($xhsPlatformTransDataPic) {
        $this->xhsPlatformTransDataPic = $xhsPlatformTransDataPic;
    }

    public function getXhsPlatformStoreInfoPic() {
        return $this->xhsPlatformStoreInfoPic;
    }

    public function setXhsPlatformStoreInfoPic($xhsPlatformStoreInfoPic) {
        $this->xhsPlatformStoreInfoPic = $xhsPlatformStoreInfoPic;
    }

    public function getXhsPlatformBusiEntPic() {
        return $this->xhsPlatformBusiEntPic;
    }

    public function setXhsPlatformBusiEntPic($xhsPlatformBusiEntPic) {
        $this->xhsPlatformBusiEntPic = $xhsPlatformBusiEntPic;
    }

    public function getXhsPlatformOrderDetailPic() {
        return $this->xhsPlatformOrderDetailPic;
    }

    public function setXhsPlatformOrderDetailPic($xhsPlatformOrderDetailPic) {
        $this->xhsPlatformOrderDetailPic = $xhsPlatformOrderDetailPic;
    }

    public function getXhsPlatformFundFlowPic() {
        return $this->xhsPlatformFundFlowPic;
    }

    public function setXhsPlatformFundFlowPic($xhsPlatformFundFlowPic) {
        $this->xhsPlatformFundFlowPic = $xhsPlatformFundFlowPic;
    }

    public function getXhsMobileStoreShowcasePic() {
        return $this->xhsMobileStoreShowcasePic;
    }

    public function setXhsMobileStoreShowcasePic($xhsMobileStoreShowcasePic) {
        $this->xhsMobileStoreShowcasePic = $xhsMobileStoreShowcasePic;
    }

    public function getXhsMobileBusiQualificationPic() {
        return $this->xhsMobileBusiQualificationPic;
    }

    public function setXhsMobileBusiQualificationPic($xhsMobileBusiQualificationPic) {
        $this->xhsMobileBusiQualificationPic = $xhsMobileBusiQualificationPic;
    }

    public function getXhsMobileStoreDetailPic() {
        return $this->xhsMobileStoreDetailPic;
    }

    public function setXhsMobileStoreDetailPic($xhsMobileStoreDetailPic) {
        $this->xhsMobileStoreDetailPic = $xhsMobileStoreDetailPic;
    }

    public function getWxsphPlatformTransDataPic() {
        return $this->wxsphPlatformTransDataPic;
    }

    public function setWxsphPlatformTransDataPic($wxsphPlatformTransDataPic) {
        $this->wxsphPlatformTransDataPic = $wxsphPlatformTransDataPic;
    }

    public function getWxsphPlatformStoreInfoPic() {
        return $this->wxsphPlatformStoreInfoPic;
    }

    public function setWxsphPlatformStoreInfoPic($wxsphPlatformStoreInfoPic) {
        $this->wxsphPlatformStoreInfoPic = $wxsphPlatformStoreInfoPic;
    }

    public function getWxsphPlatformBusiEntPic() {
        return $this->wxsphPlatformBusiEntPic;
    }

    public function setWxsphPlatformBusiEntPic($wxsphPlatformBusiEntPic) {
        $this->wxsphPlatformBusiEntPic = $wxsphPlatformBusiEntPic;
    }

    public function getWxsphPlatformOrderDetailPic() {
        return $this->wxsphPlatformOrderDetailPic;
    }

    public function setWxsphPlatformOrderDetailPic($wxsphPlatformOrderDetailPic) {
        $this->wxsphPlatformOrderDetailPic = $wxsphPlatformOrderDetailPic;
    }

    public function getWxsphPlatformFundFlowPic() {
        return $this->wxsphPlatformFundFlowPic;
    }

    public function setWxsphPlatformFundFlowPic($wxsphPlatformFundFlowPic) {
        $this->wxsphPlatformFundFlowPic = $wxsphPlatformFundFlowPic;
    }

    public function getWxsphMobileStoreShowcasePic() {
        return $this->wxsphMobileStoreShowcasePic;
    }

    public function setWxsphMobileStoreShowcasePic($wxsphMobileStoreShowcasePic) {
        $this->wxsphMobileStoreShowcasePic = $wxsphMobileStoreShowcasePic;
    }

    public function getWxsphMobileBusiQualificationPic() {
        return $this->wxsphMobileBusiQualificationPic;
    }

    public function setWxsphMobileBusiQualificationPic($wxsphMobileBusiQualificationPic) {
        $this->wxsphMobileBusiQualificationPic = $wxsphMobileBusiQualificationPic;
    }

    public function getWxsphMobileStoreDetailPic() {
        return $this->wxsphMobileStoreDetailPic;
    }

    public function setWxsphMobileStoreDetailPic($wxsphMobileStoreDetailPic) {
        $this->wxsphMobileStoreDetailPic = $wxsphMobileStoreDetailPic;
    }

    public function getJdPlatformTransDataPic() {
        return $this->jdPlatformTransDataPic;
    }

    public function setJdPlatformTransDataPic($jdPlatformTransDataPic) {
        $this->jdPlatformTransDataPic = $jdPlatformTransDataPic;
    }

    public function getJdPlatformStoreInfoPic() {
        return $this->jdPlatformStoreInfoPic;
    }

    public function setJdPlatformStoreInfoPic($jdPlatformStoreInfoPic) {
        $this->jdPlatformStoreInfoPic = $jdPlatformStoreInfoPic;
    }

    public function getJdPlatformBusiEntPic() {
        return $this->jdPlatformBusiEntPic;
    }

    public function setJdPlatformBusiEntPic($jdPlatformBusiEntPic) {
        $this->jdPlatformBusiEntPic = $jdPlatformBusiEntPic;
    }

    public function getJdPlatformOrderDetailPic() {
        return $this->jdPlatformOrderDetailPic;
    }

    public function setJdPlatformOrderDetailPic($jdPlatformOrderDetailPic) {
        $this->jdPlatformOrderDetailPic = $jdPlatformOrderDetailPic;
    }

    public function getJdPlatformFundFlowPic() {
        return $this->jdPlatformFundFlowPic;
    }

    public function setJdPlatformFundFlowPic($jdPlatformFundFlowPic) {
        $this->jdPlatformFundFlowPic = $jdPlatformFundFlowPic;
    }

    public function getJdMobileStoreShowcasePic() {
        return $this->jdMobileStoreShowcasePic;
    }

    public function setJdMobileStoreShowcasePic($jdMobileStoreShowcasePic) {
        $this->jdMobileStoreShowcasePic = $jdMobileStoreShowcasePic;
    }

    public function getJdMobileBusiQualificationPic() {
        return $this->jdMobileBusiQualificationPic;
    }

    public function setJdMobileBusiQualificationPic($jdMobileBusiQualificationPic) {
        $this->jdMobileBusiQualificationPic = $jdMobileBusiQualificationPic;
    }

    public function getJdMobileStoreDetailPic() {
        return $this->jdMobileStoreDetailPic;
    }

    public function setJdMobileStoreDetailPic($jdMobileStoreDetailPic) {
        $this->jdMobileStoreDetailPic = $jdMobileStoreDetailPic;
    }

    public function getDwPlatformTransDataPic() {
        return $this->dwPlatformTransDataPic;
    }

    public function setDwPlatformTransDataPic($dwPlatformTransDataPic) {
        $this->dwPlatformTransDataPic = $dwPlatformTransDataPic;
    }

    public function getDwPlatformStoreInfoPic() {
        return $this->dwPlatformStoreInfoPic;
    }

    public function setDwPlatformStoreInfoPic($dwPlatformStoreInfoPic) {
        $this->dwPlatformStoreInfoPic = $dwPlatformStoreInfoPic;
    }

    public function getDwPlatformBusiEntPic() {
        return $this->dwPlatformBusiEntPic;
    }

    public function setDwPlatformBusiEntPic($dwPlatformBusiEntPic) {
        $this->dwPlatformBusiEntPic = $dwPlatformBusiEntPic;
    }

    public function getDwPlatformOrderDetailPic() {
        return $this->dwPlatformOrderDetailPic;
    }

    public function setDwPlatformOrderDetailPic($dwPlatformOrderDetailPic) {
        $this->dwPlatformOrderDetailPic = $dwPlatformOrderDetailPic;
    }

    public function getDwPlatformFundFlowPic() {
        return $this->dwPlatformFundFlowPic;
    }

    public function setDwPlatformFundFlowPic($dwPlatformFundFlowPic) {
        $this->dwPlatformFundFlowPic = $dwPlatformFundFlowPic;
    }

    public function getDwMobileStoreShowcasePic() {
        return $this->dwMobileStoreShowcasePic;
    }

    public function setDwMobileStoreShowcasePic($dwMobileStoreShowcasePic) {
        $this->dwMobileStoreShowcasePic = $dwMobileStoreShowcasePic;
    }

    public function getDwMobileBusiQualificationPic() {
        return $this->dwMobileBusiQualificationPic;
    }

    public function setDwMobileBusiQualificationPic($dwMobileBusiQualificationPic) {
        $this->dwMobileBusiQualificationPic = $dwMobileBusiQualificationPic;
    }

    public function getDwMobileStoreDetailPic() {
        return $this->dwMobileStoreDetailPic;
    }

    public function setDwMobileStoreDetailPic($dwMobileStoreDetailPic) {
        $this->dwMobileStoreDetailPic = $dwMobileStoreDetailPic;
    }

    public function getMtPlatformTransDataPic() {
        return $this->mtPlatformTransDataPic;
    }

    public function setMtPlatformTransDataPic($mtPlatformTransDataPic) {
        $this->mtPlatformTransDataPic = $mtPlatformTransDataPic;
    }

    public function getMtPlatformStoreInfoPic() {
        return $this->mtPlatformStoreInfoPic;
    }

    public function setMtPlatformStoreInfoPic($mtPlatformStoreInfoPic) {
        $this->mtPlatformStoreInfoPic = $mtPlatformStoreInfoPic;
    }

    public function getMtPlatformBusiEntPic() {
        return $this->mtPlatformBusiEntPic;
    }

    public function setMtPlatformBusiEntPic($mtPlatformBusiEntPic) {
        $this->mtPlatformBusiEntPic = $mtPlatformBusiEntPic;
    }

    public function getMtPlatformOrderDetailPic() {
        return $this->mtPlatformOrderDetailPic;
    }

    public function setMtPlatformOrderDetailPic($mtPlatformOrderDetailPic) {
        $this->mtPlatformOrderDetailPic = $mtPlatformOrderDetailPic;
    }

    public function getMtPlatformFundFlowPic() {
        return $this->mtPlatformFundFlowPic;
    }

    public function setMtPlatformFundFlowPic($mtPlatformFundFlowPic) {
        $this->mtPlatformFundFlowPic = $mtPlatformFundFlowPic;
    }

    public function getMtMobileStoreShowcasePic() {
        return $this->mtMobileStoreShowcasePic;
    }

    public function setMtMobileStoreShowcasePic($mtMobileStoreShowcasePic) {
        $this->mtMobileStoreShowcasePic = $mtMobileStoreShowcasePic;
    }

    public function getMtMobileBusiQualificationPic() {
        return $this->mtMobileBusiQualificationPic;
    }

    public function setMtMobileBusiQualificationPic($mtMobileBusiQualificationPic) {
        $this->mtMobileBusiQualificationPic = $mtMobileBusiQualificationPic;
    }

    public function getMtMobileStoreDetailPic() {
        return $this->mtMobileStoreDetailPic;
    }

    public function setMtMobileStoreDetailPic($mtMobileStoreDetailPic) {
        $this->mtMobileStoreDetailPic = $mtMobileStoreDetailPic;
    }

    public function getWphPlatformTransDataPic() {
        return $this->wphPlatformTransDataPic;
    }

    public function setWphPlatformTransDataPic($wphPlatformTransDataPic) {
        $this->wphPlatformTransDataPic = $wphPlatformTransDataPic;
    }

    public function getWphPlatformStoreInfoPic() {
        return $this->wphPlatformStoreInfoPic;
    }

    public function setWphPlatformStoreInfoPic($wphPlatformStoreInfoPic) {
        $this->wphPlatformStoreInfoPic = $wphPlatformStoreInfoPic;
    }

    public function getWphPlatformBusiEntPic() {
        return $this->wphPlatformBusiEntPic;
    }

    public function setWphPlatformBusiEntPic($wphPlatformBusiEntPic) {
        $this->wphPlatformBusiEntPic = $wphPlatformBusiEntPic;
    }

    public function getWphPlatformOrderDetailPic() {
        return $this->wphPlatformOrderDetailPic;
    }

    public function setWphPlatformOrderDetailPic($wphPlatformOrderDetailPic) {
        $this->wphPlatformOrderDetailPic = $wphPlatformOrderDetailPic;
    }

    public function getWphPlatformFundFlowPic() {
        return $this->wphPlatformFundFlowPic;
    }

    public function setWphPlatformFundFlowPic($wphPlatformFundFlowPic) {
        $this->wphPlatformFundFlowPic = $wphPlatformFundFlowPic;
    }

    public function getWphMobileStoreShowcasePic() {
        return $this->wphMobileStoreShowcasePic;
    }

    public function setWphMobileStoreShowcasePic($wphMobileStoreShowcasePic) {
        $this->wphMobileStoreShowcasePic = $wphMobileStoreShowcasePic;
    }

    public function getWphMobileBusiQualificationPic() {
        return $this->wphMobileBusiQualificationPic;
    }

    public function setWphMobileBusiQualificationPic($wphMobileBusiQualificationPic) {
        $this->wphMobileBusiQualificationPic = $wphMobileBusiQualificationPic;
    }

    public function getWphMobileStoreDetailPic() {
        return $this->wphMobileStoreDetailPic;
    }

    public function setWphMobileStoreDetailPic($wphMobileStoreDetailPic) {
        $this->wphMobileStoreDetailPic = $wphMobileStoreDetailPic;
    }

}
