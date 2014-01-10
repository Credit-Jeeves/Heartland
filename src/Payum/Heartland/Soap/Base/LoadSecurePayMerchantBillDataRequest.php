<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class LoadSecurePayMerchantBillDataRequest extends MerchantRequest
{
    /**
     * BillData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfSecurePayBill
     *
     * @var ArrayOfSecurePayBill
     */
    protected $BillData = null;

    /**
     * MaxFuturePaymentDays
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $MaxFuturePaymentDays;

    /**
     * ReturnTokenWithResponse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $ReturnTokenWithResponse;

    /**
     * @param ArrayOfSecurePayBill $billData
     *
     * @return LoadSecurePayMerchantBillDataRequest
     */
    public function setBillData(ArrayOfSecurePayBill $billData)
    {
        $this->BillData = $billData;

        return $this;
    }

    /**
     * @return ArrayOfSecurePayBill
     */
    public function getBillData()
    {
        if (null === $this->BillData) {
            $this->BillData = new ArrayOfSecurePayBill();
        }

        return $this->BillData;
    }

    /**
     * @param int $maxFuturePaymentDays
     *
     * @return LoadSecurePayMerchantBillDataRequest
     */
    public function setMaxFuturePaymentDays($maxFuturePaymentDays)
    {
        $this->MaxFuturePaymentDays = $maxFuturePaymentDays;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxFuturePaymentDays()
    {
        return $this->MaxFuturePaymentDays;
    }

    /**
     * @param boolean $returnTokenWithResponse
     *
     * @return LoadSecurePayMerchantBillDataRequest
     */
    public function setReturnTokenWithResponse($returnTokenWithResponse)
    {
        $this->ReturnTokenWithResponse = $returnTokenWithResponse;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnTokenWithResponse()
    {
        return $this->ReturnTokenWithResponse;
    }
}
