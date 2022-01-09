<?php

class Product{

    private $price;

    function __construct($price)
    {
        $this->price = $price;
    }

    function getPrice(){
        return $this->price;
    }

}