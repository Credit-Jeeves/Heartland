<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetTokenRequest extends MerchantRequest
{
    /**
     * ACHAccountType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q7:ACHAccountType
     *
     * @var ACHAccountType
     */
    public $ACHAccountType;

    /**
     * ACHDepositType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q8:ACHDepositType
     *
     * @var ACHDepositType
     */
    public $ACHDepositType;

    /**
     * AccountHolderData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q9:CardHolderData
     *
     * @var CardHolderData
     */
    public $AccountHolderData;

    /**
     * AccountNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $AccountNumber;

    /**
     * ExpirationMonth
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $ExpirationMonth;

    /**
     * ExpirationYear
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $ExpirationYear;

    /**
     * PaymentMethod
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:TokenPaymentMethod
     *
     * @var TokenPaymentMethod
     */
    public $PaymentMethod;

    /**
     * RoutingNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $RoutingNumber;

    /**
     * SkipAccountVerify
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $SkipAccountVerify;
}