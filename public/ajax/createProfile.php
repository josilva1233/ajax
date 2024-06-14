<?php


require "../../config.php";

use app\models\Profile;

$nameProfile = filter_input(INPUT_POST, 'nameProfile', FILTER_SANITIZE_STRING);
#atrasar a chamada em 5 segundos
sleep(5);

$profile = new Profile();

$cadastro = $profile->create($nameProfile);

if($cadastro){
   echo 'cadastrado';
}else{
    echo 'erro';
}

