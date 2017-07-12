<?php

namespace LeosPartnerDto\Dto\Fulfilment;

class Nomenclature
{
    /** @var string */
    public $sku;

    /** @var string */
    public $barcode;

    /** @var string */
    public $name;

    /** @var string */
    public $size;

    /** @var string */
    public $color;

    /** @var string */
    public $materials;

    /** @var string */
    public $brand;

    /** @var string */
    public $countryOfOrigin;

    /** @var string */
    public $isPrintEAC;

    /** @var string */
    public $category;

    /** @var array */
    public $imageUrls;

    /** @var string */
    public $gender;

    /** @var string */
    public $parentSku;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * @param string $materials
     */
    public function setMaterials($materials)
    {
        $this->materials = $materials;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * @param string $countryOfOrigin
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }

    /**
     * @return string
     */
    public function getPrintEAC()
    {
        return $this->isPrintEAC;
    }

    /**
     * @param string $isPrintEAC
     */
    public function setIsPrintEAC($isPrintEAC)
    {
        $this->isPrintEAC = $isPrintEAC;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return array
     */
    public function getImageUrls()
    {
        return $this->imageUrls;
    }

    /**
     * @param array $imageUrls
     */
    public function setImageUrls(array $imageUrls)
    {
        $this->imageUrls = $imageUrls;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return null|string
     */
    public function getParentSku()
    {
        return $this->parentSku;
    }

    /**
     * @param null|string $parentSku
     */
    public function setParentSku($parentSku)
    {
        $this->parentSku = $parentSku;
    }
}
