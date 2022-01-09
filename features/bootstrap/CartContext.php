<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class CartContext implements Context
{

    private $cart;


    /**
     * @Given An empty cart
     */
    public function anEmptyCart()
    {
        $this->cart = new Cart();
    }

    /**
     * @Then The cart price is :arg1 €
     */
    public function theCartPriceIsEur($price)
    {
     if($this->cart->getPrice() != $price){
         throw new Exception("Price is incorrect");
     }
    }

    /**
     * @Given A product costing :arg1 € is added
     */
    public function aProductCostingEurIsAddedToTheCart($price)
    {
       $product = new Product($price);
       $this->cart->add($product);
    }
}
