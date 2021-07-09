<?php

// classe Item
class Item {

    // attributi/proprietà
    private $name;
    private $price = 0; 

    // costruttori
    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // metodi
    /*
    public function addCart($item) {
    $this->cart = array_push($cart, $item);
    }
    */

}


$i1 = new Item("palla", 3);
var_dump($i1);

$i2 = new Item("mazza", 10);
var_dump($i2);
