<?php

class Product
{
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    private function getFormattedPrice($price)
    {
        return number_format($price, 2);
    }

    public function showDetails()
    {
        $frmtPrice  = $this->getFormattedPrice($this->price);
        $details= <<<productDetails
        Product Details:
        - ID: {$this->id}
        - Name: {$this->name}
        - Price: \${$frmtPrice}
        productDetails;

        echo $details;
    }
}


$productOne = new Product("1", "iPhone 15 Pro Max Ultra Shakib Khan Edition, Sold By Zayed KHan, Bought By Porimoni, Destroyed By Shoriful Raj", "1934");
$productOne->showDetails();