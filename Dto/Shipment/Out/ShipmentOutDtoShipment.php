<?php

namespace LeosPartnerDto\Dto\Shipment\Out;

class ShipmentOutDtoShipment
{
    /** @var string */
    public $id;

    /** @var string */
    public $type;

    /** @var string */
    public $source;

    /** @var string */
    public $destination;

    /** @var string */
    public $shippedAt;

    /** @var ShipmentOutDtoPallet[] */
    public $containers;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return string
     */
    public function getShippedAt()
    {
        return $this->shippedAt;
    }

    /**
     * @param string $shippedAt
     */
    public function setShippedAt($shippedAt)
    {
        $this->shippedAt = $shippedAt;
    }

    /**
     * @return ShipmentOutDtoContainer[]
     */
    public function getContainers()
    {
        return $this->containers;
    }

    /**
     * @param ShipmentOutDtoContainer[] $containers
     */
    public function setContainers(array $containers)
    {
        $this->containers = $containers;
    }

    /**
     * @param ShipmentOutDtoContainer | ShipmentOutDtoPallet $container
     */
    public function addContainer(ShipmentOutDtoContainer $container)
    {
        $this->containers[] = $container;
    }
}
