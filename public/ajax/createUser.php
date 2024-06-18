<?php


require "../../config.php";

use app\models\User;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

#atrasar a chamada em 3 segundos
sleep(3);

$user = new User;

# criptografar a senha
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$cadastro = $user->create($name, $email, $hashed_password);

if($cadastro){
   echo 'cadastrado';
}else{
    echo 'erro';
}

