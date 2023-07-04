<?php

class premiumUser extends User {

    private $price;
    private Membership $membership;

    public function __construct($username, $password, $mail, $verifiedMail, $price, Membership $membership) {

        parent :: __construct($username, $password, $mail, $verifiedMail);
        $this->setPrice($price);
        $this->setMembership($membership);
    
    }
        public function getPrice() {
            return $this->price;
        }

        public function setPrice($price) {
            $this-> price = $price;
        }
        public function getMembership() {
            return $this->membership;
        }

        public function setMembership($membership) {
            $this-> membership = $membership;
        }
    
        public function getActualPrice() {
            return $this -> getPrice() - ($this -> getPrice() * $this -> getMembership() -> getDiscount()/100);
        }
}