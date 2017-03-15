<?php

namespace LeosPartnerDto\Dto\Order;

class OrderDtoItem
{
    /** @var string */
    public $sku;

    /** @var string */
    public $description;

    /** @var float */
    public $cogsPrice;

    /** @var float */
    public $paidPrice;

    /** @var float */
    public $totalDiscount;

    /** @var float */
    public $price;

    /** @var string */
    public $brand;

    /** @var string */
    public $category;

    /** @var string */
    public $genderCode;

    /** @var string */
    public $colorCode;

    /** @var string */
    public $materialCode;

    /** @var string */
    public $size;

    /** @var string */
    public $sizeScale;

    /** @var string */
    public $url;

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
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
    public function getSku()
    {
        return $this->sku;
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
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $genderCode
     */
    public function setGenderCode($genderCode)
    {
        $this->genderCode = $genderCode;
    }

    /**
     * @return string
     */
    public function getGenderCode()
    {
        return $this->genderCode;
    }

    /**
     * @param string $colorCode
     */
    public function setColorCode($colorCode)
    {
        $this->colorCode = $colorCode;
    }

    /**
     * @return string
     */
    public function getColorCode()
    {
        return $this->colorCode;
    }

    /**
     * @param string $materialCode
     */
    public function setMaterialCode($materialCode)
    {
        $this->materialCode = $materialCode;
    }

    /**
     * @return string
     */
    public function getMaterialCode()
    {
        return $this->materialCode;
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
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $sizeScale
     */
    public function setSizeScale($sizeScale)
    {
        $this->sizeScale = $sizeScale;
    }

    /**
     * @return string
     */
    public function getSizeScale()
    {
        return $this->sizeScale;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param float $cogsPrice
     */
    public function setCogsPrice($cogsPrice)
    {
        $this->cogsPrice = $cogsPrice;
    }

    /**
     * @return float
     */
    public function getCogsPrice()
    {
        return $this->cogsPrice;
    }

    /**
     * @param float $paidPrice
     */
    public function setPaidPrice($paidPrice)
    {
        $this->paidPrice = $paidPrice;
    }

    /**
     * @return float
     */
    public function getPaidPrice()
    {
        return $this->paidPrice;
    }

    /**
     * @param float $totalDiscount
     */
    public function setTotalDiscount($totalDiscount)
    {
        $this->totalDiscount = $totalDiscount;
    }

    /**
     * @return float
     */
    public function getTotalDiscount()
    {
        return $this->totalDiscount;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
