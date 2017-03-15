<?php

namespace LeosPartnerDto\Dto\Fulfilment;

class FulfilmentShipment
{
    /** @var string */
    public $id;

    /** @var string */
    public $date;

    /** @var FulfilmentShipmentPallet[] */
    public $pallets;

    /** @var FulfilmentShipmentItem[] */
    public $items;

    /** @return string */
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return FulfilmentShipmentPallet[]
     */
    public function getPallets()
    {
        return $this->pallets;
    }

    /**
     * @param FulfilmentShipmentPallet[] $pallets
     */
    public function setPallets(array $pallets)
    {
        $this->pallets = $pallets;
    }

    /**
     * @return FulfilmentShipmentItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param FulfilmentShipmentItem[] $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }
}
