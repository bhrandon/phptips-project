<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(6);

if($user)
{
    $user->destroy();
    echo "Registro deletado com sucesso!";
} else
{
    echo "Ocorreu um erro ao deletar o registro!";
}

