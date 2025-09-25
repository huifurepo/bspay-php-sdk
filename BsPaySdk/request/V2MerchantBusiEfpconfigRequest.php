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
     * 银行类型switch_state有值时需填写； ht1-华通银行，xw0-XW银行，ss0-苏商银行；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：ht1&lt;/font&gt;
     */
    private $outFundsGateId;
    /**
     * 签约人信息switch_state为1时必填 jsonObject格式
     */
    private $signUserInfo;
    /**
     * 入账来源开通全域资金时需填写；01:抖音 02:美团 03:快手 04:拼多多 05:小红书 06:淘宝/天猫/飞猪 07:微信视频号/微信小店 08:京东 09:饿了么 11:得物 12:唯品会 13:携程 14:支付宝直连 15:微信直连 16:滴滴加油 17:团油 18:通联 19:易宝 20:百度 21:顺丰22:希音 多个逗号分隔；&lt;font color&#x3D;&quot;green&quot;&gt;示例值：01,02,05&lt;/font&gt;；
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

}
