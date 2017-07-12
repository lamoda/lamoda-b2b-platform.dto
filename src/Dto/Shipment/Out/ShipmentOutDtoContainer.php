<?php

namespace LeosPartnerDto\Dto\Shipment\Out;

abstract class ShipmentOutDtoContainer
{
    const TYPE_PACK   = 'pack';
    const TYPE_PALLET = 'pallet';

    /** @var string */
    public $barcode;

    /** @var string */
    public $type;

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    abstract public function getBarcodePrefix();
}
