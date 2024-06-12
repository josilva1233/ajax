<?php



require "../../config.php";

use app\models\User;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

#atrasar a chamada em 5 segundos
sleep(5);

$user = new User;

$resultadoBusca = $user->buscar($name);

if (!$resultadoBusca || empty($name)) {
    echo 'nouser';
} else {
    echo json_encode($resultadoBusca);
}
