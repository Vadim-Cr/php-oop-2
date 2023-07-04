<?php
class User {
    private $username;
    private $password;
    private $mail;
    private $verifiedMail;

    public function __construct($username, $password, $mail, $verifiedMail) {
        $this -> setUsername ($username);
        $this -> setPassword ($password);
        $this -> setMail ($mail);
        $this -> setVerifiedMail ($verifiedMail);
    }

    public function getUsername() {
        return $this -> username;
    }

    public function setUsername($username) {
        $this -> username = $username;
    }

    public function getPassword() {
        return $this -> password;
    }

    public function setPassword($password) {
        $this -> password = $password;
    }

    public function getMail() {
        return $this -> mail;
    }

    public function setMail($mail) {
        $this -> mail = $mail;
    }

    public function getVerifiedMail() {
        return $this -> verifiedMail;
    }

    public function setVerifiedMail($verifiedMail) {
        $this -> verifiedMail = $verifiedMail;
    }
}