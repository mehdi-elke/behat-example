<?php

class Cart{

    private $products = [];

    public function getPrice(){
        $price = 0;
        foreach($this->products as $product){
            $price += $product->getPrice();
        }

        return $price;
    }

    public function add(Product $product){
        $this->products[] = $product;
    }
}