<?php


require "../../config.php";

use app\models\Profile;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
#atrasar a chamada em 5 segundos
sleep(5);

$profile = new Profile();

$cadastro = $profile->create($name);

if($cadastro){
   echo 'cadastrado';
}else{
    echo 'erro';
}

