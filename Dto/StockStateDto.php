<?php

namespace LeosPartnerDto\Dto;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @JMS\XmlRoot("InventoryImport")
 *
 * @JMS\AccessType("public_method")
 */
class StockStateDto
{

    /**
     * @var StockStateItemDto[]
     *
     * @JMS\Type("ArrayCollection<LeosPartnerDto\Dto\StockStateItemDto>")
     * @JMS\SerializedName("Inventories")
     * @JMS\XmlList(inline = false, entry = "Inventory")
     */
    protected $items;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LastSAPProcessedOrder")
     * @JMS\XmlElement(cdata=false)
     */
    protected $lastSAPProcessedOrder;

    /**
     * @return StockStateItemDto[] | ArrayCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param StockStateItemDto[] | ArrayCollection $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return string
     */
    public function getLastSAPProcessedOrder()
    {
        return $this->lastSAPProcessedOrder;
    }

    /**
     * @param string $lastSAPProcessedOrder
     */
    public function setLastSAPProcessedOrder($lastSAPProcessedOrder)
    {
        $this->lastSAPProcessedOrder = $lastSAPProcessedOrder;
    }
}