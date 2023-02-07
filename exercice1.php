<?php

class MyCalculator
{
    public $number1;
    public $number2;
    function __construct($number1,$number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }
    // Pour effecuter l'addition 
    public function add()
    {
        return $this->number1 + $this->number2;
    }

    // Pour effectuer la soustration 

    public function sub()
    {
        return $this->number1 - $this->number2;
    }

    // Pour effectuer la soustration 

    public function multiply()
    {
        return $this->number1 * $this->number2;
    }

     // Pour effectuer la soustration 

     public function division()
     {
         return $this->number1 / $this->number2;
     }
}

$mycalc = new MyCalculator(12, 6);
echo $mycalc->add();
echo $mycalc->multiply();
