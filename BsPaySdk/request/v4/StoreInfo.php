<?php

namespace BsPaySdk\request\v4;

/**
 * 门店信息
 *
 * @author sdk-generator
 * @Description
 */
class StoreInfo {
    /**
     * 门店id
     */
    private $id;
    /**
     * 门店名称
     */
    private $name;
    /**
     * 门店行政区划码
     */
    private $areaCode;
    /**
     * 门店详细地址
     */
    private $address;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAreaCode() {
        return $this->areaCode;
    }

    public function setAreaCode($areaCode) {
        $this->areaCode = $areaCode;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }
}
