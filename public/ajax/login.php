<?php

require "../../config.php";

use app\models\User;

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// Verificar se os campos não estão vazios
if (!$email || !$password) {
    echo json_encode(['status' => 'error', 'message' => 'Email ou senha não podem estar vazios']);
    exit;
}

// Atrasar a chamada em 3 segundos
sleep(3);

$user = new User;

$login = $user->login($email, $password);

if ($login) {
    echo 'logado';
} else {
    echo 'erro';
}
