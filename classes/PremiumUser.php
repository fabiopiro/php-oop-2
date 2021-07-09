<?php

require_once __DIR__ . "/User.php"; 

// classe PremiumUser
class PremiumUser extends User {

    // attributi/proprietà

    // costruttori

    // metodi
    public function getFullName() {
        $prefix = "Premium User";
        return $prefix . " " . parent::getFullName();
    }
}

$p1 = new PremiumUser("Fabio", "Piroddi", "Via mariani");
var_dump($sp1);