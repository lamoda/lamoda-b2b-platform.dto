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

    /** @var string|null */
    public $ean;

    /** @var float|null */
    public $weight;

    /** @var string|null */
    public $datamatrix;

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

    /**
     * @return string|null
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string|null $ean
     *
     * @return FulfilmentShipmentItem
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     *
     * @return FulfilmentShipmentItem
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDatamatrix()
    {
        return $this->datamatrix;
    }

    /**
     * @param string|null $datamatrix
     *
     * @return FulfilmentShipmentItem
     */
    public function setDatamatrix($datamatrix)
    {
        $this->datamatrix = $datamatrix;

        return $this;
    }
}
