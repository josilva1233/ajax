<?php


require "../../config.php";

use app\models\User;

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

#atrasar a chamada em 3 segundos
sleep(3);

$user = new User;

# criptografar a senha
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$cadastro = $user->delete($id);

if($cadastro){
   echo 'deletado';
}else{
    echo 'erro';
}

