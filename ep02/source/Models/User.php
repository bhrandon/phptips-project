<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {   
        //string $entity, array $required, string $primary = 'id', bool $timestamps = true
        parent::__construct("users", ["first_name", "last_name"], "idusers");
    }

    
    public function addresses()
    {
        return (new Address())->find("id_users = :uid", "uid={$this->idusers}")->fetch(true);   
    }
}