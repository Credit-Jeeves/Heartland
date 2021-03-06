<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class TokenToCharge extends CardToCharge
{
    /**
     * Token
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Token = null;

    /**
     * @param string $token
     *
     * @return TokenToCharge
     */
    public function setToken($token)
    {
        $this->Token = $token;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }
}
