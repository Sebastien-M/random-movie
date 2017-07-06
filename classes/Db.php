<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author seb
 */
require_once './User.php';

class Db {
    function newUser(User $user){
        $inp = file_get_contents("./json/users.json");
        $json = json_decode($inp);
        $json->{$user->getPseudo()}["id"] = $user->getId();
        $json->{$user->getPseudo()}["pseudo"] = $user->getPseudo();
        $json->{$user->getPseudo()}["password"] = $user->getPassword();
        $json->{$user->getPseudo()}["email"] = $user->getEmail();
        $jsonData = json_encode($json);
        file_put_contents("./json/users.json", $jsonData);
    }
}
