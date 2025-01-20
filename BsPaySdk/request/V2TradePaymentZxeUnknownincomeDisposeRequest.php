<?php

namespace BsPaySdk\request;

use BsPaySdk\enums\FunctionCodeEnum;

/**
 * 不明来账处理
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentZxeUnknownincomeDisposeRequest extends BaseRequest
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
     * 商户号
     */
    private $huifuId;
    /**
     * 银行侧交易流水号参照异步通知里的bank_serial_no；&lt;br/&gt;“银行侧交易流水号”和“来账银行账号，来账账户名称，交易金额，交易日期”二选一必填。
     */
    private $bankSerialNo;
    /**
     * 来账银行账号需要密文传输，使用汇付RSA公钥加密(加密前64位，加密后最长2048位），参见[参考文档](https://paas.huifu.com/open/doc/guide/#/api_jiami_jiemi)；示例值：Ly+fnExeyPOTzfOtgRRur77nJB9TAe4PGgK9M……fc6XJXZss&#x3D;“银行侧交易流水号”和“来账银行账号，来账账户名称，交易金额，交易日期”二选一必填。
     */
    private $payAcct;
    /**
     * 来账账户名称“银行侧交易流水号”和“来账银行账号，来账账户名称，交易金额，交易日期”二选一必填。
     */
    private $payAcctName;
    /**
     * 交易金额“银行侧交易流水号”和“来账银行账号，来账账户名称，交易金额，交易日期”二选一必填。
     */
    private $transAmt;
    /**
     * 交易日期“银行侧交易流水号”和“来账银行账号，来账账户名称，交易金额，交易日期”二选一必填。
     */
    private $transDate;
    /**
     * 操作类型
     */
    private $operateType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_ZXE_UNKNOWNINCOME_DISPOSE;
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

    public function getBankSerialNo() {
        return $this->bankSerialNo;
    }

    public function setBankSerialNo($bankSerialNo) {
        $this->bankSerialNo = $bankSerialNo;
    }

    public function getPayAcct() {
        return $this->payAcct;
    }

    public function setPayAcct($payAcct) {
        $this->payAcct = $payAcct;
    }

    public function getPayAcctName() {
        return $this->payAcctName;
    }

    public function setPayAcctName($payAcctName) {
        $this->payAcctName = $payAcctName;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getTransDate() {
        return $this->transDate;
    }

    public function setTransDate($transDate) {
        $this->transDate = $transDate;
    }

    public function getOperateType() {
        return $this->operateType;
    }

    public function setOperateType($operateType) {
        $this->operateType = $operateType;
    }

}
