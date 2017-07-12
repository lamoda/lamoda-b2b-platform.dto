<?php

namespace LeosPartnerDto\Dto\Order;

class OrderDtoOrder
{
    /** @var string */
    public $orderNr;

    /** @var string */
    public $deliveryDate;

    /** @var string */
    public $deliveryIntervalFrom;

    /** @var string */
    public $deliveryIntervalTo;

    /** @var string */
    public $paymentDate;

    /** @var string */
    public $paymentMethod;

    /** @var string */
    public $source;

    /** @var string */
    public $comment;

    /** @var OrderDtoCustomerInfo */
    public $customerInfo;

    /** @var OrderDtoItem[] */
    public $items = [];

    /** @var OrderDtoOption[] */
    public $options = [];

    /** @var string */
    public $shippingMethodCode;

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
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return OrderDtoItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param OrderDtoItem $item
     */
    public function addItem(OrderDtoItem $item)
    {
        $this->items[] = $item;
    }

    /**
     * @param OrderDtoItem[] $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

    /**
     * @param string $orderNr
     */
    public function setOrderNr($orderNr)
    {
        $this->orderNr = $orderNr;
    }

    /**
     * @return string
     */
    public function getOrderNr()
    {
        return $this->orderNr;
    }

    /**
     * @param string $deliveryDate
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param string $deliveryIntervalFrom
     */
    public function setDeliveryIntervalFrom($deliveryIntervalFrom)
    {
        $this->deliveryIntervalFrom = $deliveryIntervalFrom;
    }

    /**
     * @return string
     */
    public function getDeliveryIntervalFrom()
    {
        return $this->deliveryIntervalFrom;
    }

    /**
     * @param string $deliveryIntervalTo
     */
    public function setDeliveryIntervalTo($deliveryIntervalTo)
    {
        $this->deliveryIntervalTo = $deliveryIntervalTo;
    }

    /**
     * @return string
     */
    public function getDeliveryIntervalTo()
    {
        return $this->deliveryIntervalTo;
    }
    /**
     * @param string $paymentDate
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
    }

    /**
     * @return string
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * @return OrderDtoCustomerInfo
     */
    public function getCustomerInfo()
    {
        return $this->customerInfo instanceof OrderDtoCustomerInfo ? $this->customerInfo : new OrderDtoCustomerInfo();
    }

    /**
     * @param OrderDtoCustomerInfo $customerInfo
     */
    public function setCustomerInfo(OrderDtoCustomerInfo $customerInfo)
    {
        $this->customerInfo = $customerInfo;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param OrderDtoOption[] $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    /**
     * @return OrderDtoOption[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return string
     */
    public function getShippingMethodCode()
    {
        return $this->shippingMethodCode;
    }

    /**
     * @param string $shippingMethodCode
     */
    public function setShippingMethodCode($shippingMethodCode)
    {
        $this->shippingMethodCode = $shippingMethodCode;
    }
}
