<?php

require_once __DIR__ . "/CreditCard.php";

// classe User
class User {

    // attributi/proprietà
    private $name;
    private $surname;
    private $address;
    private $credit;


    // costruttori
    function __construct($name, $surname, $address, $credit = "") {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
    }

    // metodi
    public function getFullName() {
        return $this->name . " " .$this->surname;
    }

    public function getAddress() {
        return $this->address;
    }
    /*
    public function setAddres() {
        $this->address = $address;
    }
    */
    public function insertCredit($credit) {
        $this->credit = $credit;
    }
}

$u1 = new User("Ginevra", "Visocchi", "Bresso");

$c1 = new CreditCard("2222");

$u1->insertCredit($c1);

var_dump($u1);

echo $u1 -> getFullName();