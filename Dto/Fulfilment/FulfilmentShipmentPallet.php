<?php

namespace LeosPartnerDto\Dto\Fulfilment;

class FulfilmentShipmentPallet
{
    /** @var string */
    public $barcode;

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
}
