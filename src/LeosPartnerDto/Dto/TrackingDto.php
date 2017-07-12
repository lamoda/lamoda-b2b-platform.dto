<?php

namespace LeosPartnerDto\Dto;

class TrackingDto
{
    /** @var string */
    public $trackingId;

    /** @var string */
    public $orderNr;

    /** @var string */
    public $deliveryDate;

    /** @var string */
    public $deliveryIntervalFrom;

    /** @var string */
    public $deliveryIntervalTo;

    /** @var string */
    public $orderRepresentStatus;

    /**
     * @param string $orderNr
     */
    public function setOrderNr($orderNr)
    {
        $this->orderNr = $orderNr;
    }

    /**
     * @return string
     */
    public function getOrderNr()
    {
        return $this->orderNr;
    }

    /**
     * @param string $deliveryDate
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
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
    public function getDeliveryIntervalFrom()
    {
        return $this->deliveryIntervalFrom;
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
    public function getDeliveryIntervalTo()
    {
        return $this->deliveryIntervalTo;
    }

    /**
     * @return string
     */
    public function getOrderRepresentStatus()
    {
        return $this->orderRepresentStatus;
    }

    /**
     * @param string $orderRepresentStatus
     */
    public function setOrderRepresentStatus($orderRepresentStatus)
    {
        $this->orderRepresentStatus = $orderRepresentStatus;
    }

    /**
     * @return string
     */
    public function getTrackingId()
    {
        return $this->trackingId;
    }

    /**
     * @param string $trackingId
     */
    public function setTrackingId($trackingId)
    {
        $this->trackingId = $trackingId;
    }
}
