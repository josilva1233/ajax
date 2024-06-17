<?php

require "../..//config.php";

use app\models\User;
use app\models\Profile;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$nameProfile = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

# Atrasar a chamada em 3 segundos (apenas como exemplo)
sleep(3);

$user = new User;
$profile = new Profile;

$resultadoBusca = $user->buscar($name);

if ($resultadoBusca && !empty($name)) {
    echo json_encode($resultadoBusca);
} else {
    // Se não encontrou usuário, tenta buscar no perfil
    $resultadoBuscaProfile = $profile->buscar($nameProfile);

    if ($resultadoBuscaProfile && !empty($nameProfile)) {
        echo json_encode($resultadoBuscaProfile);
    } else {
        // Se não encontrou perfil e nem usuário
        echo 'notfound';
    }
}



