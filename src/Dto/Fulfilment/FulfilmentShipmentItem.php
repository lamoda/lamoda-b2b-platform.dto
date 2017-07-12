<?php

namespace LeosPartnerDto\Dto\Fulfilment;

class FulfilmentShipmentItem
{
    /** @var string */
    public $sku;

    /** @var int */
    public $quantity;

    /** @var float */
    public $price;

    /** @return string */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setNomenclature($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
