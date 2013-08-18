<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetFileResponse extends Response
{
    /**
     * FileContent
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:base64Binary
     *
     * @var string
     */
    public $FileContent;

    /**
     * FileName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $FileName;
}