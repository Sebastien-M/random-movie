<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author seb
 */
class User {

    private $id;
    private $pseudo;
    private $password;
    private $email;

    function __construct($id, $pseudo, $password, $email) {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->email = $email;
    }

    function getId() {
        return $this->id;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

}
