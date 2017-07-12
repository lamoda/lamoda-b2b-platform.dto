<?php

namespace LeosPartnerDto\Dto;

use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @JMS\XmlRoot("Inventory")
 *
 * @JMS\AccessType("public_method")
 */
class StockStateItemDto
{
    const STORAGE_LOCATION = 'LM';
    const DC_NUMBER        = 'YourDCNumber';

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Sku")
     * @JMS\XmlElement(cdata=false)
     */
    protected $sku;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("OnHandQuantity")
     * @JMS\XmlElement(cdata=false)
     */
    protected $onHandQuantity;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DCNumber")
     * @JMS\XmlElement(cdata=false)
     */
    protected $dCNumber = self::DC_NUMBER;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("StorageLocation")
     * @JMS\XmlElement(cdata=false)
     */
    protected $storageLocation = self::STORAGE_LOCATION;

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getOnHandQuantity()
    {
        return $this->onHandQuantity;
    }

    /**
     * @param string $onHandQuantity
     */
    public function setOnHandQuantity($onHandQuantity)
    {
        $this->onHandQuantity = $onHandQuantity;
    }

    /**
     * @return string
     */
    public function getStorageLocation()
    {
        return $this->storageLocation;
    }

    /**
     * @param string $storageLocation
     */
    public function setStorageLocation($storageLocation)
    {
        $this->storageLocation = $storageLocation;
    }

    /**
     * @return string
     */
    public function getDCNumber()
    {
        return $this->dCNumber;
    }

    /**
     * @param string $dCNumber
     */
    public function setDCNumber($dCNumber)
    {
        $this->dCNumber = $dCNumber;
    }
}