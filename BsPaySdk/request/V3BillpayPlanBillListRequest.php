<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 查询账单计划下已生成账单数据
 *
 * @author sdk-generator
 * @Description
 */
class V3BillpayPlanBillListRequest extends BaseRequest
{

    /**
     * 客户请求流水号
     */
    private $reqSeqId;
    /**
     * 客户请求日期
     */
    private $reqDate;
    /**
     * 汇付商户号
     */
    private $huifuId;
    /**
     * 账单计划编号
     */
    private $planNo;
    /**
     * 页码
     */
    private $pageNum;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V3_BILLPAY_PLAN_BILL_LIST;
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

    public function getPlanNo() {
        return $this->planNo;
    }

    public function setPlanNo($planNo) {
        $this->planNo = $planNo;
    }

    public function getPageNum() {
        return $this->pageNum;
    }

    public function setPageNum($pageNum) {
        $this->pageNum = $pageNum;
    }

}
