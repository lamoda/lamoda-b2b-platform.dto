<?php

namespace LeosPartnerDto\Dto\Shipment\Out;

class ShipmentOutDtoItem
{
    /** @var string */
    public $unitload;

    /** @var string */
    public $sku;

    /** @var string */
    public $orderNr;

    /** @var float */
    public $weight;

    /** @var float */
    public $length;

    /** @var float */
    public $width;

    /** @var float */
    public $height;

    /**
     * @return string
     */
    public function getUnitload()
    {
        return $this->unitload;
    }

    /**
     * @param string $unitload
     */
    public function setUnitload($unitload)
    {
        $this->unitload = $unitload;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getOrderNr()
    {
        return $this->orderNr;
    }

    /**
     * @param string $orderNr
     */
    public function setOrderNr($orderNr)
    {
        $this->orderNr = $orderNr;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param float $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
}
