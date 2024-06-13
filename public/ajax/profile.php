<?php

require "../../config.php";

use app\models\Profile;

#atrasar a chamada em 5 segundos
sleep(5);

$profile = new Profile;

echo json_encode($profile->all());
