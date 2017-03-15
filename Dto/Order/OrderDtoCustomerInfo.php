<?php

namespace LeosPartnerDto\Dto\Order;

class OrderDtoCustomerInfo
{
    /** @var string */
    public $firstName;

    /** @var string */
    public $lastName;

    /** @var string */
    public $middleName;

    /** @var string */
    public $phone;

    /** @var string */
    public $email;

    /** @var string */
    public $address;

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param OrderDtoAddress $address
     */
    public function setAddress(OrderDtoAddress $address)
    {
        $this->address = $address;
    }

    /**
     * @return OrderDtoAddress
     */
    public function getAddress()
    {
        return $this->address instanceof OrderDtoAddress ? $this->address : new OrderDtoAddress();
    }
}
