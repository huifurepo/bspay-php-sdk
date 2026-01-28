<?php

namespace BsPaySdk\request\v4;

/**
 * 场景信息
 *
 * @author sdk-generator
 * @Description
 */
class SceneInfo {
    /**
     * 门店信息
     */
    private $storeInfo;

    public function getStoreInfo() {
        return $this->storeInfo;
    }

    public function setStoreInfo($storeInfo) {
        $this->storeInfo = $storeInfo;
    }
}
