<?php

namespace LeosPartnerDto\Dto\Fulfilment;

class FulfilmentShipment
{
    const DATE_FORMAT = 'd.m.Y';

    /** @var string */
    public $id;

    /** @var string */
    public $date;

    /** @var string|null */
    public $partnerId;

    /** @var FulfilmentShipmentPallet[] */
    public $pallets;

    /** @var FulfilmentShipmentItem[] */
    public $items;

    /** @var string|null */
    public $documentNumber;

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

    /**
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * @param string|null $partnerId
     *
     * @return $this
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * @param string|null $documentNumber
     *
     * @return $this
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }
}
