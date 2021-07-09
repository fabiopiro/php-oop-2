<?php

// classe User
class User {

    // attributi/proprietà
    private $name;
    private $surname;
    private $address;


    // costruttori
    function __construct($name, $surname, $address) {
        $this->name = $name;
        $this->surname = $surname;
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
}