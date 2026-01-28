<?php

namespace BsPaySdk\request\v4;

/**
 * 服务商信息
 *
 * @author sdk-generator
 * @Description PidInfo
 */
class PidInfo {
    /**
     * 服务商订单编号
     */
    private $pnrOrderId;
    /**
     * 服务商密文
     */
    private $pidSct;
    /**
     * 场景标识
     */
    private $tradeScene;

    public function getPnrOrderId() {
        return $this->pnrOrderId;
    }

    public function setPnrOrderId(StoreInfo $pnrOrderId) {
        $this->pnrOrderId = $pnrOrderId;
    }

    public function getPidSct() {
        return $this->pidSct;
    }

    public function setPidSct(StoreInfo $pidSct) {
        $this->pidSct = $pidSct;
    }

    public function getTradeScene() {
        return $this->tradeScene;
    }

    public function setTradeScene(StoreInfo $tradeScene) {
        $this->tradeScene = $tradeScene;
    }
}