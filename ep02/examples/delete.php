<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(6);

if($user)
{
    $user->destroy();
    echo "registro deletado com sucesso!";
} else
{
    var_dump($user);
}

