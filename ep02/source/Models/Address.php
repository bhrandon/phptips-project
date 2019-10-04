<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {   
        //string $entity, array $required, string $primary = 'id', bool $timestamps = true
        parent::__construct("addresses", ["id_users"], "idaddresses", false);
    }

    public function add(User $user, string $street, string $number): Address
    {
        $this->id_users = $user->idusers;
        $this->street   = $street;
        $this->number   = $number;
        
        return $this;
    }
}