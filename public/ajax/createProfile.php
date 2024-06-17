<?php


require "../../config.php";

use app\models\Profile;

$nameProfile = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
#atrasar a chamada em 3 segundos
sleep(3);

$profile = new Profile();

$cadastro = $profile->create($nameProfile);

if($cadastro){
   echo 'cadastrado';
}else{
    echo 'erro';
}

