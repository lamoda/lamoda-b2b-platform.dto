<?php

namespace LeosPartnerDto\Dto\Shipment\Out;

class ShipmentOutDtoPallet extends ShipmentOutDtoContainer
{
    /** @var ShipmentOutDtoPack[] */
    public $containers = [];

    public function __construct()
    {
        $this->setType(self::TYPE_PALLET);
    }

    /**
     * @return ShipmentOutDtoPack[]
     */
    public function getContainers()
    {
        return $this->containers;
    }

    /**
     * @param ShipmentOutDtoPack[] $containers
     */
    public function setContainers($containers)
    {
        $this->containers = $containers;
    }

    /**
     * @param ShipmentOutDtoContainer | ShipmentOutDtoPack $container
     */
    public function addContainer(ShipmentOutDtoContainer $container)
    {
        $this->containers[] = $container;
    }

    /**
     * @return null
     */
    public function getItems()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getBarcodePrefix()
    {
        return 'PAL';
    }
}
