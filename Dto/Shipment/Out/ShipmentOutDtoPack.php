<?php

namespace LeosPartnerDto\Dto\Shipment\Out;

class ShipmentOutDtoPack extends ShipmentOutDtoContainer
{
    /** @var float */
    public $weight;

    /** @var float */
    public $length;

    /** @var float */
    public $width;

    /** @var float */
    public $height;

    /** @var ShipmentOutDtoItem[] */
    public $items = [];

    public function __construct()
    {
        $this->setType(self::TYPE_PACK);
    }

    /**
     * @return ShipmentOutDtoItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param ShipmentOutDtoItem[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @param ShipmentOutDtoItem $item
     */
    public function addItem(ShipmentOutDtoItem $item)
    {
        $this->items[] = $item;
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

    /**
     * @return null
     */
    public function getContainers()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getBarcodePrefix()
    {
        return 'PACK';
    }
}
