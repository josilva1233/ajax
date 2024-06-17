<?php

require "../../config.php";

use app\models\User;

#atrasar a chamada em 3 segundos
sleep(3);

$user =  new User;

echo json_encode($user->all());
