<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd4
 */
class CardHolderData
{
    /**
     * Address
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Address = null;

    /**
     * City
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $City = null;

    /**
     * Email
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Email = null;

    /**
     * FirstName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $FirstName = null;

    /**
     * LastName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $LastName = null;

    /**
     * Phone
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Phone = null;

    /**
     * State
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $State = null;

    /**
     * Zip
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Zip = null;

    /**
     * Constructor.
     *
     * @param string $address
     * @param string $city
     * @param string $email
     * @param string $firstName
     * @param string $lastName
     * @param string $phone
     * @param string $state
     * @param string $zip
     */
    public function __construct($address = null, $city = null, $email = null, $firstName = null, $lastName = null, $phone = null, $state = null, $zip = null)
    {
        $this->Address = $address;
        $this->City = $city;
        $this->Email = $email;
        $this->FirstName = $firstName;
        $this->LastName = $lastName;
        $this->Phone = $phone;
        $this->State = $state;
        $this->Zip = $zip;
    }

    /**
     * @param string $address
     *
     * @return CardHolderData
     */
    public function setAddress($address)
    {
        $this->Address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $city
     *
     * @return CardHolderData
     */
    public function setCity($city)
    {
        $this->City = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $email
     *
     * @return CardHolderData
     */
    public function setEmail($email)
    {
        $this->Email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $firstName
     *
     * @return CardHolderData
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $lastName
     *
     * @return CardHolderData
     */
    public function setLastName($lastName)
    {
        $this->LastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $phone
     *
     * @return CardHolderData
     */
    public function setPhone($phone)
    {
        $this->Phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $state
     *
     * @return CardHolderData
     */
    public function setState($state)
    {
        $this->State = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $zip
     *
     * @return CardHolderData
     */
    public function setZip($zip)
    {
        $this->Zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->Zip;
    }
}