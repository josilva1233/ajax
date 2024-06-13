<?php

require "../../config.php";

use app\models\User;
use app\models\Profile;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

# Atrasar a chamada em 5 segundos (apenas como exemplo)
sleep(5);

$user = new User;
$profile = new Profile();

$resultadoBusca = $user->buscar($name);

if (!$resultadoBusca && !empty($name)) {
    $resultadoBuscaProfile = $profile->buscar($name);

    if (!$resultadoBuscaProfile) {
        echo 'noprofile';
    } else {
        echo json_encode($resultadoBuscaProfile);
    }
} elseif (!empty($resultadoBusca)) {
    echo json_encode($resultadoBusca);
} else {
    echo 'nouser';
}
