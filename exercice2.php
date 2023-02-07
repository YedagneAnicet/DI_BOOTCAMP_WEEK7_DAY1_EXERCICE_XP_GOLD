<?php

class Product1
{
    public $name;
    public $description;
    public $price;
}

$product1 = new Product1();
$product1->name = 'iPhone 14';
echo $product1->name;

$product2 = new Product1();
$product2->name = 'iPhone 14 Pro';
echo $product2->name;
