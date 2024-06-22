<?php

namespace App\Models;

Class User {
    private $firstName;
    private $lastName;

    public function _construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName(){
        return $this->firstName.''. $this->lastName;
    }



    }
