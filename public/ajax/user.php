<?php

require "../../config.php";

use app\models\User;

$user =  new User;

echo json_encode($user->all());
