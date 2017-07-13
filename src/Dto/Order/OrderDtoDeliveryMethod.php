<?php

namespace LeosPartnerDto\Dto\Order;

class OrderDtoDeliveryMethod
{
    /** @var string */
    public $deliveryDate;

    /** @var int */
    public $deliveryIntervalId;

    /** @var string */
    public $deliveryIntervalFrom;

    /** @var string */
    public $deliveryIntervalTo;

    /** @var string */
    public $shippingMethodCode;

    /** @var string */
    public $shippingMethodName;

    /**
     * @return mixed
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param string $deliveryDate
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * @return int
     */
    public function getDeliveryIntervalId()
    {
        return $this->deliveryIntervalId;
    }

    /**
     * @param int $deliveryIntervalId
     */
    public function setDeliveryIntervalId($deliveryIntervalId)
    {
        $this->deliveryIntervalId = $deliveryIntervalId;
    }

    /**
     * @return string
     */
    public function getDeliveryIntervalFrom()
    {
        return $this->deliveryIntervalFrom;
    }

    /**
     * @param string $deliveryIntervalFrom
     */
    public function setDeliveryIntervalFrom($deliveryIntervalFrom)
    {
        $this->deliveryIntervalFrom = $deliveryIntervalFrom;
    }

    /**
     * @return string
     */
    public function getDeliveryIntervalTo()
    {
        return $this->deliveryIntervalTo;
    }

    /**
     * @param string $deliveryIntervalTo
     */
    public function setDeliveryIntervalTo($deliveryIntervalTo)
    {
        $this->deliveryIntervalTo = $deliveryIntervalTo;
    }

    /**
     * @return string
     */
    public function getShippingMethodCode()
    {
        return $this->shippingMethodCode;
    }

    /**
     * @param string $shippingMethodCode
     */
    public function setShippingMethodCode($shippingMethodCode)
    {
        $this->shippingMethodCode = $shippingMethodCode;
    }

    /**
     * @return string
     */
    public function getShippingMethodName()
    {
        return $this->shippingMethodName;
    }

    /**
     * @param string $shippingMethodName
     */
    public function setShippingMethodName($shippingMethodName)
    {
        $this->shippingMethodName = $shippingMethodName;
    }
}
