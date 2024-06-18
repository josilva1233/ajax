<?php


require "../../config.php";

use app\models\Associate;

$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
$profile_id = filter_input(INPUT_POST, 'profile_id', FILTER_SANITIZE_STRING);

#atrasar a chamada em 3 segundos
sleep(3);

$user = new Associate;

$cadastro = $user->create($user_id, $profile_id);

if($cadastro){
   echo 'associado';
}else{
    echo 'erro';
}

