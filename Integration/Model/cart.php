<?php

class Cart
{
    private ?int $idc = null;
    private ?int $product_id = null;
    private ?int $quantity = null;

    public function __construct($idc = null, $product_id = null, $quantity = null)
    {
        $this->idc = $idc;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
    }

    /**
     * Get the value of idc
     */
    public function getIdc()
    {
        return $this->idc;
    }

    /**
     * Get the value of product_id
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set the value of product_id
     *
     * @return  self
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
?>