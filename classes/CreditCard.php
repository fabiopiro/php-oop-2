<?php

// classe CreditCard
class CreditCard {

    // attributi/proprietà
    private $number;

    // costruttori
    function __construct($number) {
        $this->number = $number;
    }

    // metodi
}

$c99 = new CreditCard("1111 0000 1111 0000");

var_dump($c99);