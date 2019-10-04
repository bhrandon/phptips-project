<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();

$user->first_name = "Aline";
$user->last_name  = "Gomes";
$user->genre      = "F";
$user->save();

// $addr = new Address();
// $addr->add($user, "Endereço 4", "201a");
// $addr->save();

var_dump($user);

