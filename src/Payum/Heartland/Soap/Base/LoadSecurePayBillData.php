<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LoadSecurePayBillData
{
    /**
     * request
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q39:LoadSecurePayBillDataRequest
     *
     * @var LoadSecurePayBillDataRequest
     */
    protected $request = null;

    /**
     * @param LoadSecurePayBillDataRequest $request
     *
     * @return LoadSecurePayBillData
     */
    public function setRequest(LoadSecurePayBillDataRequest $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return LoadSecurePayBillDataRequest
     */
    public function getRequest()
    {
        if (null === $this->request) {
            $this->request = new LoadSecurePayBillDataRequest();
        }

        return $this->request;
    }
}
