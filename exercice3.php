<?php

class Product2
{
    public $name;
    public $description;
    public $price;

    public function __construct($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}

$product1 = new Product2('iPhone 12', 'This is a great iPhone', 799.99);

$product2 = new Product2('Samsung A13', 'This is a great Samsung', 200);
