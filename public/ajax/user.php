<?php

require "../../config.php";

use app\models\User;

#atrasar a chamada em 5 segundos
sleep(5);

$user =  new User;

echo json_encode($user->all());
