<?php

class Product
{
    private ?int $id = null;
    private ?string $name = null;
    private ?string $description = null;
    private ?float $price = null;
    private ?string $image = null;
    private ?int $quantity_disp = null;

    public function __construct($id = null, $name, $description, $price, $image, $quantity_disp)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->quantity_disp = $quantity_disp;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of quantity_disp
     */
    public function getQuantityDisp()
    {
        return $this->quantity_disp;
    }

    /**
     * Set the value of quantity_disp
     *
     * @return  self
     */
    public function setQuantityDisp($quantity_disp)
    {
        $this->quantity_disp = $quantity_disp;

        return $this;
    }

    function checkStockStatus($product) {
        if ($product->getQuantityDisp() > 1) {
            echo '<p class="stock" style="color:lightgreen;"><strong>In stock</strong></p>';
        } elseif ($product->getQuantityDisp() == 1) {
            echo '<p class="stock" style="color:orange;"><strong>Last item</strong></p>';
        } else {
            echo '<p class="stock" style="color:red;"><strong>Out of stock</strong></p>';
        }
    }
    












}
