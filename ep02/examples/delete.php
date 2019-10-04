<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(6);

if($user)
{
    $user->destroy();
<<<<<<< HEAD
    echo "Registro deletado com sucesso!";
} else
{
    echo "Ocorreu um erro ao deletar o registro!";
=======
    echo "registro deletado com sucesso!";
} else
{
    var_dump($user);
>>>>>>> c3ce4111e11a960aef77950bdaa90e62fc49535b
}

